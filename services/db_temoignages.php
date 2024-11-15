<?php
    session_start();
    require_once 'db_pdo.php';

    $successMessage = '';
    $errorMessage = '';

    try {
        // Check if user is logged in and admin before processing deletion
        if (isset($_SESSION['userId']) && $_SESSION['isAdmin']) {
            // Check if a message should be deleted
            if (isset($_POST['message_id'])) {
                $messageId = $_POST['message_id'];

                // Preparing and executing the deletion request
                $requeteDelete = 'DELETE FROM messages WHERE id = :messageId';
                $stmtDelete = $pdo->prepare($requeteDelete);
                $stmtDelete->bindParam(':messageId', $messageId, PDO::PARAM_INT);

                if ($stmtDelete->execute()) {
                    $successMessage = "Message supprimé avec succès.";
                } else {
                    $errorMessage = "Erreur lors de la suppression du message.";
                }
            }
        } else {
            $errorMessage = "Vous n'êtes pas autorisé à effectuer cette action.";
        }

        // Retrieve messages with user information
        $requete = 'SELECT u.id, u.rating, u.titre, u.content, u.created_at, u.updated_at, i.pseudo, u.users_id
                    FROM messages u
                    JOIN users i ON u.users_id = i.id
                    ORDER BY u.created_at DESC';

        $stmt = $pdo->prepare($requete);
        $stmt->execute();
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Show SQL errors
        echo "Erreur SQL : " . $e->getMessage();
    }
   