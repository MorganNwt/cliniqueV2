<?php
    session_start();
    require_once 'db_pdo.php';

    // Vérifier si l'utilisateur est connecté
    if (!isset($_SESSION['userId'])) {
        header('Location: ../view/connexion.php');
        exit;
    }

    // Récupérer l'ID de l'utilisateur connecté
    $userId = $_SESSION['userId'];

    // Vérifier si une demande de suppression a été soumise
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
        try {
            // Commencer une transaction
            $pdo->beginTransaction();

            // 1. Supprimer l'utilisateur de la table `user_roles`
            $stmt_delete_role = $pdo->prepare('DELETE FROM `user_roles` WHERE `users_id` = :user_id');
            $stmt_delete_role->bindParam(':user_id', $userId);

            // Exécuter la suppression du rôle
            if (!$stmt_delete_role->execute()) {
                throw new Exception("Erreur lors de la suppression du rôle.");
            }

            // 2. Supprimer le profil de l'utilisateur dans la table `infos_users`
            $stmt_delete_profile = $pdo->prepare('DELETE FROM `infos_users` WHERE `users_id` = :user_id');
            $stmt_delete_profile->bindParam(':user_id', $userId);

            // Exécuter la suppression du profil
            if (!$stmt_delete_profile->execute()) {
                throw new Exception("Erreur lors de la suppression du profil.");
            }

            // 3. Supprimer l'utilisateur de la table `users`
            $stmt_delete_user = $pdo->prepare('DELETE FROM `users` WHERE `id` = :user_id');
            $stmt_delete_user->bindParam(':user_id', $userId);

            // Exécuter la suppression de l'utilisateur
            if (!$stmt_delete_user->execute()) {
                throw new Exception("Erreur lors de la suppression de l'utilisateur.");
            }

            // Si tout est ok, valider la transaction
            $pdo->commit();

            // Détruire la session et rediriger l'utilisateur
            session_destroy();
            header('Location: ../view/connexion.php');
            exit;
        } catch (Exception $e) {
            // En cas d'erreur, annuler la transaction et afficher le message d'erreur
            $pdo->rollBack();
        }
    } else {
        header('Location: profil.php');
        exit;
    }