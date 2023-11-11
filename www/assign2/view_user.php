<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Tan Tzy Lynn">
    <meta name = "description" content = "View User Account">
    <title>FLORASCAN - View User Account</title>
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
			<p class = "ash_title_header">View User Account</p>
		</div>
	</div>

    <div class = "ttl_main_body">

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
                    echo "<td>".$res['username']."</td>";
                    echo "<td>".$res['email']."</td>";
                    echo "<td>".$res['user_password']."</td>";

                    
                    if (isset($res['username']) && $res['username'] == $admin_username) {
                        // Display 'Edit' only for the user with the matching username
                        echo "<td><a href=\"edit_user.php?id=$res[id]\">Edit</a></td>";
                    } else {
                        // Display both 'Edit' and 'Delete' for other users
                        echo "<td><a href=\"edit_user.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\">Delete</a></td>";
                    }

                    echo "</tr>";
                }
            ?>


        </table>

        <a href = "create_user.php">
            <button class = 'ttl_create_user_account' type='button'>Create New User Account</button>
        </a>

    </div>

    <?php 
        $conn->close(); 
    ?>

</body>
</html>