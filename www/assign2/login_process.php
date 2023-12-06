<?php
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $login_email = mysqli_real_escape_string($conn, $_POST["login_email"]);
    $login_password = mysqli_real_escape_string($conn, $_POST["login_password"]);

    $query = "SELECT * FROM userdetails WHERE email = '" . $login_email . 
          "' AND user_password = '" . $login_password . "'";

    $result = mysqli_query($conn, $query);

    if ($login_email == "admin_florascan@gmail.com" && $login_password == "Florascan") {
        session_start();
        $_SESSION["email"] = $login_email;
        header("Location: view_user.php");
    }
    elseif (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION["email"] = $login_email;
        header("Location: login_success.php");
    }
    else {
        session_start();
        $_SESSION["error"] = "Invalid username or password.";
        header("Location: login.php");
    }

    mysqli_close($conn);
?>