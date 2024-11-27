<?php
    session_start();
    require_once 'db_pdo.php'; 

    if (!isset($_SESSION['userId'])) {
        header('Location: ../view/connexion.php');
        exit; 
    }

    $userId = $_SESSION['userId']; // Get the user's ID from the session

    // Generate CSRF token if it doesn't exist in the session
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    // Check if the deletion request has been submitted and if the CSRF token is valid
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
        // Check if the CSRF token in the form matches the one stored in the session
        if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
            try {
                $pdo->beginTransaction(); // Start a database transaction

                // 1. Delete the user from the `user_roles` table
                $stmt_delete_role = $pdo->prepare('DELETE FROM `user_roles` WHERE `users_id` = :user_id');
                $stmt_delete_role->bindParam(':user_id', $userId);

                if (!$stmt_delete_role->execute()) {
                    throw new Exception("Error while deleting the role.");
                }

                // 2. Delete user profile from `infos_users` table
                $stmt_delete_profile = $pdo->prepare('DELETE FROM `infos_users` WHERE `users_id` = :user_id');
                $stmt_delete_profile->bindParam(':user_id', $userId);

                if (!$stmt_delete_profile->execute()) {
                    throw new Exception("Error while deleting the profile.");
                }

                // 3. Delete user from `users` table
                $stmt_delete_user = $pdo->prepare('DELETE FROM `users` WHERE `id` = :user_id');
                $stmt_delete_user->bindParam(':user_id', $userId);

                if (!$stmt_delete_user->execute()) {
                    throw new Exception("Error while deleting the user.");
                }

                // Validate the transaction and commit the changes to the database
                $pdo->commit();

                // Destroy session and redirect the user to the login page
                session_destroy(); 
                header('Location: ../view/connexion.php');
                exit; // Ensure no further code is executed

            } catch (Exception $e) {
                // If an error occurs, rollback the transaction to ensure no partial data deletion
                $pdo->rollBack();
            }
        } else {
            // If the CSRF token is invalid or missing, reject the form submission
            echo "Invalid CSRF token. The form submission has been rejected.";
            exit();
        }
    } else {
        header('Location: /view/profil.php');
        exit();
    }
