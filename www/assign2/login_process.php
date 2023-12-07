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

    $login_email = mysqli_real_escape_string($conn, $_POST["login_email"]);
    $login_password = mysqli_real_escape_string($conn, $_POST["login_password"]);

    $_SESSION["login"]["email"] = $login_email;

    $_SESSION['last_activity'] = 0;

    $query = "SELECT user_id FROM userdetails WHERE email = '" . $login_email . "' AND user_password = '" . $login_password . "'";

    $result = mysqli_query($conn, $query);

    $resultData = mysqli_fetch_assoc($result);
    $user_id = $resultData['user_id'];
    
    if ($login_email == "admin@florascan.com" && $login_password == "admin") {
        $_SESSION["user_id"] = $user_id;
        header("Location: view_user.php");
    }
    elseif (mysqli_num_rows($result) > 0) {
        $_SESSION["user_id"] = $user_id;
        header("Location: index.php");
    }
    else {
        $_SESSION["error"] = "Invalid email or password.";
        header("Location: login.php");
    }

    mysqli_close($conn);
?>