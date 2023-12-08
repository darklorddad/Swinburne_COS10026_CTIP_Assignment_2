<?php
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM UserDetails WHERE id = $id");

    header("Location:view_user.php");

    $conn -> close(); 
?>