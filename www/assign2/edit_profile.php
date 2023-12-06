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
                    <form action="edit_profile.php" method="post">
                        <p>
                            <span>Username :</span>
                            <input type="text" name="update_name" placeholder="Enter your username here" value="" class="ash_box2">
                        </p>

                        <p>
                            <span>Email :</span>
                            <input type="email" name="update_email" placeholder="Enter your email here" value="" class="ash_box2">
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

                        <p>
                            <input type="submit" value="Update Profile" class="ash_moreinfo_button">
                        </p>
                    </form>

                    <?php
                        $servername = "127.0.0.1";
                        $username = "root";
                        $password = "";
                        $dbname = "florascan_database";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }       

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $username = $_POST['update_name'];
                            $email = $_POST['update_email'];
                            $old_pass = $_POST['old_pass'];
                            $new_pass = $_POST['new_pass'];
                            $confirm_pass = $_POST['confirm_pass'];
                            
                            // Check if email exists
                            $sql = "SELECT * FROM users WHERE email = '$email'";
                            $result = $conn->query($sql);
                        
                            if ($result->num_rows > 0) {
                                // Email exists, check if old password matches
                                $row = $result->fetch_assoc();
                                if (password_verify($old_pass, $row['password'])) {
                                    // Old password matches, check if new password and confirm password match
                                    if ($new_pass == $confirm_pass) {
                                        // Update password and username
                                        $new_pass_hash = password_hash($new_pass, PASSWORD_DEFAULT);
                                        $sql = "UPDATE users SET password = '$new_pass_hash', username = '$username' WHERE email = '$email'";
                                        if ($conn->query($sql) === TRUE) {
                                            echo "Record updated successfully";
                                        } else {
                                            echo "Error updating record: " . $conn->error;
                                        }
                                    } else {
                                        echo "New password and confirm password do not match";
                                    }
                                } else {
                                    echo "Old password does not match";
                                }
                            } else {
                                echo "Email does not exist";
                            }
                        }
                    ?>
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