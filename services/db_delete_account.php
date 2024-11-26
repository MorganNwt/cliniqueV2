<?php
    session_start();
    require_once 'db_pdo.php';

    // Check if user is logged in
    if (!isset($_SESSION['userId'])) {
        echo "Vous devez être connecté pour accéder à cette page.";
        header('Location: ../view/connexion.php');
        exit;
    }

    // Retrieve the ID of the logged in user
    $userId = $_SESSION['userId'];

    // Check if deletion request is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
        // Delete profile from infos_users table
        $stmt_delete_profile = $pdo->prepare('DELETE FROM infos_users WHERE users_id = :user_id');
        $stmt_delete_profile->bindParam(':user_id', $userId);

        // Delete user from users table
        $stmt_delete_user = $pdo->prepare('DELETE FROM users WHERE id = :user_id');
        $stmt_delete_user->bindParam(':user_id', $userId);

        // Executing the two delete queries
        if ($stmt_delete_profile->execute() && $stmt_delete_user->execute()) {
            // Destroy session and redirect
            session_destroy();
            echo "Votre compte a été supprimé avec succès.";
            header('Location: ../view/connexion.php');
            exit;
        } else {
            echo "Erreur lors de la suppression du compte.";
        }
    } else {
        echo "Action non autorisée.";
        header('Location: profil.php');
        exit;
    }