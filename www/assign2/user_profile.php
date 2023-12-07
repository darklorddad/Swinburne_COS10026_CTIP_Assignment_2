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

    if (isset($_SESSION["user_id"])) {
        $result = mysqli_query($conn, "SELECT username, email FROM UserDetails WHERE user_id = " . $_SESSION["user_id"]);
        $resultData = mysqli_fetch_assoc($result);

        $username = $resultData['username'];
        $email = $resultData['email'];
    }
    else {
        $username = "Logged out";
        $email = "Logged out";
    }
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Ashley">
    <meta name = "description" content = "Create User Account">
    <title>FLORASCAN - User Dashboard</title>
    <?php include_once("head.php"); ?>
</head>
<body class = "ash_body">
    <?php 
        include_once("dld_top_navigation_bar.php");
        include_once("dld_background_dots.php"); 
    ?>

    <div class = "ash_section_1">
		<div class = "ash_page_header">
			<p class = "ash_title_header">User Dashboard</p>
            <p>User dashboard is a custom interface offering centralised access to role-specific information and tools.</p>
		</div>
	</div>

    <div class = "dld_main_2">
        <div class = "dld_enquiry_result_center">
            <fieldset class = "czy_enquiry_details">
                <legend>Account details</legend>
                <div class = "user-info">
                    <div class = "czy_header">Username</div>
                    <div class = "czy_between">:</div>
                    <div class = "czy_description">
                        <p><?php echo $username; ?></p>
                    </div>
                </div>

                <div class = "user-info">
                    <div class = "czy_header">Email</div>
                    <div class = "czy_between">:</div>
                    <div class = "czy_description">
                        <p><?php echo $email; ?></p>
                    </div>
                </div>
            </fieldset>
            <div class = "czy_special">
                <a href = "edit_profile.php" class = "ash_editprofile_link"><button class = "dld_special_button">Edit account details</button></a>
                <a href = "log_out_button.php" class = "ash_editprofile_link"><button class = "dld_special_button">Log out</button></a>
            </div>
        </div>
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