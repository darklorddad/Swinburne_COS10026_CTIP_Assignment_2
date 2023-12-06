<?php
    session_start(); 
    include("user_table.php");
    createUserTable();

    $_SESSION['last_activity'] = time();

    // Check if the user has been inactive for a specific period (e.g., 30 minutes)
    $inactive_timeout = 30;
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $inactive_timeout)) {
        session_unset();
        session_destroy();
    }

    if (isset($_SESSION["user_id"])) {
        header("edit_profile.php");
    }
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Ashley Jong">
    <meta name = "description" content = "Login">
    <title>FLORASCAN - Login</title>
    <?php include_once("head.php"); ?>
</head>
<body class = "ash_body_2">
    <?php include_once("dld_background_dots.php"); ?>
    <?php include_once("dld_top_navigation_bar.php"); ?>

    <div class = "ash_section_1">
        <div class = "ash_page_header">
            <p class = "ash_title_header">Account</p>
            <p id = "login_point">Unlock the botanical world with your green credentials.</p>
        </div>
    </div>

    <div class = "ash_login_thing">
        <div class = "ash_wrapper">
            <span class = "ash_bg_animate"></span>
    
            <div class = "ash_form_box login">
                <h2>Log In</h2>
                <form action = "login_process.php" method = "post">
                    <div class = "ash_input_box">
                        <input type = "text" name = "login_email" autocomplete = "off" value = 
                            "<?= isset($_SESSION['login']['email']) ? htmlspecialchars($_SESSION['login']['email']) : '' ?>">
                        <?php unset($_SESSION['login']['email']);?>
                        <label>Email</label>
                        <i class = 'bx bxs-user'></i>
                    </div>

                    <div class = "ash_input_box">
                        <input type = "password" name = "login_password" autocomplete = "off">
                        <label>Password</label>
                        <i class = 'bx bxs-lock-alt'></i>
                    </div>

                    <button type = "submit" class = "ash_btn">Log In</button>

                    <div class = "ash_logreg_link">
                        <?php
                            if(isset($_SESSION["error"])) {
                                echo "<p class = 'login_error'>" . $_SESSION["error"] . "</p>";
                                unset($_SESSION["error"]);
                            }
                        ?>
                        <p>Don't have an account? <a href = "register.php#register_point" class = "ash_register_link">Sign Up</a></p>
                    </div>
                </form>
            </div>
    
            <div class = "ash_info_text login">
                <h2>Welcome Back!</h2>
            </div>
        </div>
    </div>

    <footer>
        <div class = "dld_footer_section_1">
            <?php include_once("dld_footer_section_1.php"); ?>

            <div class = "dld_section_1_footer_right">
                <h1 class = "dld_footer_heading">Acknowledgement</h1>
                <p class = "dld_section_1_footer_right_acknowledgement">
                    None
                </p>
            </div>
        </div>

        <?php include_once("dld_footer_section_2.php"); ?>
    </footer>
</body>
</html>