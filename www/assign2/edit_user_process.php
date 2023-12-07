<?php
    session_start();

    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Escape special characters in a string for use in an SQL statement
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $user_password = mysqli_real_escape_string($conn, $_POST["user_password"]);	

    $result = mysqli_query($conn, "SELECT * FROM UserDetails WHERE id = " . $id);
    $resultData = mysqli_fetch_assoc($result);

    $compare_username = $resultData["username"];
    $compare_email = $resultData["email"]; 
    $compare_password = $resultData["user_password"];

    unset($_SESSION["edit_user"]["result"]);
    
    if (empty($username)) {
        $_SESSION["error"] = "Username field is empty";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    elseif (strlen($edit_username) > 25) {
        $_SESSION["error"] = "Username cannot exceed 25 characters";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    elseif ($username != $compare_username) {
        $query = "SELECT * FROM userdetails WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION["error"] =  "Username already exists";
            header("Location: edit_user.php?id=$id");
            exit();
        }
        else{
            $result = mysqli_query($conn, "UPDATE UserDetails SET username = '$username' WHERE id = " . $id);
            $_SESSION["edit_user"]["result"] = "Account details updated succesfully";
        }
    }

    if (empty($email)) {
        $_SESSION["error"] =  "Email field is empty";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["error"] =  "Invalid email format";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    elseif ($email != $compare_email) {
        $query = "SELECT * FROM userdetails WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION["error"] =  "Email already exists";
            header("Location: edit_user.php?id=$id");
            exit();
        }
        else{
            $result = mysqli_query($conn, "UPDATE UserDetails SET email = '$email' WHERE id = " . $id);
            $_SESSION["edit_user"]["result"] = "Account details updated succesfully";
        }
    }

    // Password validation
    if (empty($user_password)) {
        $_SESSION["error"] = "Password field is empty";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    elseif (strlen($user_password) < 8) {
        $_SESSION["error"] = "Password must have at least 8 characters";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    else{
        $result = mysqli_query($conn, "UPDATE UserDetails SET user_password = '$user_password' WHERE id = " . $id);
        $_SESSION["edit_user"]["result"] = "Account details updated succesfully";
    }

    header("Location: edit_user.php?id=$id");
    exit();
?>