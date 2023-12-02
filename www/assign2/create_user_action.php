<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Tan Tzy Lynn">
    <meta name = "description" content = "Create User Account">
    <title>FLORASCAN - Create User Account Validation</title>
    <?php include_once("head.php"); ?>
</head>

<body class = "ttl_body">
    <?php 
        include_once("dld_top_navigation_bar.php");
        include_once("dld_background_dots.php");
        include_once("user_table.php");

        $hostname = "127.0.0.1";
        $user = "root";
        $password = "";
        $database = "florascan_database";

        $conn = mysqli_connect($hostname, $user, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    ?>

    <div class = "ttl_main_body">
        <?php
            if (isset($_POST['create_account'])) {

                // Escape special characters in string for use in SQL statement	
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);

                // Check for empty fields
                if (empty($username) || empty($email) || empty($user_password)) {
                    
                    echo "<h1 class = 'ttl_error_title'>Error</h1>";

                    echo "<div class = 'ttl_error_container'>";

                        if (empty($username)) {
                            echo "<p class = 'ttl_error_details'>Username field is empty.<br></p>";
                        }
                        
                        if (empty($email)) {
                            echo "<p class = 'ttl_error_details'>Email field is empty.<br></p>";
                        }
                        
                        if (empty($user_password)) {
                            echo "<p class = 'ttl_error_details'>Password field is empty.<br></p>";
                        }
                    
                    echo "</div>";
                    
                    // Show link to the previous page
                    echo "
                        <div class='ttl_go_back_button'>
                            <a href ='create_user.php'>
                                <button class = 'ttl_go_back' type='button'>Go Back</button>
                            </a>
                        </div>
                        ";
                } else { 
                    // If all the fields are filled (not empty) 

                    // Insert data into database
                    $user_id = generateUniqueUserId($conn); // Generate a unique user ID
                    $result = mysqli_query($conn, "INSERT INTO userdetails (`user_id`,`username`, `email`, `user_password`) VALUES ('$user_id', '$username', '$email', '$user_password')");
                    
                    if ($result) {
                        echo "<p class='ttl_user_account_created'>User account created successfully!</p>";
                        echo "
                            <div class='ttl_view_result_button'>
                                <a href='view_user.php'>
                                    <button class='ttl_view_result' type='button'>View Result</button>
                                </a>
                            </div>
                            "; 
                    } else {
                        echo "Error: " . $conn->error;
                    }
                    
                }
            }

            $conn->close();
        ?>
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