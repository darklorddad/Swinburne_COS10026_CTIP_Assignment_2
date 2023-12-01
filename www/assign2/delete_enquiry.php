<?php
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get id parameter value from URL
    $id = $_GET['id'];

    // Delete row from the database table
    $result = mysqli_query($conn, "DELETE FROM enquiry WHERE id = $id");

    header("Location:view_enquiry.php");

    $conn->close(); 
?>