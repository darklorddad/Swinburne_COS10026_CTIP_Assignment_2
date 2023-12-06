<?php
    session_start(); 
    include("user_table.php");
    createUserTable();

    unset($_SESSION["user_id"]);
    
    if (isset($_SESSION["user_id"]) ) {
        header("Location: edit_user.php");
    }
    else {
        header("Location: login.php");
    }
?>