<?php
    session_start();
    require_once 'db_pdo.php';

    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); 
    }

    // Check if user is logged in
    if (!isset($_SESSION['userId'])) {
        header('Location: ../view/connexion.php');
        exit;
    }

    // Retrieve the ID of the logged in user
    $userId = $_SESSION['userId'];

    // Check if profile exists
    $stmt_check = $pdo->prepare('SELECT * FROM infos_users WHERE users_id = :user_id');
    $stmt_check->bindParam(':user_id', $userId);
    $stmt_check->execute();
    $profil = $stmt_check->fetch(PDO::FETCH_ASSOC);

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            // If the CSRF token is missing or invalid, reject the request
            die('Invalid CSRF token. Request rejected.');
        }
        
        // Filter form data
        $_POST = filter_input_array(INPUT_POST, [
            'nom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS, 
            'prenom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS, 
            'date_naissance' => FILTER_SANITIZE_FULL_SPECIAL_CHARS, 
            'telephone' => FILTER_SANITIZE_FULL_SPECIAL_CHARS, 
            'rue' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'cp' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'ville' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        ]);

        // Assigning form data
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date_naissance = $_POST['date_naissance'];
        $telephone = $_POST['telephone'];
        $rue = $_POST['rue'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];

        // Choice of query based on the existence of the profile
        if ($profil) {
            // Update existing profile
            $requete_infos_users = 'UPDATE infos_users SET nom = :nom, prenom = :prenom, date_naissance = :date_naissance, telephone = :telephone, rue = :rue, cp = :cp, ville = :ville WHERE users_id = :users_id';
            $stmt_infos_users = $pdo->prepare($requete_infos_users);
        } else {
            // Inserting a new profile
            $requete_infos_users = 'INSERT INTO infos_users (nom, prenom, date_naissance, telephone, rue, cp, ville, users_id) VALUES (:nom, :prenom, :date_naissance, :telephone, :rue, :cp, :ville, :users_id)';
            $stmt_infos_users = $pdo->prepare(query: $requete_infos_users);
        }

        // Binding parameters
        $stmt_infos_users->bindParam(':nom', $nom);
        $stmt_infos_users->bindParam(':prenom', $prenom);
        $stmt_infos_users->bindParam(':date_naissance', $date_naissance);
        $stmt_infos_users->bindParam(':telephone', $telephone);
        $stmt_infos_users->bindParam(':rue', $rue);
        $stmt_infos_users->bindParam(':cp', $cp);
        $stmt_infos_users->bindParam(':ville', $ville);
        $stmt_infos_users->bindParam(':users_id', $userId);

        // Executing the query and displaying the message
        if ($stmt_infos_users->execute()) {
            // Store success message in session
            $_SESSION['message'] = $profil ? "Profil mis à jour avec succès." : "Profil créé avec succès.";
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            // Store error message in session
            $_SESSION['message'] = $profil ? "Erreur lors de la mise à jour du profil." : "Erreur lors de la création du profil.";
        }
    }
