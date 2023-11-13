<?php
    // Database connection parameters
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "florascan_database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create table
    $sql = "CREATE TABLE accounts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table accounts created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO enquiry (first_name, last_name, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $first_name, $last_name, $email);

    // Set parameters and execute
    $first_name = "John";
    $last_name = "Doe";
    $email = "john@example.com";

    echo "New records created successfully";

    $stmt->close();
    $conn->close();
?>