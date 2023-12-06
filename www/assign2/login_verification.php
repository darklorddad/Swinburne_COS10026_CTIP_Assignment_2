<?php
    session_start(); 
    include("user_table.php");
    createUserTable();
    
    if (isset($_SESSION["user_id"]) ) {
        header("Location: user_profile.php");
    }
    else {
        header("Location: login.php");
    }
?>