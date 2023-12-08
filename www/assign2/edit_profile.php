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
    <title>FLORASCAN - Edit Account Details</title>
    <?php include_once("head.php"); ?>
</head>
<body class = "ash_body">
    <?php 
        include_once("dld_top_navigation_bar.php");
        include_once("dld_background_dots.php"); 
    ?>

    <div class = "ash_section_1">
		<div class = "ash_page_header">
			<p class = "ash_title_header">Edit Account Details</p>
            <p>Edit account details is a feature that allows users to modify personal information and password for their account.</p>
		</div>
	</div>

    <div class = "ttl_main_body" id = "error">

        <?php
            if (isset($_SESSION['edit_profile']['result'])){
                echo'<div class = "ttl_user_center_1">';
                echo'<p class = "ttl_user_account_updated">Account details updated successfully</p>';
                echo'<div class = "ttl_view_result_button">';
                echo'<a href = "user_profile.php"><button class = "ttl_update" type = "button">Return to user dashboard</button></a></div></div>';
                unset($_SESSION['edit_profile']['result']);
                unset($_SESSION['edit_profile']["error"]);
            }
            else{
                echo'
        <form class = "ttl_user_center" action = "edit_profile_process.php" method = "post">

            <fieldset class = "czy_enquiry_details">
                <legend>Account details</legend>

                <div class = "user-info">
                    <div class = "czy_header">Username</div>
                    <div class = "czy_between">:</div>
                    <input type = "text" id = "edit_username" name = "edit_username" class = "ash_box2" placeholder = "Enter your username" value = "' . $username . '">
                </div>

                <div class = "user-info">
                    <div class = "czy_header">Email</div>
                    <div class = "czy_between">:</div>
                    <input type = "text" name = "edit_email" class = "ash_box2" placeholder = "Enter your email" value = "' . $email . '">
                </div>

                <div class = "user-info">
                    <div class = "czy_header">Old password</div>
                    <div class = "czy_between">:</div>
                    <input type = "password" name = "old_password" class = "ash_box2" placeholder = "Enter your old password">
                </div>

                <div class = "user-info">
                    <div class = "czy_header">New password</div>
                    <div class = "czy_between">:</div>
                    <input type = "password" name = "new_password" class = "ash_box2" placeholder = "Enter your new password">
                </div>

                <div class = "user-info">
                    <div class = "czy_header">Confirm password</div>
                    <div class = "czy_between">:</div>
                    <input type = "password" name = "confirm_password" class = "ash_box2" placeholder = "Re-enter your new password">
                </div>';
                    if(isset($_SESSION['edit_profile']["error"])) {
                        echo "<div class = 'user-info login_error'>" . $_SESSION['edit_profile']["error"] . "</div>";
                        unset($_SESSION['edit_profile']["error"]);
                    }
                echo'
            </fieldset>

            <div class = "czy_special">
                <button type = "submit" class = "dld_special_button" value = "Submit">Update account details</button>
                <a href = "user_profile.php" class = "dld_special_button_1">Return to user dashboard</a>
            </div>
        </form>';
            }
        ?>
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