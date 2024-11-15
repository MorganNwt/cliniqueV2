<?php
    session_start();
    // Destroy all session data
    session_destroy();

    // Redirect user to login page
    header("Location:../index.php");
    exit();
