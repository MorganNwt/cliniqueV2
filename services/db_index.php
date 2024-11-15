<?php
    // Open session 
    require_once 'db_pdo.php';

   // Form processing
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['update_message'])) {
            $message = $_POST['flash_message'];
            // Check if a message already exists
            $stmt = $pdo->query("SELECT COUNT(*) FROM flash_message");
            $exists = $stmt->fetchColumn();

            if ($exists) {
                // Update existing flash message
                $stmt = $pdo->prepare("UPDATE flash_message SET message = ?, updated_at = NOW() WHERE id = 1");
                $stmt->execute([$message]);
            } else {
                // Inserts a new flash message with id 1
                $stmt = $pdo->prepare("INSERT INTO flash_message (id, message, updated_at) VALUES (1, ?, NOW())");
                $stmt->execute([$message]);
            }
        } elseif (isset($_POST['delete_message'])) {
            // Delete flash message
            $stmt = $pdo->prepare("DELETE FROM flash_message");
            $stmt->execute();
        }
    }

    // Retrieve current flash message and update date
        $stmt = $pdo->query("SELECT message, updated_at FROM flash_message ORDER BY id ASC LIMIT 1");
        $flash_message_data = $stmt->fetch(PDO::FETCH_ASSOC);
        $flash_message = $flash_message_data['message'] ?? '';
        $updated_at = $flash_message_data['updated_at'] ?? '';