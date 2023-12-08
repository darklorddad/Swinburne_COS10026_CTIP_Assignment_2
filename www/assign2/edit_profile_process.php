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

    // Select data associated with this particular id
    $result = mysqli_query($conn, "SELECT * FROM UserDetails WHERE user_id = " . $_SESSION['user_id']);

    // Fetch the next row of a result set as an associative array
    $resultData = mysqli_fetch_assoc($result);

    $edit_username = mysqli_real_escape_string($conn, $_POST['edit_username']);
    $edit_email = mysqli_real_escape_string($conn, $_POST['edit_email']);
    $old_password = mysqli_real_escape_string($conn, $_POST['old_password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);	
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);	

    $username = $resultData['username'];
    $email = $resultData['email']; 
    $password = $resultData['user_password'];

    unset($_SESSION["edit_profile"]["result"]);
    
    // Username validation
    if (empty($edit_username)) {
        $_SESSION['edit_profile']['error'] =  "Username was empty";
        header("Location: edit_profile.php#error");
        exit();
    }
    elseif (strlen($edit_username) > 25) {
        $_SESSION['edit_profile']['error'] =  "Username exceeded 25 characters";
        header("Location: edit_profile.php#error");
        exit();
    }
    elseif ($edit_username != $username) {
        $query = "SELECT * FROM userdetails WHERE username = '$edit_username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['edit_profile']['error'] =  "Username exist already";
            header("Location: edit_profile.php#error");
            exit();
        }
        else{
            $result = mysqli_query($conn, "UPDATE UserDetails SET username = '$edit_username' WHERE user_id = " . $_SESSION['user_id']);
            $_SESSION['edit_profile']['result'] = "Account details updated succesfully";
        }
    }

    // Email validation
    if (empty($edit_email)) {
        $_SESSION['edit_profile']['error'] =  "Email was empty";
        header("Location: edit_profile.php#error");
        exit();
    }
    elseif (!filter_var($edit_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['edit_profile']['error'] =  "Invalid email format";
        header("Location: edit_profile.php#error");
        exit();
    }
    elseif ($edit_email != $email) {
        $query = "SELECT * FROM userdetails WHERE email = '$edit_email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['edit_profile']['error'] =  "Email exist already";
            header("Location: edit_profile.php#error");
            exit();
        }
        else{
            $result = mysqli_query($conn, "UPDATE UserDetails SET email = '$edit_email' WHERE user_id = " . $_SESSION['user_id']);
            $_SESSION['edit_profile']['result'] = "Account details updated succesfully";
        }
    }

    // Password validation
    if (empty($old_password)) {
        $_SESSION['edit_profile']['error'] = "Enter in your old password";
        header("Location: edit_profile.php#error");
        exit();
    }
    elseif ($old_password != $password) {
        $_SESSION['edit_profile']['error'] = "Incorrect password";
        header("Location: edit_profile.php#error");
        exit();
    }
    else{
        if (empty($new_password)) {
            $_SESSION['edit_profile']['error'] = "Enter in your new password";
            header("Location: edit_profile.php#error");
            exit();
        }
        elseif (empty($confirm_password)) {
            $_SESSION['edit_profile']['error'] = "Re-enter your new password again";
            header("Location: edit_profile.php#error");
            exit();
        }
        elseif (strlen($new_password) < 8) {
            $_SESSION['edit_profile']['error'] = "Password should have at least 8 characters";
            header("Location: edit_profile.php#error");
            exit();
        }
        elseif ($new_password == $old_password) {
            $_SESSION['edit_profile']['error'] = "New password cannot be the same as the old password";
            header("Location: edit_profile.php#error");
            exit();
        }
        elseif ($new_password != $confirm_password) {
            $_SESSION['edit_profile']['error'] = "New password does not match confirm password";
            header("Location: edit_profile.php#error");
            exit();
        }
        else{
            $result = mysqli_query($conn, "UPDATE UserDetails SET user_password = '$new_password' WHERE user_id = " . $_SESSION['user_id']);
            $_SESSION['edit_profile']['result'] = "Account details updated succesfully";
        }
    }
    
    header("Location: edit_profile.php#error");
    exit();
?>