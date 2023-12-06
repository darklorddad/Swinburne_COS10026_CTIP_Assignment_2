<?php
    session_start();

    include("user_table.php");
    createUserTable();
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
    
    <div class = "ash_form_box register">
        <?php 
            echo "<p>" . $_SESSION['last_activity'] . "</p>" ;
            echo "<p>" . $_SESSION['user_id'] . "</p>" ;
        ?>
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