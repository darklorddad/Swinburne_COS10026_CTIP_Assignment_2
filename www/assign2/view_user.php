<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta name = "author" content = "Tan Tzy Lynn">
        <meta name = "description" content = "User Management">
        <title>FLORASCAN - Admin Dashboard</title>
        <?php include_once("head.php"); ?>
    </head>

    <body class = "ttl_body">
        <?php
            include_once("dld_background_dots.php");
            include_once("dld_top_navigation_bar.php");
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

        <nav class = "dld_header_bar">
            <div class="ash_page_header">
                <p class = "ash_title_header">Admin Dashboard</p>
                <p>Admin dashboard creates, manages and removes user accounts.</p>
            </div>
            <ul>
                <li><a href = "view_user.php" class = "czy_active">User accounts</a></li>
                <li><a href = "view_enquiry.php">User enquiries</a></li>
            </ul>
        </nav>

        <div class = "ttl_main_body_2">
            <!-- <h1 class = "ttl_user_details_heading">User details</h1> -->

            <form action = "view_user.php" method = "GET" class = "ttl_search_form">
                <input type = "text" id = "search" name = "search" placeholder = "Search" class = "ttl_search_bar" list = "autocomplete" autocomplete = "off">
                <button type = "submit" class = "ttl_search_btn"><i class = "bx bx-search"></i></button>
                <datalist id = "autocomplete">
                <?php
                    $sql = "SELECT * FROM userdetails";
                    $result = mysqli_query($conn, $sql);

                    while ($res = mysqli_fetch_assoc($result)) {
                        echo "
                    <option value = " . $res['user_id'] . ">
                    <option value = " . $res['username'] . ">
                    <option value = " . $res['email'] . ">  
                    <option value = " . $res['user_password'] . ">
                        \n";
                    }
                ?>
                </datalist>
            </form>

            <div class = "ttl_view_user_table_container_details_2">
                <div class = "ttl_view_user_table_container">
                    <table class = "ttl_view_user_table">
                        <tr>
                            <th class = "ttl_view_user_table_heading czy_user_id_heading"><a href = "view_user.php?sort=user_id" class = "czy_sorting"><i class='bx bx-id-card'></i>User ID</a></th>
                            <th class = "ttl_view_user_table_heading czy_username_heading"><a href = "view_user.php?sort=username" class = "czy_sorting"><i class = 'bx bxs-user'></i>Username</a></th>
                            <th class = "ttl_view_user_table_heading"><a href = "view_user.php?sort=email" class = "czy_sorting"><i class = 'bx bxs-envelope'></i>Email</a></th>
                            <th class = "ttl_view_user_table_heading czy_password_heading"><a href = "view_user.php?sort=user_password" class = "czy_sorting"><i class = 'bx bxs-lock-alt' ></i>Password</a></th>
                            <th class = "ttl_view_user_table_heading czy_action_heading">Action</th>
                        </tr>
                        <?php

                            $admin_username = "admin";

                            $sql = "SELECT * FROM userdetails";

                            // Handle search functionality
                            if (isset($_GET['search'])) {
                                $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);
                                $conditions = [];

                                // Add conditions for each field you want to search
                                $fields = ['user_id', 'username', 'email', 'user_password']; 

                                foreach ($fields as $field) {
                                    $conditions[] = "$field LIKE '%$searchTerm%'";
                                }

                                if (!empty($conditions)) {
                                    $sql .= " WHERE " . implode(" OR ", $conditions);
                                }
                            }

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
                                $sql .= " ORDER BY user_id ASC";
                            }

                            $result = mysqli_query($conn, $sql);

                            // Check if there are any records
                            if (mysqli_num_rows($result) > 0) {
                                while ($res = mysqli_fetch_assoc($result)) {
                                    echo "
                                    <tr>
                                        <td class='ttl_view_user_table_row czy_user_id'>" . $res['user_id'] . "</td>
                                        <td class='ttl_view_user_table_row czy_username'>" . $res['username'] . "</td>
                                        <td class='ttl_view_user_table_row'>" . $res['email'] . "</td>
                                        <td class='ttl_view_user_table_row czy_password'>" . $res['user_password'] . "</td>
                                        <td class='ttl_view_user_table_row czy_action'>";

                                    // Add a condition to check if the user is the admin
                                    if ($res['username'] == $admin_username) {
                                        // Display only "Edit" action for the admin user
                                        echo "<a href=\"edit_user.php?id=$res[id]\" class='ttl_edit'>Edit</a>";
                                    } else {
                                        // Display both "Edit" and "Delete" actions for other users
                                        echo "<a href=\"edit_user.php?id=$res[id]\" class='ttl_edit'>Edit</a> | <a href=\"delete_user.php?id=$res[id]\" class='ttl_delete'>Delete</a>";
                                    }

                                    echo "
                                        </td>
                                    </tr>\n";
                                }
                            } else {
                                // No records found
                                echo "<div class='ttl_no_records_container'><p class='ttl_no_records'>No records found</p></div>";
                            }
                            
                        ?>
                    </table>
                </div>
                <div class="ttl_create_user_account_container">
                    <a href = "create_user.php" class = 'ttl_create_user_account_btn'>
                        Create user account
                    </a>
                    <a href = "log_out_button.php" class = 'ttl_log_out_button'>
                        Admin log out
                    </a>
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
                    <div class = "dld_footer_section_1_center_row">None</div>
                </div>
            </div>
            <?php include_once("dld_footer_section_2.php");?>
        </footer>
    </body>
</html>