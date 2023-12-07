<?php
    session_start();
    include("user_table.php");

    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $user_password = mysqli_real_escape_string($conn, $_POST["user_password"]);	

    if (empty($username)) {
        $_SESSION["error"] = "Username field is empty";
        header("Location: create_user.php");
        exit();
    }
    elseif (strlen($username) > 25) {
        $_SESSION["error"] = "Username cannot exceed 25 characters";
        header("Location: create_user.php");
        exit();
    }
    else {
        $query = "SELECT * FROM userdetails WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION["error"] = "Username already exists";
            header("Location: create_user.php");
            exit();
        }
    }

    if (empty($email)) {
        $_SESSION["error"] = "Email field is empty";
        header("Location: create_user.php");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["error"] = "Invalid email format";
        header("Location: create_user.php");
        exit();
    }
    else {
        $query = "SELECT * FROM userdetails WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION["error"] = "Email already exists";
            header("Location: create_user.php");
            exit();
        }
    }

    if (empty($user_password)) {
        $_SESSION["error"] = "Password field is empty";
        header("Location: create_user.php");
        exit();
    }
    elseif (strlen($user_password) < 8) {
        $_SESSION["error"] = "Password must have at least 8 characters";
        header("Location: create_user.php");
        exit();
    }

    $user_id = generateUniqueUserId($conn);
    $insertQuery = "INSERT INTO UserDetails (user_id, username, email, user_password) VALUES ('$user_id', '$username', '$email', '$user_password')";
    if (mysqli_query($conn, $insertQuery)) {
        $_SESSION["create_user"]["result"] = "New account created successfully";
        header("Location: view_user.php");
    }
    else {
        $_SESSION["error"] = "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
        header("Location: create_user.php");
    }
    
    mysqli_close($conn);
    exit();
?>