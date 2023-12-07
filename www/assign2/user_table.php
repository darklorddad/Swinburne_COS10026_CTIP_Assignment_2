<?php
    function createUserTable(){
        $hostname = "127.0.0.1";
        $user = "root";
        $password = "";
        $database = "florascan_database";
    
        $conn = mysqli_connect($hostname, $user, $password);
    
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $dbCheck = mysqli_query($conn, "SHOW DATABASES LIKE '$database'");
    
        if (mysqli_num_rows($dbCheck) == 0) {
            $sql = "CREATE DATABASE $database";
            mysqli_query($conn, $sql);
        } 

        mysqli_select_db($conn, $database);

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
            VALUES ( '000001', 'admin', 'admin@florascan.com', 'admin')";
    
            mysqli_query($conn, $admin);
        }

        // Check if table exists
        $enquiry_table = "userdetails";
        $enquiry_table_check = mysqli_query($conn, "SHOW TABLES LIKE '$enquiry_table'");
    
        if (mysqli_num_rows($enquiry_table_check) == 0) {
            // Table doesn't exist, so create it
            $sql = "CREATE TABLE userdetails (
                id INT AUTO_INCREMENT PRIMARY KEY,
                first_name VARCHAR(50) NOT NULL,
                last_name VARCHAR(50) NOT NULL,
                email VARCHAR(50) NOT NULL,
                street VARCHAR(255) NOT NULL,
                city VARCHAR(50) NOT NULL,
                state VARCHAR(50) NOT NULL,
                postcode VARCHAR(10) NOT NULL,
                plant VARCHAR(50) NOT NULL,
                enquiry TEXT NOT NULL
            )";
    
            mysqli_query($conn, $sql);
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

