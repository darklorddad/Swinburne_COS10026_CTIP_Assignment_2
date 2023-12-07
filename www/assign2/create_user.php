<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Tan Tzy Lynn">
    <meta name="description" content="Create User Account">
    <title>FLORASCAN - Create User Account</title>
    <?php include_once("head.php"); ?>
</head>
<body class="ttl_body">
    <?php 
        include_once("dld_top_navigation_bar.php");
        include_once("dld_background_dots.php"); 
    ?>

    <div class="ash_section_1">
        <div class="ash_page_header">
            <p class="ash_title_header">Create User Account</p>
            <p>Create user account is an administrative feature that allows an admin to set up new user accounts in the system.</p>
        </div>
    </div>

    <div class="ttl_main_body">
        <div class="ttl_user_center">
            <form action="create_user_process.php" method="post" name="create_user_account" class="ttl_user_form">
                <fieldset class="ttl_fieldset">
                    <legend class="ttl_user_details">Account details</legend>
                    <div class="ttl_div">
                        <label class="ttl_label" for="username">Username</label>
                        <input id="username" name="username" class="ttl_field" type="text" placeholder="Enter your username">
                    </div>
                    <div class="ttl_div">
                        <label class="ttl_label" for="email">Email</label>
                        <input id="email" name="email" class="ttl_field" type="email" placeholder="Enter your email address">
                    </div>
                    <div class="ttl_div">
                        <label class="ttl_label" for="user_password">Password</label>
                        <input id="user_password" name="user_password" class="ttl_field" type="password" placeholder="Enter your password">
                    </div>
                    <?php
                        if (isset($_SESSION['error'])) {
                            echo "<p class='login_error'>" . $_SESSION['error'] . "</p>";
                            unset($_SESSION['error']);
                        }
                    ?>
                </fieldset>
                
                <div class="ttl_submit-button">
                    <input type="submit" class="ttl_submit" name="create_account" value="Create account">
                    <a class="ttl_submit" href="view_user.php">Return to admin dashboard</a>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <div class="dld_footer_section_1">
            <?php include_once("dld_footer_section_1.php"); ?>
            <div class="dld_section_1_footer_right">
                <h1 class="dld_footer_heading">Acknowledgement</h1>
                <div class="dld_footer_section_1_center_row">None</div>
            </div>
        </div>
        <?php include_once("dld_footer_section_2.php"); ?>
    </footer>  
</body>
</html>