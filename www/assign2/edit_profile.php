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
    $result = mysqli_query($conn, "SELECT username, email FROM UserDetails WHERE user_id = " . $_SESSION['user_id']);

    // Fetch the next row of a result set as an associative array
    $resultData = mysqli_fetch_assoc($result);

    $username = $resultData['username'];
    $email = $resultData['email'];
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Ashley">
    <meta name = "description" content = "Edit User Profile">
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
			<p class = "ash_title_header">Edit User Profile</p>
		</div>
	</div>

    <div class = "ash_container_1">
        <form class = "ash_profile_box" action = "edit_profile_process.php" method = "post">
            <fieldset class = "czy_enquiry_details">
                <legend>Profile Status</legend>

                <div class = "user-info">
                    <div class = "czy_header">Username</div>
                    <div class = "czy_between">:</div>
                    <input type = "text" id = "edit_username" name = "edit_username" class = "ash_box2" value = "<?php echo $username; ?>">
                </div>

                <div class = "user-info">
                    <div class = "czy_header">Email</div>
                    <div class = "czy_between">:</div>
                    <input type = "text" name = "edit_email" class = "ash_box2" value = "<?php echo $email; ?>">
                </div>

                <div class = "user-info">
                    <div class = "czy_header">Old Password</div>
                    <div class = "czy_between">:</div>
                    <input type = "password" name = "old_password" class = "ash_box2" placeholder = "Enter your old password">
                </div>

                <div class = "user-info">
                    <div class = "czy_header">New Password</div>
                    <div class = "czy_between">:</div>
                    <input type = "text" name = "new_password" class = "ash_box2" placeholder = "Enter your new password">
                </div>

                <div class = "user-info">
                    <div class = "czy_header">Confirm Password</div>
                    <div class = "czy_between">:</div>
                    <input type = "text" name = "confirm_password" class = "ash_box2" placeholder = "Re-enter your new password">
                </div>
            </fieldset>

            <div class = "czy_special">
                <button type = "submit" class = "czy_special_button" value = "Submit">Update Profile</button>
            </div>
        </form>
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