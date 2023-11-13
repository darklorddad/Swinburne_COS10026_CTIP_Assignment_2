<?php
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    // Create connection
    $conn = mysqli_connect($hostname, $user, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if table exists
    $tableName = "UserDetails";
    $tableCheck = mysqli_query($conn, "SHOW TABLES LIKE '$tableName'");

    if (mysqli_num_rows($tableCheck) == 0) {
        // Table doesn't exist, so create it
        $sql = "CREATE TABLE UserDetails (
            id INT AUTO_INCREMENT PRIMARY KEY, 
            username VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            user_password VARCHAR(50) NOT NULL
        )";

        if (mysqli_query($conn, $sql)) {
            echo "Table UserDetails created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }
    } else {
        echo "Table UserDetails already exists";
    }

    // Check if data already exists
    $checkData = mysqli_query($conn, "SELECT * FROM UserDetails WHERE username = 'Admin' AND email = 'admin_florascan@gmail.com' AND user_password = 'Florascan'");

    if (mysqli_num_rows($checkData) == 0) {
        // Data doesn't exist, so insert it
        $admin = "INSERT INTO UserDetails (username, email, user_password)
        VALUES ('Admin', 'admin_florascan@gmail.com', 'Florascan')";

        if (mysqli_query($conn, $admin)) {
            echo "<br> New record created successfully";
        } else {
            echo "Error: " . $admin . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "<br> Admin Data already exists";
    }

    mysqli_close($conn);
?>

