<?php
    session_start(); 

    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $password, $database);
    
    include("user_table.php");
    createUserTable();

    session_start();

    if (isset($_SESSION['user_id'])) {
        $result = mysqli_query($conn, "SELECT * FROM UserDetails WHERE user_id = " . $_SESSION['user_id']);
        if ($_SESSION["user_id"] == "000001") {
            header("Location: view_user.php");
        }
        else {
            header("Location: user_profile.php");
        }
    } else {
        header("Location: login.php");
    }
?>