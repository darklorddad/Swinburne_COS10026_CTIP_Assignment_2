<?php
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    $mysqli = new mysqli($hostname, $user, $password);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    if (!$mysqli->select_db($database)) {
        $create_database = "CREATE DATABASE IF NOT EXISTS $database";
        if ($mysqli->query($create_database) === TRUE) {
            echo "Database created successfully or already exists.<br>";
        }
        else {
            die("Error creating database: " . $mysqli->error);
        }
    }

    $mysqli->select_db($database);

    $table = "enquiry";
    $check_table_query = "SHOW TABLES LIKE '$table'";
    $check_table = $mysqli->query($check_table_query);

    if ($check_table->num_rows == 0) {
        $check_table = "CREATE TABLE $table (
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

        if ($mysqli->query($check_table_query) === TRUE) {
            echo "Table created successfully.<br>";
        } else {
            die("Error creating table: " . $mysqli->error);
        }
    }

    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $email = $_POST["email"];
    $street = $_POST["street-address"];
    $city = $_POST["city-town"];
    $state = $_POST["state"];
    $postcode = $_POST["postcode"];
    $plant = $_POST["plant"];
    $enquiry = $_POST["comment"];
    
    $insert_query = "INSERT INTO enquiry (first_name, last_name, email, street, city, state, postcode, plant, enquiry) 
                    VALUES ('$first_name', '$last_name', '$email', '$street', '$city', '$state', '$postcode', '$plant', '$enquiry')";

    if ($mysqli->query($insert_query) === TRUE) {
        echo "Record inserted successfully.";
    }
    else {
        echo "Error inserting record: " . $mysqli->error;
    }

    $mysqli->close();
?>