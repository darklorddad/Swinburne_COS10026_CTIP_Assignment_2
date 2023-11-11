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

        include_once("dld_background_dots.php");

        $hostname = "127.0.0.1";
        $user = "root";
        $password = "";
        $database = "florascan_database";

        $conn = mysqli_connect($hostname, $user, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch data in ascending order
        $result = mysqli_query($conn, "SELECT * FROM UserDetails ORDER BY id ASC");
    ?>

    <div class="ash_section_1">
		<div class="ash_page_header">
			<p class = "ash_title_header">User Management</p>
		</div>
	</div>

    <div class = "ttl_main_body">
        <div class="ttl_view_user_table_container">
            <table class="ttl_view_user_table">
                <tr>
                    <th class="ttl_view_user_table_heading">Username</th>
                    <th class="ttl_view_user_table_heading">Email</th>
                    <th class="ttl_view_user_table_heading">Password</th>
                    <th class="ttl_view_user_table_heading">Action</th>
                </tr>

                <?php
                    $admin_username = "Admin";

                    // Fetch the next row of a result set as an associative array
                    while ($res = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td class='ttl_view_user_table_row'>".$res['username']."</td>";
                        echo "<td class='ttl_view_user_table_row'>".$res['email']."</td>";
                        echo "<td class='ttl_view_user_table_row'>".$res['user_password']."</td>";

                        
                        if (isset($res['username']) && $res['username'] == $admin_username) {
                            // Display 'Edit' only for the user with the matching username
                            echo "<td class='ttl_view_user_table_row'><a href=\"edit_user.php?id=$res[id]\" class='ttl_edit'>Edit</a></td>";
                        } else {
                            // Display both 'Edit' and 'Delete' for other users
                            echo "<td class='ttl_view_user_table_row'><a href=\"edit_user.php?id=$res[id]\" class='ttl_edit'>Edit</a> | <a href=\"delete_user.php?id=$res[id]\" class='ttl_delete'>Delete</a></td>";
                        }

                        echo "</tr>";
                    }
                ?>


            </table>
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

</body>
</html>