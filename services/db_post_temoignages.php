<?php
   session_start();
   require_once 'db_pdo.php';
   
   if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate a secure random token
    }   

   // Check if user is logged in
   if (!isset($_SESSION['userId'])) {
       header('Location: ../view/connexion.php');
       exit();
   }
   
   // Vquery method verification
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            // If the CSRF token is missing or invalid, reject the request
            die('Invalid CSRF token. Request rejected.');
        }
       // Filter entries
       $_POST = filter_input_array(INPUT_POST, [
           'rating' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
           'titre' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
           'content' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
           'message_id' => FILTER_SANITIZE_NUMBER_INT
       ]);
   
       // Hydrate the variables
       $rating = $_POST['rating'];
       $titre = $_POST['titre'];
       $content = $_POST['content'];
       $messageId = $_POST['message_id'];
   
       if ($messageId) {
           // Message update
           $requete_message = 'UPDATE messages SET rating = :rating, titre = :titre, content = :content, updated_at = NOW() WHERE id = :messageId AND users_id = :userId';
           
           $stmt_message = $pdo->prepare($requete_message);
           $stmt_message->bindParam(':rating', $rating);
           $stmt_message->bindParam(':titre', $titre);
           $stmt_message->bindParam(':content', $content);
           $stmt_message->bindParam(':messageId', $messageId, PDO::PARAM_INT);
           $stmt_message->bindParam(':userId', $_SESSION['userId'], PDO::PARAM_INT);
           
           if ($stmt_message->execute()) {
               echo "Message mis à jour avec succès.";
           } else {
               echo "Erreur lors de la mise à jour du message.";
           }
       } else {
           // Inserting the message
           $requete_message = 'INSERT INTO messages (rating, titre, content, users_id, created_at, updated_at) VALUES (:rating, :titre, :content, :users_id, NOW(), NULL)';
           
           $stmt_message = $pdo->prepare($requete_message);
           $stmt_message->bindParam(':rating', $rating);
           $stmt_message->bindParam(':titre', $titre);
           $stmt_message->bindParam(':content', $content);
           $stmt_message->bindParam(':users_id', $_SESSION['userId']);
           
           if ($stmt_message->execute()) {
           } else {
               exit();
           }
       }
   
       // Redirection after processing
       header('Location: ../view/temoignages.php');
       exit();
   }
   
   // Retrieve the message to edit if the action is "edit"
   if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['message_id'])) {
       $messageId = $_GET['message_id'];
   
       // Retrieve the message to edit
       $requete = 'SELECT * FROM messages WHERE id = :messageId AND users_id = :userId';
       $stmt = $pdo->prepare($requete);
       $stmt->bindParam(':messageId', $messageId, PDO::PARAM_INT);
       $stmt->bindParam(':userId', $_SESSION['userId'], PDO::PARAM_INT);
   
       if ($stmt->execute()) {
           $message = $stmt->fetch(PDO::FETCH_ASSOC);
           if ($message) {
               // Fill variables with message data
               $rating = $message['rating'];
               $titre = $message['titre'];
               $content = $message['content'];
           }
       }
   }