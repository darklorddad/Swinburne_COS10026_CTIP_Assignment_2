<?php
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $plant = $_POST['plant'];

    // Check if comment is set
    if (!empty($_POST['comment'])) {
        $comment = $_POST['comment'];

        // Insert the comment into the database
        $insertQuery = "INSERT INTO user_comments (comment, plant) VALUES ('$comment', '$plant')";
        mysqli_query($conn, $insertQuery);

        // Redirect back to the original page
        header('Location: contributions.php#' . $plant . 'comment');
    }
    else{
        unset($_POST['comment']);
        header('Location: contributions.php#' . $plant . 'comment');
    }
?>