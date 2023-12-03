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
                <li><a href = "view_user.php">User Data</a></li>
                <li><a href = "view_enquiry.php" class = "czy_active">Enquiries</a></li>
            </ul>
        </nav>

        

        <div class = "ttl_main_body">
            <h1 class = "ttl_user_details_heading">User Enquiry</h1>
            <div class = "ttl_view_user_table_container_details">
                <div class = "ttl_view_user_table_container">
                    <table class = "ttl_view_user_table">
                        <tr>
                            <th class = "czy_enquiry_table_heading czy_firstname_heading"><a href = "view_enquiry.php?sort=firstname" class = "czy_sorting"><i class = 'bx bxs-user'></i>Firstname</a></th>
                            <th class = "czy_enquiry_table_heading czy_lastname_heading"><a href = "view_enquiry.php?sort=lastname" class = "czy_sorting"><i class = 'bx bxs-user' ></i>Lastname</a></th>
                            <th class = "czy_enquiry_table_heading czy_email_heading"><a href = "view_enquiry.php?sort=email" class = "czy_sorting"><i class = 'bx bxs-envelope'></i>Email</a></th>
                            <th class = "czy_enquiry_table_heading czy_plant_heading"><a href = "view_enquiry.php?sort=plant" class = "czy_sorting"><i class = 'bx bxs-leaf'></i>Plant</a></th>
                            <th class = "czy_enquiry_table_heading czy_enquiry_heading"><a href = "view_enquiry.php?sort=enquiry" class = "czy_sorting"></i>Enquiry</a></th>
                            <th class = "czy_enquiry_table_heading czy_delete_heading">Action</th>
                        </tr>

                        <?php
                            $sql = "SELECT * FROM enquiry";
                            if (isset($_GET['sort'])){
                                if($_GET['sort'] == 'firstname'){
                                    $sql .= " ORDER BY first_name ASC";
                                }
                                elseif ($_GET['sort'] == 'lastname'){
                                    $sql .= " ORDER BY last_name ASC";
                                }
                                elseif ($_GET['sort'] == 'email'){
                                    $sql .= " ORDER BY email ASC";
                                }
                                elseif ($_GET['sort'] == 'plant'){
                                    $sql .= " ORDER BY plant ASC";
                                }
                                elseif ($_GET['sort'] == 'enquiry'){
                                    $sql .= " ORDER BY enquiry ASC";
                                }
                            }
                            else{
                                $sql .= " ORDER BY id ASC";
                            }
                            
                            $result = mysqli_query($conn, $sql);
                            while ($res = mysqli_fetch_assoc($result)) {
                                    echo "
                        <tr>
                            <td class = 'czy_enquiry_table_row czy_firstname'>".$res['first_name']."</td>
                            <td class = 'czy_enquiry_table_row czy_lastname'>".$res['last_name']."</td>
                            <td class = 'czy_enquiry_table_row czy_email'>".$res['email']."</td>
                            <td class = 'czy_enquiry_table_row czy_plant'>".$res['plant']."</td>
                            <td class = 'czy_enquiry_table_row czy_enquiry'>".$res['enquiry']."</td>
                            <td class = 'czy_enquiry_table_row czy_delete'><a href = \"delete_enquiry.php?id=$res[id]\" class = 'ttl_delete'>Delete</a></td>
                        </tr>\n";
                            }
                            
                        ?>
                    </table>
                </div>
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