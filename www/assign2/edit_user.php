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
            include_once("dld_top_navigation_bar.php");

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

        <div class = "ash_section_1">
            <div class = "ash_page_header">
                <p class = "ash_title_header">Edit User Account</p>
                <p>Edit user account allows administrators to modify the details of a user account</p>
            </div>
        </div>

        <div class = "ttl_main_body">
            <div class = "ttl_user_center">
                <?php
                    if (isset($_SESSION['edit_user']['result'])){
                        echo'<div class = "ttl_user_center_1">';
                        echo'<p class = "ttl_user_account_updated">Account details updated successfully</p>';
                        echo'<div class = "ttl_view_result_button">';
                        echo'<a href = "view_user.php">';
                        echo'<button class = "ttl_update" type = "button">Return to admin dashboard</button>\\n</a>\\n</div>\\n</div>';
                    }
                    else{
                        echo'
                <form action = "edit_user_process.php" method = "post" name = "edit_user_account" class = "ttl_user_form">
                    <fieldset class = "ttl_fieldset">
                        <legend class = "ttl_user_details">User details</legend>
                        <div class = "ttl_div">
                            <label class = "ttl_label" for = "username">Username</label>
                            <input id = "username" name= " username" class= " ttl_field" type = "text" value = "' . $username . '">
                        </div>

                        <div class = "ttl_div">
                            <label class = "ttl_label" for = "email">Email</label>
                            <input id = "email" name = "email" class = "ttl_field" value = "' . $email . '">
                        </div>

                        <div class = "ttl_div">
                            <label class = "ttl_label" for = "user_password">Password</label>
                            <input id = "user_password" name = "user_password" class = "ttl_field" type = "password" value = "' . $user_password . '">
                        </div>

                        <input type = "hidden" name = "id" value = "' . $id . '">

                    </fieldset>
                    
                    <div class = "ttl_update-button">
                        <input type = "submit" class = "ttl_update" name = "update_account" value = "Update user details">
                        <a class = "ttl_update" href = "view_user.php">Return to admin dashboard</a>
                    </div>
                </form>
                        ';
                    }
                ?>
            </div>
        </div>

        <?php 
            $conn->close(); 
        ?>
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