
<?php
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Escape special characters in a string for use in an SQL statement
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);	

    $result = mysqli_query($conn, "SELECT * FROM UserDetails WHERE id = " . $id);
    $resultData = mysqli_fetch_assoc($result);

    $compare_username = $resultData['username'];
    $compare_email = $resultData['email']; 
    $compare_password = $resultData['user_password'];

    unset($_SESSION['edit_user']['result']);
    
    if (empty($username)) {
        $_SESSION['edit_user']['error'] = "Username field is empty";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    elseif (strlen($edit_username) > 25) {
        $_SESSION['edit_user']['error'] = "Username exceeded 25 characters";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    elseif ($username != $compare_username) {
        $query = "SELECT * FROM userdetails WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['edit_user']['error'] =  "Username exist already";
            header("Location: edit_user.php?id=$id");
            exit();
        }
        else{
            $result = mysqli_query($conn, "UPDATE UserDetails SET username = '$username' WHERE id = " . $id);
            $_SESSION['edit_user']['result'] = "Account Details Updated Succesfully";
        }
    }

    if (empty($email)) {
        $_SESSION['edit_profile']['error'] =  "Email was empty";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['edit_profile']['error'] =  "Invalid email format";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    elseif ($email != $compare_email) {
        $query = "SELECT * FROM userdetails WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['edit_profile']['error'] =  "Email exist already";
            header("Location: edit_user.php?id=$id");
            exit();
        }
        else{
            $result = mysqli_query($conn, "UPDATE UserDetails SET email = '$email' WHERE id = " . $id);
            $_SESSION['edit_user']['result'] = "Account Details Updated Succesfully";
        }
    }

    // Password validation
    if (empty($password)) {
        $_SESSION['edit_profile']['error'] = "Enter in your old password";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    elseif (strlen($new_password) < 8) {
        $_SESSION['edit_profile']['error'] = "Password should have at least 8 characters";
        header("Location: edit_user.php?id=$id");
        exit();
    }
    else{
        $result = mysqli_query($conn, "UPDATE UserDetails SET user_password = '$password' WHERE id = " . $id);
        $_SESSION['edit_user']['result'] = "Account Details Updated Succesfully";
    }


    header("Location: edit_user?id=5.php");
    exit();
?>