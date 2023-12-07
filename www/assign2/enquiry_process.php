<?php
    include("user_table.php");

    session_start();

    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    unset($_SESSION['result']); 

    $mysqli_session = new mysqli($hostname, $user, $password);

    if ($mysqli_session -> connect_error) {
        $_SESSION['error'] = "Error connecting to database: " . $mysqli_session -> connect_error;
        header('Location: enquiry_error.php');
        exit();
    }

    createUserTable()

    function createDatabase($mysqli_session, $database) {
        $check_database_query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$database'";
        $check_database = $mysqli_session->query($check_database_query);

        if ($check_database->num_rows == 0) {
            $create_database = "CREATE DATABASE $database";

            if ($mysqli_session->query($create_database) !== TRUE) {
                $_SESSION['error'] = "Error creating database: " . $mysqli_session -> error;
                header('Location: enquiry_error.php');
                exit();
            }
        }

        $mysqli_session -> select_db($database);
    }

    function createTable($mysqli_session) {
        $table = "enquiry";
        $check_table_query = "SHOW TABLES LIKE '$table'";
        $check_table = $mysqli_session -> query($check_table_query);
        
        if ($check_table -> num_rows == 0) {
            $create_table = "CREATE TABLE $table (
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
        
            if ($mysqli_session -> query($create_table) !== TRUE) {
                $_SESSION['error'] = "Error creating table: " . $mysqli_session -> error;
                header('Location: enquiry_result.php');
                exit();
            }
        }
    }

    createDatabase($mysqli_session, $database);
    createTable($mysqli_session);

    function processForm($mysqli_session) {
        $first_name = $_POST["first-name"];
        if(empty($first_name)) {
            $_SESSION['first_name_error'] = "First name is required";
        }
        elseif(strlen($first_name) > 25) {
            $_SESSION['first_name_error'] = "First name should not exceed 25 characters";
        }
        elseif(!preg_match("/^[A-Za-z]+$/", $first_name)) {
            $_SESSION['first_name_error'] = "First name should only contain letters";
        }
        else{
            unset($_SESSION['first_name_error']);
            $_SESSION['first_name'] = $first_name;
        }
    
        $last_name = $_POST["last-name"];
        if (empty($last_name)) {
            $_SESSION['last_name_error'] = "Last name is required";
        } 
        elseif (strlen($last_name) > 25) {
            $_SESSION['last_name_error'] = "Last name should not exceed 25 characters";
        } 
        elseif (!preg_match("/^[A-Za-z]+$/", $last_name)) {
            $_SESSION['last_name_error'] = "Last name should only contain letters";
        }
        else{
            unset($_SESSION['last_name_error']);
            $_SESSION['last_name'] = $last_name;
        }
    
        $email = $_POST["email"];
        if (empty($email)) {
            $_SESSION['email_error'] = "Email is required";
        } 
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['email_error'] = "Invalid email format";
        }
        else{
            unset($_SESSION['email_error']);
            $_SESSION['email'] = $email;
        }
    
        $street = $_POST["street"];
        if (empty($street)) {
            $_SESSION['street_error'] = "Street address is required";
        } 
        elseif (strlen($street) > 255) {
            $_SESSION['street_error'] = "Street address should not exceed 255 characters";
        }
        else{
            unset($_SESSION['street_error']);
            $_SESSION['street'] = $street;
        }
    
        $city_town = $_POST["city-town"];
        if (empty($city_town)) {
            $_SESSION['city_town_error'] = "City or Town is required";
        } 
        elseif (strlen($city_town) > 50) {
            $_SESSION['city_town_error'] = "City or Town should not exceed 50 characters";
        }
        else{
            unset($_SESSION['city_town_error']);
            $_SESSION['city_town'] = $city_town;
        }
    
        $state = $_POST["state"];
        $valid_states = array(
            "Selangor", "Perlis", "Kelantan", "Sabah", "Perak", 
            "Penang", "Negeri Sembilan", "Malacca", "Johore", 
            "Terengganu", "Pahang", "Kedah"
        );
        
        if (empty($state)) {
            $_SESSION['state_error'] = "Please select your state";
        } 
        elseif (!in_array($state, $valid_states)) {
            $_SESSION['state_error'] = "Invalid state selected";
        }
        else{
            unset($_SESSION['state_error']);
            $_SESSION['state'] = $state;
        }
    
        $postcode = $_POST["postcode"];
        if (empty($postcode)) {
            $_SESSION['postcode_error'] = "Postcode is required";
        } 
        elseif (!preg_match("/^\d{5}$/", $postcode)) {
            $_SESSION['postcode_error'] = "Invalid postcode format, please enter a valid 5-digit postcode";
        }
        else{
            unset($_SESSION['postcode_error']);
            $_SESSION['postcode'] = $postcode;
        }
    
        $plant = $_POST["plant"];
        $selectedPlant = $_POST['plant'];
    
        if ($selectedPlant === "" || $selectedPlant === "Select a plant") {
            $_SESSION['plant_error'] = "Please select a plant";
        }
        else{
            unset($_SESSION['plant_error']);
            $_SESSION['plant'] = $plant;
        }
    
        $enquiry = $_POST["comment"];
        if (empty($enquiry)) {
            $_SESSION['comment_error'] = "Please enter your enquiry";
        }
        else{
            unset($_SESSION['comment_error']);
            $_SESSION['comment'] = $enquiry;
        }
        
        $_SESSION['enquiry'] = [
            'first-name' => $first_name,
            'last-name'  => $last_name,
            'email'      => $email,
            'street'     => $street,
            'city-town'  => $city_town,
            'state'      => $state,
            'postcode'   => $postcode,
            'plant'      => $plant,
            'comment'    => $enquiry
        ];
    
        if (isset($_SESSION['first_name_error']) || 
            isset($_SESSION['last_name_error']) || 
            isset($_SESSION['email_error']) || 
            isset($_SESSION['street_error']) || 
            isset($_SESSION['city_town_error']) || 
            isset($_SESSION['state_error']) || 
            isset($_SESSION['postcode_error']) || 
            isset($_SESSION['plant_error']) ||
            isset($_SESSION['comment_error']))
        {
            unset($_SESSION['result']);
            header('Location: enquiry_result.php');
            exit();
        } 
        else{
            $insert_enquiry = "INSERT INTO enquiry (first_name, last_name, email, street, city, state, postcode, plant, enquiry) 
                        VALUES ('$first_name', '$last_name', '$email', '$street', '$city_town', '$state', '$postcode', '$plant', '$enquiry')";
    
            if ($mysqli_session -> query($insert_enquiry) === TRUE) {
                $_SESSION['result'] = "<p>Record inserted into database successfully.</p> \n<p>Thank you <span>" . $first_name . "</span> for your enquiry, we will get back to you soon.</p>";
                header('Location: enquiry_result.php');
                exit();
            }
            else {
                $_SESSION['result'] = "Error inserting record: " . $mysqli_session -> error;
                header('Location: enquiry_result.php');
                exit();
            }
        }
    }
    
    processForm($mysqli_session);
?>