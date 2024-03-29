<?php
    session_start();
    include("user_table.php");
    createUserTable();
    
    $_SESSION['last_activity'] = time();
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Ashley Jong">
    <meta name = "description" content = "Register">
    <title>FLORASCAN - Registration</title>
    <?php include_once("head.php"); ?>
</head>

<body class = "ash_body_2">
    <?php include_once("dld_background_dots.php"); ?>
    <?php include_once("dld_top_navigation_bar.php"); ?>

    <div class = "ash_section_1">
        <div class = "ash_page_header">
            <p class = "ash_title_header">Account</p>
            <p id = "register_point">Join to grow your garden of knowledge.</p>
        </div>
    </div>

    <div class = "ash_login_thing">
        <div class = "ash_wrapper">
            <span class = "ash_bg_animate2"></span>

            <div class = "ash_form_box register">
                <h2>Sign Up</h2>
                <form action = "register_process.php" method = "post" >
                    <div class = "ash_register_input_box">
                        <input type = "text" name = "register_username" autocomplete = "off" value = 
                            "<?= isset($_SESSION['register']['username']) ? htmlspecialchars($_SESSION['register']['username']) : '' ?>">
                        <?php unset($_SESSION['register']['username']);?>
                        <label>Username</label>
                        <i class='bx bxs-user'></i>
                    </div>

                    <div class = "ash_register_input_box">
                        <input type = "text" name = "register_email" autocomplete = "off" value = 
                            "<?= isset($_SESSION['register']['email']) ? htmlspecialchars($_SESSION['register']['email']) : '' ?>">
                        <?php unset($_SESSION['register']['email']);?>
                        <label>Email</label>
                        <i class='bx bxs-envelope'></i>
                    </div>

                    <div class = "ash_register_input_box">
                        <input type = "password" name = "register_password" autocomplete = "off" value = 
                            "<?= isset($_SESSION['register']['password']) ? htmlspecialchars($_SESSION['register']['password']) : '' ?>">
                        <?php unset($_SESSION['register']['password']);?>
                        <label>Password</label>
                        <i class='bx bxs-lock-alt' ></i>
                    </div>

                    <button type = "submit" class = "ash_btn">Sign Up</button>

                    <div class = "ash_logreg_link_register">
                        <?php
                            if(isset($_SESSION["error"])) {
                                echo "<p class = 'login_error'>" . $_SESSION["error"] . "</p>";
                                unset($_SESSION["error"]);
                            }
                        ?>
                        <p>Already have an account? <a href = "login.php#login_point" class = "ash_login_link">Log In</a></p>
                    </div>
                </form>
            </div>

            <div class = "ash_info_text register">
                <h2>Welcome!</h2>
                <!-- <p>Lorem ipsum dolor sit amet.</p> -->
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