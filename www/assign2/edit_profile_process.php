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
    // $edit_email = mysqli_real_escape_string($conn, $_POST['edit_email']);
    // $old_password = mysqli_real_escape_string($conn, $_POST['old_password']);
    // $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);	
    // $new_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);	

    $username = $resultData['username'];
    // $email = $resultData['email']; 
    // $password = $resultData['user_password']

    $query = "SELECT * FROM userdetails WHERE username = '" . $username . "'";
    $result = mysqli_query($conn, $query);

    
    $first_name = $_POST["first-name"];
    if(empty($first_name)) {
        $_SESSION['first_name_error'] = "First name is required";
    }
    elseif() {
        $_SESSION['first_name_error'] = "First name should not exceed 25 characters";
    }
    elseif(!preg_match("/^[A-Za-z]+$/", $first_name)) {
        $_SESSION['first_name_error'] = "First name should only contain letters";
    }
    else{
        unset($_SESSION['first_name_error']);
        $_SESSION['first_name'] = $first_name;
    }

    
    if (empty($edit_username)) {
        
    }
    elseif (strlen($edit_username) > 25) {
        $_SESSION['edit_profile']['error'] =  
    }
    elseif ($edit_username != $username) {
        $result = mysqli_query($conn, "UPDATE UserDetails SET username = " . $username . " WHERE user_id = " . $_SESSION['user_id']);
    }

    // if (empty($register_username)) {
    //     $_SESSION['error'] = "Username is required";
    //     header("Location: register.php");
    //     exit();
    // }
    // elseif (mysqli_num_rows($result) > 0) {
    //     $_SESSION['error'] = "Username exist already";
    //     header("Location: register.php");
    //     exit();
    // }


    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $username = $_POST['update_name'];
    //     $email = $_POST['update_email'];
    //     $old_pass = $_POST['old_pass'];
    //     $new_pass = $_POST['new_pass'];
    //     $confirm_pass = $_POST['confirm_pass'];
        
    //     // Check if email exists
    //     $sql = "SELECT * FROM users WHERE email = '$email'";
    //     $result = $conn->query($sql);
    
    //     if ($result->num_rows > 0) {
    //         // Email exists, check if old password matches
    //         $row = $result->fetch_assoc();
    //         if (password_verify($old_pass, $row['password'])) {
    //             // Old password matches, check if new password and confirm password match
    //             if ($new_pass == $confirm_pass) {
    //                 // Update password and username
    //                 $new_pass_hash = password_hash($new_pass, PASSWORD_DEFAULT);
    //                 $sql = "UPDATE users SET password = '$new_pass_hash', username = '$username' WHERE email = '$email'";
    //                 if ($conn->query($sql) === TRUE) {
    //                     echo "Record updated successfully";
    //                 } else {
    //                     echo "Error updating record: " . $conn->error;
    //                 }
    //             } else {
    //                 echo "New password and confirm password do not match";
    //             }
    //         } else {
    //             echo "Old password does not match";
    //         }
    //     } else {
    //         echo "Email does not exist";
    //     }
    // }
?>