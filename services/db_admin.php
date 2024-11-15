<?php
    // Open session
    session_start();
    require_once 'db_pdo.php';

    // Verify if  $_SESSION successfully retrieved a user and if admin
    if(isset($_SESSION['userId']) && $_SESSION['isAdmin']){
        $userId = $_SESSION['userId'];
    }else{
        //  if not user and admin, destroy session and redirects to connexion page.
        session_destroy();
        header('Location: ../view/connexion.php');
    }

