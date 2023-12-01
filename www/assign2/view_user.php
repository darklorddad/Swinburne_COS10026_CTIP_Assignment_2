<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta name = "author" content = "Tan Tzy Lynn">
        <meta name = "description" content = "User Management">
        <title>FLORASCAN - User Management</title>
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

        <nav class = "czy_navigation_fool_profile">
            <div class="ash_page_header">
                <p class = "ash_title_header">User Management</p>
            </div>
            <ul>
                <li><a href = "view_user.php" class = "czy_active">User Data</a></li>
                <li><a href = "view_enquiry.php">Enquiries</a></li>
            </ul>
        </nav>

        

        <div class = "ttl_main_body">
            <h1 class = "ttl_user_details_heading">User Details</h1>
            <div class = "ttl_view_user_table_container_details">
                <div class = "ttl_view_user_table_container">
                    <table class = "ttl_view_user_table">
                        <tr>
                            <th class = "ttl_view_user_table_heading czy_username_heading"><a href = "view_user.php?sort=username" class = "czy_sorting"><i class = 'bx bxs-user'></i>Username</a></th>
                            <th class = "ttl_view_user_table_heading"><a href = "view_user.php?sort=email" class = "czy_sorting"><i class = 'bx bxs-envelope'></i>Email</a></th>
                            <th class = "ttl_view_user_table_heading czy_password_heading"><a href = "view_user.php?sort=user_password" class = "czy_sorting"><i class = 'bx bxs-lock-alt' ></i>Password</a></th>
                            <th class = "ttl_view_user_table_heading czy_action_heading">Action</th>
                        </tr>
                        <?php
                            $admin_username = "admin";

                            $result = mysqli_query($conn, "SELECT username, email, user_password, id FROM userdetails WHERE username = '$admin_username'");
                            while ($res = mysqli_fetch_assoc($result)) {
                                echo"
                        <tr>
                            <td class = 'ttl_view_user_table_row czy_username'>".$res['username']."</td>
                            <td class = 'ttl_view_user_table_row'>".$res['email']."</td>
                            <td class = 'ttl_view_user_table_row czy_password'>".$res['user_password']."</td>
                            <td class = 'ttl_view_user_table_row czy_action'><a href = \"edit_user.php?id=$res[id]\" class = 'ttl_edit'>Edit</a></td>
                        </tr>
                                ";
                            }
                            $sql = "SELECT * FROM userdetails";

                            if (isset($_GET['sort'])){
                                if($_GET['sort'] == 'username'){
                                    $sql .= " ORDER BY username ASC";
                                }
                                elseif ($_GET['sort'] == 'email'){
                                    $sql .= " ORDER BY email ASC";
                                }
                                elseif ($_GET['sort'] == 'user_password'){
                                    $sql .= " ORDER BY user_password ASC";
                                }
                            }
                            else{
                                $sql .= " ORDER BY id ASC";
                            }
                            $result = mysqli_query($conn, $sql);
                            while ($res = mysqli_fetch_assoc($result)) {
                                if (isset($res['username']) && $res['username'] != $admin_username) {
                                    echo "
                        <tr>
                            <td class = 'ttl_view_user_table_row czy_username'>".$res['username']."</td>
                            <td class = 'ttl_view_user_table_row'>".$res['email']."</td>
                            <td class = 'ttl_view_user_table_row czy_password'>".$res['user_password']."</td>
                            <td class = 'ttl_view_user_table_row czy_action'>
                                <a href = \"edit_user.php?id=$res[id]\" class = 'ttl_edit '>Edit</a> | <a href = \"delete_user.php?id=$res[id]\" class = 'ttl_delete'>Delete</a>
                            </td>
                        </tr>\n";
                                }
                            }
                            
                        ?>
                    </table>
                </div>
            </div>

            <div class="ttl_create_user_account_container">
                <a href = "create_user.php" class = 'ttl_create_user_account_btn'>
                    Create New User Account
                </a>
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
                    <div class = "dld_footer_section_1_center_row">The Crew</div>
                </div>
            </div>
            <?php include_once("dld_footer_section_2.php");?>
        </footer>
    </body>
</html>