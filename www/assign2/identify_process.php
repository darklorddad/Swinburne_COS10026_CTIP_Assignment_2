<?php
// Database configuration
$host = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Create database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the database exists, if not create it
if (!$conn->select_db($dbname)) {
    $sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $dbname";
    if ($conn->query($sqlCreateDB) === TRUE) {
        echo "Database created successfully\n";
        $conn->select_db($dbname);
    } else {
        die("Error creating database: " . $conn->error);
    }
}

// Check if the table exists, if not create it
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    upload_date TIMESTAMP
)";
if ($conn->query($sqlCreateTable) === TRUE) {
    echo "Table '$tableName' created successfully\n";
} else {
    die("Error creating table: " . $conn->error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $filename = $_FILES["fileToUpload"]["name"];
        
        // Prepare a select statement
        $sql = "SELECT * FROM files WHERE filename = ?";
        $stmt = $conn->prepare($sql);
        
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $filename);
        
        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Store result
            $stmt->store_result();
            
            // Check if filename exists
            if ($stmt->num_rows > 0) {
                echo "File already exists in the database.";
            } else {
                echo "File does not exist in the database.";
                // You can proceed to upload the file and insert the record into the database here
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
        
        // Close statement
        $stmt->close();
    } else {
        echo "Error: " . $_FILES["fileToUpload"]["error"];
    }
}

// Close connection
$conn->close();
?>