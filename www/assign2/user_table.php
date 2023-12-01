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
    $tableName = "userdetails";
    $tableCheck = mysqli_query($conn, "SHOW TABLES LIKE '$tableName'");

    if (mysqli_num_rows($tableCheck) == 0) {
        // Table doesn't exist, so create it
        $sql = "CREATE TABLE userdetails (
            id INT AUTO_INCREMENT PRIMARY KEY, 
            -- user_id INT NOT NULL UNIQUE,
            username VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            user_password VARCHAR(50) NOT NULL
        )";

        mysqli_query($conn, $sql);

        // if (mysqli_query($conn, $sql)) {
        //     echo "Table UserDetails created successfully";
        // } else {
        //     echo "Error creating table: " . mysqli_error($conn);
        // }
    } 
    // else {
    //     echo "Table UserDetails already exists";
    // }

    // Check if data already exists
    $checkData = mysqli_query($conn, "SELECT * FROM userdetails WHERE username = 'admin'");

    if (mysqli_num_rows($checkData) == 0) {
        // Data doesn't exist, so insert it
        $admin = "INSERT INTO userdetails (username, email, user_password)
        VALUES ( 'admin', 'admin_florascan@gmail.com', 'admin')";

        mysqli_query($conn, $admin);

        // if (mysqli_query($conn, $admin)) {
        //     echo "<br> New record created successfully";
        // } else {
        //     echo "Error: " . $admin . "<br>" . mysqli_error($conn);
        // }
    } 
    // else {
    //     echo "<br> Admin Data already exists";
    // }

    // Function to generate a unique user_id
    // function generateUniqueUserId($conn) {
    //     $uniqueId = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
    //     // Check if the generated user_id already exists
    //     $checkUniqueId = mysqli_query($conn, "SELECT * FROM userdetails WHERE user_id = '$uniqueId'");
    //     if (mysqli_num_rows($checkUniqueId) > 0) {
    //         // If it exists, generate a new one recursively
    //         return generateUniqueUserId($conn);
    //     }
    //     return $uniqueId;
    // }

    mysqli_close($conn);
?>

