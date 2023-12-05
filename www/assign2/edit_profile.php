<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Ashley">
    <meta name = "description" content = "Edit User Profile">
    <title>FLORASCAN - View User Profile</title>
    <?php include_once("head.php"); ?>
</head>
<body class="ash_body">
    <?php 
        include_once("dld_top_navigation_bar.php");
        include_once("dld_background_dots.php"); 
    ?>

    <div class="ash_section_1">
		<div class="ash_page_header">
			<p class = "ash_title_header">Edit User Profile</p>
		</div>
	</div>

    <div class="ash_container_1">
        <div class="ash_profile_box">
            <div class="ash_inputbox_container">
                <div class="ash_inputbox">
                    <p>
                        <span>Username :</span>
                        <input type="text" name="update_name" value="" class="ash_box2">
                    </p>

                    <p>
                        <span>Your email :</span>
                        <input type="email" name="update_email" value="" class="ash_box2">
                    </p>
        
                    <p>
                        <input type="hidden" name="old_pass" value="">
                        <span>Old password :</span>
                        <input type="password" name="update_pass" placeholder="Enter previous password" class="ash_box2">
                    </p>

                    <p>
                        <span>New password :</span>
                        <input type="password" name="new_pass" placeholder="Enter new password" class="ash_box2">
                    </p>

                    <p>
                        <span>Confirm password :</span>
                        <input type="password" name="confirm_pass" placeholder="Confirm new password" class="ash_box2">
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class = "dld_footer_section_1">
            <?php include_once("dld_footer_section_1.php");?>
            <div class = "dld_section_1_footer_right">
                <h1 class = "dld_footer_heading">Acknowledgement</h1>
                <div class = "dld_footer_section_1_center_row">The Crew</div>
            </div>
        </div>
        <?php include_once("dld_footer_section_2.php");?>
    </footer>

</body>
</html>