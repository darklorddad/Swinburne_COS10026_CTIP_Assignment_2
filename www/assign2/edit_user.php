<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Tan Tzy Lynn">
    <meta name = "description" content = "Edit User Account">
    <title>FLORASCAN - Edit User Account</title>
    <?php include_once("head.php"); ?>
</head>
<body class = "ttl_body">
    <?php 
        include_once("dld_background_dots.php");

        $hostname = "127.0.0.1";
        $user = "root";
        $password = "";
        $database = "florascan_database";

        $conn = mysqli_connect($hostname, $user, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get id from URL parameter
        $id = $_GET['id'];

        // Select data associated with this particular id
        $result = mysqli_query($conn, "SELECT * FROM UserDetails WHERE id = $id");

        // Fetch the next row of a result set as an associative array
        $resultData = mysqli_fetch_assoc($result);

        $username = $resultData['username'];
        $email = $resultData['email'];
        $user_password = $resultData['user_password'];
        
    ?>

    <div class="ash_section_1">
		<div class="ash_page_header">
			<p class = "ash_title_header">Edit User Account</p>
		</div>
	</div>

    <div class = "ttl_main_body">
        <div class ="ttl_user_center">
            <form action="edit_user_action.php" method="post" name="edit_user_account" class="ttl_user_form">
                <fieldset class="ttl_fieldset">
                    <legend class = "ttl_user_details">User details</legend>
                    <div class = "ttl_div">
                        <label class="ttl_label" for="username">Username</label>
                        <input id="username" name="username" class="ttl_field" type="text" maxlength="25" pattern="[a-zA-Z0-9@#$%^&*()_+{}|:<>?~-]*" value="<?php echo $username; ?>">
                    </div>
                    <div class = "ttl_div">
                        <label class="ttl_label" for="email">Email     </label>
                        <input id="email" name="email" class="ttl_field" type="email" value="<?php echo $email; ?>">
                    </div>
                    <div class = "ttl_div">
                        <label class="ttl_label" for="user_password">Password</label>
                        <input id="user_password" name="user_password" class="ttl_field" type="password" value="<?php echo $user_password; ?>">
                    </div>
                </fieldset>
                
                <div class="ttl_submit-button">
                    <input type="submit" class="ttl_update" name="update_account" value="Update Account">
                </div>

            </form>
        </div>
    </div>

    <?php 
        $conn->close(); 
    ?>
</body>
</html>