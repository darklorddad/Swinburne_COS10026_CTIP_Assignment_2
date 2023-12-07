<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include("user_table.php");
    createUserTable();

    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (!mysqli_select_db($conn, $database)) {
        $sql = "CREATE DATABASE $database";
    }

    mysqli_select_db($conn, $database);

    if (isset($_SESSION['user_id'])) {
        $result = mysqli_query($conn, "SELECT * FROM UserDetails WHERE user_id = " . $_SESSION['user_id']);
        if ($_SESSION["user_id"] == "000001") {
            header("Location: view_user.php");
        }
        else {
            if (mysqli_num_rows($result) > 0) {
                header("Location: user_profile.php");
            }
            else {
                header("Location: login.php");
            }
        }
    }
    else {
        header("Location: login.php");
    }
?>