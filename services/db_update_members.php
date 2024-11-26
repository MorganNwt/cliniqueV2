<?php
    require_once 'db_pdo.php';

    // Team Member Recovery
    $stmt = $pdo->query("SELECT * FROM team_members");
    $members = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Managing member creation
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_member'])) {
        // Retrieving form data
        $name = $_POST['name'];
        $paragraphe_1 = $_POST['paragraphe_1'];
        $paragraphe_2 = $_POST['paragraphe_2'];
        $paragraphe_3 = $_POST['paragraphe_3'];
        $paragraphe_4 = $_POST['paragraphe_4'];
    
        // Photo upload management
        $photo = 'photo_default.jpg'; // Initialize photo with default photo
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
            $photo = $_FILES['photo']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($photo);
            move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);
        }
    
        // Inserting the new member into the database
        $stmt = $pdo->prepare("INSERT INTO team_members (name, paragraphe_1, paragraphe_2, paragraphe_3, paragraphe_4, photo, created_at, updated_at) VALUES (:name, :paragraphe_1, :paragraphe_2, :paragraphe_3, :paragraphe_4, :photo, NOW(), NOW())");
        
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':paragraphe_1', $paragraphe_1, PDO::PARAM_STR);
        $stmt->bindParam(':paragraphe_2', $paragraphe_2, PDO::PARAM_STR);
        $stmt->bindParam(':paragraphe_3', $paragraphe_3, PDO::PARAM_STR);
        $stmt->bindParam(':paragraphe_4', $paragraphe_4, PDO::PARAM_STR);
        $stmt->bindParam(':photo', $photo, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            $_SESSION['message'] = 'Membre créé avec succès.';
        } else {
            $_SESSION['error'] = 'Erreur lors de la création du membre.';
        }
    
        // Redirect after creation
        header('Location: admin.php');
        exit;
    }

   // Managing a member's update
   if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_member'])) {
        // Retrieving the member ID to update
        $id = $_POST['update_member'];

        // Retrieving new data for the member
        $name = $_POST['name'][$id];
        $paragraphe_1 = $_POST['paragraphe_1'][$id];
        $paragraphe_2 = $_POST['paragraphe_2'][$id];
        $paragraphe_3 = $_POST['paragraphe_3'][$id];
        $paragraphe_4 = $_POST['paragraphe_4'][$id];

        // Managing the upload of the new photo (if provided)
        if (isset($_FILES['photo']['name'][$id]) && $_FILES['photo']['error'][$id] === 0) {
            // A new photo has been provided, so we are processing it.
            $photo = $_FILES['photo']['name'][$id];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($photo);
            move_uploaded_file($_FILES['photo']['tmp_name'][$id], $target_file);
        } else {
            // If no new photo is provided, the existing photo is kept.
            $stmt = $pdo->prepare("SELECT photo FROM team_members WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $existing_member = $stmt->fetch(PDO::FETCH_ASSOC);
            $photo = $existing_member['photo']; // On keeping the old photo
        }

        // Member Update Request
        $stmt = $pdo->prepare("UPDATE team_members SET name = :name, paragraphe_1 = :paragraphe_1, paragraphe_2 = :paragraphe_2, paragraphe_3 = :paragraphe_3, paragraphe_4 = :paragraphe_4, photo = :photo, updated_at = NOW() WHERE id = :id");

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':paragraphe_1', $paragraphe_1, PDO::PARAM_STR);
        $stmt->bindParam(':paragraphe_2', $paragraphe_2, PDO::PARAM_STR);
        $stmt->bindParam(':paragraphe_3', $paragraphe_3, PDO::PARAM_STR);
        $stmt->bindParam(':paragraphe_4', $paragraphe_4, PDO::PARAM_STR);
        $stmt->bindParam(':photo', $photo, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            $_SESSION['message'] = 'Membre mis à jour avec succès.';
        } else {
            $_SESSION['error'] = 'Erreur lors de la mise à jour du membre.';
        }

        // Redirect after update
        header('Location: admin.php');
        exit;
    }

    // Managing member deletion
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_member'])) {
        // Retrieving the ID of the member to be deleted
        $id = $_POST['id'];
    
        // Checking ID validity
        if (!empty($id)) {
            // Deleting member from database
            $stmt = $pdo->prepare("DELETE FROM team_members WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            
            if ($stmt->execute()) {
                $_SESSION['message'] = 'Membre supprimé avec succès.';
            } else {
                $_SESSION['error'] = 'Erreur lors de la suppression du membre.';
            }
        }
    
        // Redirect after deletion
        header('Location: admin.php');
        exit;
    }