<?php
    session_start();
    require_once 'db_pdo.php';
    
    // Creating constants for errors
    const ERROR_REQUIRED = 'Veuillez renseigner ce champ';
    const ERROR_PASSWORD_NUMBER_OF_CARACTERS = 'Le mot de passe ne répond pas aux nombres de caractères requis (13)';
    
    // Creating a table for possible errors
    $errors = [
        'email' => '',
        'passwd' => ''
    ];
    
    $message = '';
    
    // Data processing if the method of the submitted form is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_POST = filter_input_array(INPUT_POST, [
            'email' => FILTER_SANITIZE_EMAIL,
            'passwd' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
        ]);
    
        // Initialization of the variables that will receive the data from the form fields
        $email = $_POST['email'] ?? '';
        $passwd = $_POST['passwd'] ?? '';
    
        // Filling in the table regarding possible errors
        if (empty($email)) {
            $errors['email'] = ERROR_REQUIRED;
        }
        if (empty($passwd)) {
            $errors['passwd'] = ERROR_REQUIRED;
        } elseif (mb_strlen($passwd) < 13) {
            $errors['passwd'] = ERROR_PASSWORD_NUMBER_OF_CARACTERS;
        }
    
        // Execute SELECT query if fields are valid
        if (empty($errors['email']) && empty($errors['passwd'])) {
            $sql = 'SELECT id, passwd FROM users WHERE email = :email';
    
            if (isset($pdo)) {
                $db_statement = $pdo->prepare($sql);
                $db_statement->bindParam(':email', $email, PDO::PARAM_STR);
                $db_statement->execute();
    
                $data = $db_statement->fetch(PDO::FETCH_ASSOC);
                
    
                if ($data && password_verify($passwd, $data['passwd'])) {
                    // Store ID and nickname in session
                    $_SESSION['userId'] = $data['id'];
                    
                    // Check if user is an administrator
                    $sql_role_check = 'SELECT r.role_name FROM user_roles ur
                    JOIN roles r ON ur.role_id = r.id
                    WHERE ur.users_id = :user_id';

                    $stmt_role_check = $pdo->prepare($sql_role_check);
                    $stmt_role_check->bindParam(':user_id', $data['id'], PDO::PARAM_INT);
                    $stmt_role_check->execute();

                    $roles = $stmt_role_check->fetchAll(PDO::FETCH_COLUMN);

                    // Store role in session
                    $_SESSION['isAdmin'] = in_array('ROLE_ADMIN', $roles);

                    header('Location: ../index.php');
                    exit();

                } else {
                    $message = "<span class='message'>Mot de passe incorrect ou utilisateur non trouvé !</span>";
                }
            } else {
                $message = "<span class='message'>Erreur de connexion à la base de données.</span>";
            }
        } else {
            $message = "<span class='message'>Veuillez corriger les erreurs et réessayer.</span>";
        }
    }
