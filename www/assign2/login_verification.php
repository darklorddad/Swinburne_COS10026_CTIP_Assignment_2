<?php
    session_start(); 
    include("user_table.php");
    createUserTable();
    
    if (isset($_SESSION["user_id"]) ) {
        if ($_SESSION["user_id"] == "000001") {
            header("Location: view_user.php");
        }
        else {
            header("Location: user_profile.php");
        }
    }
    else {
        header("Location: login.php");
    }
?>