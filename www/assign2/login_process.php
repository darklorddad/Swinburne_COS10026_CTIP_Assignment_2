<?php
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $login_username = mysqli_real_escape_string($conn, $_POST["login_username"]);
    $login_password = mysqli_real_escape_string($conn, $_POST["login_password"]);

    $query = "SELECT * FROM userdetails WHERE username = '" . $login_username . 
          "' AND user_password = '" . $login_password . "'";

    $result = mysqli_query($conn, $query);

    if ($login_username == "Admin" && $login_password == "Florascan") {
        // Admin credentials found, start a session and redirect to a success page
        session_start();
        $_SESSION["username"] = $login_username;
        header("Location: view_user.php");
    } elseif (mysqli_num_rows($result) > 0) {
        // User found, start a session and redirect to a success page
        session_start();
        $_SESSION["username"] = $login_username;
        header("Location: success_page.php");
    } else {
        // User not found, start a session, store an error message, and redirect back to the login page
        session_start();
        $_SESSION["error"] = "Invalid username or password.";
        header("Location: login.php");
    }

    mysqli_close($conn);
?>