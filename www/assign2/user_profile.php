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

    // Select data associated with this particular id
    $result = mysqli_query($conn, "SELECT username, email FROM UserDetails WHERE user_id = " . $_SESSION["user_id"] . "");

    // Fetch the next row of a result set as an associative array
    $resultData = mysqli_fetch_assoc($result);

    $username = $resultData['username'];
    $email = $resultData['email'];
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Ashley">
    <meta name = "description" content = "Create User Account">
    <title>FLORASCAN - View User Profile</title>
    <?php include_once("head.php"); ?>
</head>
<body class = "ash_body">
    <?php 
        include_once("dld_top_navigation_bar.php");
        include_once("dld_background_dots.php"); 
    ?>

    <div class = "ash_section_1">
		<div class = "ash_page_header">
			<p class = "ash_title_header">User Profile</p>
		</div>
	</div>

    <div class = "ash_container_1">
        <div class = "ash_profile_box">
            <h3>Username: <?php echo $username ?></h3>
            <p>Email: <?php echo $email ?></p>
            
            <div class = "ash_profile_box_button">
                <a href = "edit_profile.php" class = "ash_editprofile_link"><button class = "ash_moreinfo_button">Edit Profile</button></a>
                <a href = "log_out_button.php" class = "ash_editprofile_link"><button class = "ash_moreinfo_button">Log Out</button></a>
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