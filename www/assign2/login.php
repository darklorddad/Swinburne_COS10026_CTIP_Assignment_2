<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Ashley Jong">
    <meta name = "description" content = "Login">
    <title>FLORASCAN - Login</title>
    <?php include_once("head.php"); ?>
</head>

<body class="ash_body_2">
    <?php include_once("dld_background_dots.php"); ?>
    <?php include_once("dld_top_navigation_bar.php"); ?>

    <div class="ash_section_1">
        <div class="ash_page_header">
            <p class = "ash_title_header">Account</p>
            <p id = "login_point">Unlock the botanical world with your green credentials.</p>
        </div>
    </div>

    <div class = "ash_login_thing">
        <div class="ash_wrapper">
            <span class="ash_bg_animate"></span>
    
            <div class="ash_form_box login">
                <h2>Log In</h2>
                <form action="login_process.php">
                    <div class="ash_input_box">
                        <input type="text" required>
                        <label>Email</label>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="ash_input_box">
                        <input type="password" required>
                        <label>Password</label>
                        <i class='bx bxs-lock-alt' ></i>
                    </div>
                    <button type="submit" class="ash_btn">Log In</button>
                    <div class="ash_logreg_link">
                        <p>Don't have an account? <a href="register.php#register_point" class="ash_register_link">Sign Up</a></p>
                    </div>
                </form>
            </div>
    
            <div class="ash_info_text login">
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