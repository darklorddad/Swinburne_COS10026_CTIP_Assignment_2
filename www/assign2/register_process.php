<?php
    session_start();
    include("user_table.php");

    $hostname = "127.0.0.1";
    $user = "root";
    $register_password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $register_password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    unset($_SESSION['error']);

    $register_username = mysqli_real_escape_string($conn, $_POST["register_username"]);
    $register_email = mysqli_real_escape_string($conn, $_POST["register_email"]);
    $register_password = mysqli_real_escape_string($conn, $_POST["register_password"]);

    $_SESSION['register']['username'] = $register_username;
    $_SESSION['register']['email'] = $register_email;
    $_SESSION['register']['password'] = $register_password;

    $query = "SELECT * FROM userdetails WHERE username = '" . $register_username . "'";
    $result = mysqli_query($conn, $query);

    if (empty($register_username)) {
        $_SESSION['error'] = "Username is required";
        header("Location: register.php");
        exit();
    }
    elseif (strlen($register_username) > 25) {
        $_SESSION['error'] = "Username exceed 25 characters";
        header("Location: register.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $_SESSION['error'] = "Username exist already";
        header("Location: register.php");
        exit();
    }

    $query = "SELECT * FROM userdetails WHERE email = '" . $register_email . "'";
    $result = mysqli_query($conn, $query);
    
    if (empty($register_email)) {
        $_SESSION['error'] = "Email is required";
        header("Location: register.php");
        exit();
    } 
    elseif (!filter_var($register_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format";
        header("Location: register.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $_SESSION['error'] = "Email exist already";
        header("Location: register.php");
        exit();
    }

    $query = "SELECT * FROM userdetails WHERE user_password = '" . $register_password . "'";
    $result = mysqli_query($conn, $query);

    if (empty($register_password)) {
        $_SESSION['error'] = "Password is required";
        header("Location: register.php");
        exit();
    }
    elseif (mysqli_num_rows($result) > 0) {
        $_SESSION['error'] = "Password exist already";
        header("Location: register.php");
        exit();
    }
    elseif (strlen($register_password) < 8) {
        $_SESSION['error'] = "Password at least 8 characters";
        header("Location: register.php");
        exit();
    }

    $user_id = generateUniqueUserId($conn);
    $result = mysqli_query($conn, "INSERT INTO userdetails (`user_id`,`username`, `email`, `user_password`) VALUES ('$user_id', '$register_username', '$register_email', '$register_password')");

    header("Location: login.php");

    mysqli_close($conn);
?>