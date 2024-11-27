<?php
    session_start();
    require_once 'db_pdo.php';

    // Generate a CSRF token if not already done
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Génère un token de 64 caractères
    }

    // Check form submission in POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // CSRF Token Verification
        if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
            $_POST = filter_input_array(INPUT_POST, [
                'pseudo' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                'email' => FILTER_SANITIZE_EMAIL,
                'passwd' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            ]);

        // Hydrate variables with filtered data
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];

        // Password validation
        if (mb_strlen($passwd) >= 13 && preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{13,}$/', $passwd)) {
            // Password hash
            $hachage_password = password_hash($passwd, PASSWORD_BCRYPT);
        } else {
            header('Location: inscription.php?error=password_invalid');
            exit(); 
        }

        try {
            // Checking if email already exists
            $requete_check_email = 'SELECT id FROM users WHERE email = :email';
            $stmt_check_email = $pdo->prepare($requete_check_email);
            $stmt_check_email->bindParam(':email', $email);
            $stmt_check_email->execute();

            // If the email already exists, stop the registration process
            if ($stmt_check_email->rowCount() > 0) {
                echo '<p>Cette adresse email est déjà utilisée. Veuillez en choisir une autre.</p>';
                exit();
            }

            // Start a transaction
            $pdo->beginTransaction();

            // Insert user into users table
            $requete_users = 'INSERT INTO users (pseudo, email, passwd) VALUES (:pseudo, :email, :passwd)';
            $stmt_users = $pdo->prepare($requete_users);
            $stmt_users->bindParam(':pseudo', $pseudo);
            $stmt_users->bindParam(':email', $email);
            $stmt_users->bindParam(':passwd', $hachage_password);
            $stmt_users->execute();

            // Retrieve the ID of the inserted user
            $user_id = $pdo->lastInsertId();

            if (!$user_id) {
                throw new Exception("Échec de la récupération de l'ID de l'utilisateur.");
            }

            // Retrieve the role ID "ROLE_USER"
            $requete_role_user = 'SELECT id FROM roles WHERE role_name = :role_name';
            $stmt_role_user = $pdo->prepare($requete_role_user);
            $role_name = 'ROLE_USER'; // default role
            $stmt_role_user->bindParam(':role_name', $role_name);
            $stmt_role_user->execute();
            $role_id = $stmt_role_user->fetchColumn();

            if (!$role_id) {
                throw new Exception("Échec de la récupération de l'ID du rôle 'ROLE_USER'.");
            }

            // Insert user role into user_roles table
            $requete_user_roles = 'INSERT INTO user_roles (users_id, role_id) VALUES (:users_id, :role_id)';
            $stmt_user_roles = $pdo->prepare($requete_user_roles);
            $stmt_user_roles->bindParam(':users_id', $user_id);
            $stmt_user_roles->bindParam(':role_id', $role_id);
            $stmt_user_roles->execute();

            // Validate the transaction
            $pdo->commit();

            // Create a session for the user so that they remain logged in
            $_SESSION['userId'] = $user_id;

            // Redirect to homepage or another page
            header('Location: ../index.php');
            exit();

        } catch (Exception $e) {
            // Cancel transaction if error occurs
            $pdo->rollBack();
            exit();
        }
    } else {
        exit();
    }
}