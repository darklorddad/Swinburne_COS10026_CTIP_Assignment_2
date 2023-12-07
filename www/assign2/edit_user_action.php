<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Tan Tzy Lynn">
    <meta name = "description" content = "Edit User Account Validation">
    <title>FLORASCAN - Edit User Account Validation</title>
    <?php include_once("head.php"); ?>
</head>
<body class = "ttl_body">
    <?php 
        include_once("dld_top_navigation_bar.php");
        include_once("dld_background_dots.php");
        include_once("user_table.php");

        $hostname = "127.0.0.1";
        $user = "root";
        $password = "";
        $database = "florascan_database";

        $conn = mysqli_connect($hostname, $user, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    ?>

    <div class = "ash_section_1">
        <div class = "ash_page_header">
            <p class = "ash_title_header">Edit User Account</p>
            <p>Edit user account allows administrators to modify the details of a user account</p>
        </div>
    </div>

    <div class = "ttl_main_body">
        <?php
            function handleFormSubmission($conn) {
                $errors = array();
                $success = false;

                if (isset($_POST["update_account"])) {
                    $id = mysqli_real_escape_string($conn, $_POST["id"]);
                    $username = mysqli_real_escape_string($conn, $_POST["username"]);
                    $email = mysqli_real_escape_string($conn, $_POST["email"]);
                    $user_password = mysqli_real_escape_string($conn, $_POST["user_password"]);	

                    if (empty($username)) {
                        $errors[] = "Invalid username, please enter a valid username.";
                    }
                    
                    if (empty($email)) {
                        $errors[] = "Invalid email, please enter a valid email.";
                    }
                    
                    if (empty($user_password)) {
                        $errors[] = "Invalid password, please enter a valid password.";
                    }

                    if (empty($errors)) {
                        $query = "UPDATE UserDetails SET `username` = '$username', `email` = '$email', `user_password` = '$user_password' WHERE `id` = $id";
                        $result = mysqli_query($conn, $query);
                        $success = $result !== false;
                    }
                }

                return array($errors, $success);
            }

            list($errors, $success) = handleFormSubmission($conn);
        ?>

        <?php if (!empty($errors)): ?>
            <div class = "ttl_error_container">
                <?php foreach ($errors as $error): ?>
                    <p class = "ttl_error_details"><?php echo $error; ?><br></p>
                <?php endforeach; ?>
                <div class = "ttl_go_back_button">
                    <a href = "view_user.php">
                        <button class = "ttl_go_back" type = "button">Return to admin dashboard</button>
                    </a>
                </div>
            </div>
        <?php elseif ($success): ?>
            <div class = "ttl_user_center_1">
                <p class = "ttl_user_account_updated">Account details updated successfully</p>
                <div class = "ttl_view_result_button">
                    <a href = "view_user.php">
                        <button class = "ttl_update" type="button">Return to admin dashboard</button>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <footer>
        <div class = "dld_footer_section_1">
            <?php include_once("dld_footer_section_1.php");?>
            <div class = "dld_section_1_footer_right">
                <h1 class = "dld_footer_heading">Acknowledgement</h1>
                <div class = "dld_footer_section_1_center_row">None</div>
            </div>
        </div>
        <?php include_once("dld_footer_section_2.php");?>
    </footer>
</body>
</html>