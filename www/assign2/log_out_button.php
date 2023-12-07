<?php
    session_start(); 

    // Check if user_id is set in session
    if (isset($_SESSION["user_id"])) {
        // Reset user_id session variable
        unset($_SESSION["user_id"]);
    }

    // Redirect to login page
    header("Location: login.php");
?>