<?php
    function createUserTable(){
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
                user_id VARCHAR(6) NOT NULL UNIQUE,
                username VARCHAR(50) NOT NULL,
                email VARCHAR(50) NOT NULL,
                user_password VARCHAR(50) NOT NULL
            )";
    
            mysqli_query($conn, $sql);
        } 

        // Check if data already exists
        $checkData = mysqli_query($conn, "SELECT * FROM userdetails WHERE username = 'admin'");
    
        if (mysqli_num_rows($checkData) == 0) {
            // Data doesn't exist, so insert it
            $admin = "INSERT INTO userdetails (user_id, username, email, user_password)
            VALUES ( '000001', 'admin', 'admin_florascan@gmail.com', 'admin')";
    
            mysqli_query($conn, $admin);
        } 
    }

    //Function to generate a unique user_id
    function generateUniqueUserId($conn) {
        $uniqueId = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
        // Check if the generated user_id already exists
        $checkUniqueId = mysqli_query($conn, "SELECT * FROM userdetails WHERE user_id = '$uniqueId'");
        if (mysqli_num_rows($checkUniqueId) > 0) {
            // If it exists, generate a new one recursively
            return generateUniqueUserId($conn);
        }
        return $uniqueId;
    }
?>

