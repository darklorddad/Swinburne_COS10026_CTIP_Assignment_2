<?php
    // Check if comment is set
    if (!isset($_POST['comment'])) {
        die('Comment not provided');
    }

    $comment = $_POST['comment'];

    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    // Insert the comment into the database
    $query = $db->prepare("INSERT INTO comments (comment) VALUES (?)");
    $insertQuery = "INSERT INTO UserDetails (user_id, username, email, user_password) VALUES ('$user_id', '$username', '$email', '$user_password')";
    mysqli_query($conn, $insertQuery);

    // Redirect back to the original page
    header('Location: contributions.php');

?>