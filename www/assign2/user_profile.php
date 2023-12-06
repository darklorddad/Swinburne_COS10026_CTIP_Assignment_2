<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Ashley">
    <meta name = "description" content = "Create User Account">
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
			<p class = "ash_title_header">User Profile</p>
		</div>
	</div>

    <div class="ash_container_1">
        <div class="ash_profile_box">
            <h3>Username: Admin</h3>
            <p>Email: admin_florascan@gmail.com</p>
            
            <div class="ash_profile_box_button">
                <button class="ash_moreinfo_button"><a href="edit_profile.php" class="ash_editprofile_link">Edit Profile</a></button>
                <button class="ash_moreinfo_button"><a href="index.php" class="ash_editprofile_link">Log Out</a></button>
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