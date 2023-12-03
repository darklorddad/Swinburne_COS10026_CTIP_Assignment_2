<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta name = "author" content = "Daniel Tiong">
        <meta name = "description" content = "Enquiry">
        <title>Florascan - Enquiry</title>
        <?php include_once("head.php"); ?>
    </head>

    <body class = "nic_body">
        <?php include_once("dld_background_dots.php"); ?>
        <?php include_once("dld_top_navigation_bar.php"); ?>

        <div class = "ash_section_1">
            <div class = "ash_page_header">
                <p class = "ash_title_header">Enquiry</p>
                <p>Discover your green sanctuary with our wide selection of plants and expert advice.</p>
            </div>
        </div>

        <div class = "dld_main_2">
            <div class = "ttl_center_2">
                <?php
                    $hostname = "127.0.0.1";
                    $user = "root";
                    $password = "";
                    $database = "florascan_database";

                    $mysqli_session = new mysqli($hostname, $user, $password);

                    if ($mysqli_session -> connect_error) {
                        echo "
                            <p>Error connecting to database: " . $mysqli_session -> connect_error . "</p>
                        ";
                    }

                    $check_database_query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$database'";
                    $check_database = $mysqli_session->query($check_database_query);

                    if ($check_database->num_rows == 0) {
                        $create_database = "CREATE DATABASE $database";

                        if ($mysqli_session->query($create_database) === TRUE) {
                            echo "<p>Database created successfully</p>";
                        } else {
                            echo "<p>Error creating database: " . $mysqli_session->error . "</p>";
                        }
                    } else {
                        echo "<p>Database already exists</p>";
                    }

                    $mysqli_session -> select_db($database);

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
                    
                        if ($mysqli_session -> query($create_table) === TRUE) {
                            echo "<p>Table created successfully</p>";
                        }
                        else {
                            echo "<p>Error creating table: " . $mysqli_session -> error . "</p>";
                        }
                    }
                    else {
                        echo "<p>Table already exists</p>";
                    }

                    session_start();
                    $first_name = $_POST["first-name"];
                    if(empty($first_name)) {
                        $_SESSION['error'] = "First name is required";
                        header('Location: enquiry_error.php');
                        exit();
                    }
                    elseif(strlen($first_name) > 25) {
                        $_SESSION['error'] = "First name should not exceed 25 characters";
                        header('Location: enquiry_error.php');
                        exit();
                    }
                    elseif(!preg_match("/^[A-Za-z]+$/", $first_name)) {
                        $_SESSION['error'] = "First name should only contain letters";
                        header('Location: enquiry_error.php');
                        exit();
                    }

                    $last_name = $_POST["last-name"];
                    if (empty($last_name)) {
                        $_SESSION['error'] = "Last name is required";
                        header('Location: enquiry_error.php');
                        exit();
                    } elseif (strlen($last_name) > 25) {
                        $_SESSION['error'] = "Last name should not exceed 25 characters";
                        header('Location: enquiry_error.php');
                        exit();
                    } elseif (!preg_match("/^[A-Za-z]+$/", $last_name)) {
                        $_SESSION['error'] = "Last name should only contain letters";
                        header('Location: enquiry_error.php');
                        exit();
                    }
                    $email = $_POST["email"];
                    if (empty($email)) {
                        $_SESSION['error'] = "Email is required";
                        header('Location: enquiry_error.php');
                        exit();
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $_SESSION['error'] = "Invalid email format";
                        header('Location: enquiry_error.php');
                        exit();
                    }
                    $street = $_POST["street"];
                    if (empty($street)) {
                        $_SESSION['error'] = "Street address is required";
                        header('Location: enquiry_error.php');
                        exit();
                    } elseif (strlen($street) > 255) {
                        $_SESSION['error'] = "Street address should not exceed 255 characters";
                        header('Location: enquiry_error.php');
                        exit();
                    }
                    $city_town = $_POST["city-town"];
                    if (empty($city_town)) {
                        $_SESSION['error'] = "City or Town is required";
                        header('Location: enquiry_error.php');
                        exit();
                    } elseif (strlen($city_town) > 50) {
                        $_SESSION['error'] = "City or Town should not exceed 50 characters";
                        header('Location: enquiry_error.php');
                        exit();
                    }

                    $state = $_POST["state"];
                    $valid_states = array(
                        "Selangor", "Perlis", "Kelantan", "Sabah", "Perak", 
                        "Penang", "Negeri Sembilan", "Malacca", "Johore", 
                        "Terengganu", "Pahang", "Kedah"
                    );
                    
                    if (empty($state)) {
                        $_SESSION['error'] = "Please select your state";
                        header('Location: enquiry_error.php');
                        exit();
                    } elseif (!in_array($state, $valid_states)) {
                        $_SESSION['error'] = "Invalid state selected";
                        header('Location: enquiry_error.php');
                        exit();
                    }

                    $postcode = $_POST["postcode"];
                    if (empty($postcode)) {
                        $_SESSION['error'] = "Postcode is required";
                        header('Location: enquiry_error.php');
                        exit();
                    } elseif (!preg_match("/^\d{5}$/", $postcode)) {
                        $_SESSION['error'] = "Invalid postcode format. Please enter a 5-digit postcode";
                        header('Location: enquiry_error.php');
                        exit();
                    }
                    $plant = $_POST["plant"];
                    $selectedPlant = $_POST['plant'];

                    if ($selectedPlant === "" || $selectedPlant === "Select a plant") {
                        $_SESSION['error'] = "Please select a valid plant";
                        header('Location: enquiry_error.php');
                        exit();
                    }
                    $enquiry = $_POST["comment"];
                    if (empty($enquiry)) {
                        $_SESSION['error'] = "Please enter your enquiry";
                        header('Location: enquiry_error.php');
                        exit();
                    }
                             
                    $insert_enquiry = "INSERT INTO enquiry (first_name, last_name, email, street, city, state, postcode, plant, enquiry) 
                                    VALUES ('$first_name', '$last_name', '$email', '$street', '$city_town', '$state', '$postcode', '$plant', '$enquiry')";

                    if ($mysqli_session -> query($insert_enquiry) === TRUE) {
                        echo "
                            <p>Record inserted successfully</p>
                            <p>Thank you <span style=\"font-family: 'dld_samsungsharpsans_bold';\">$first_name</span> for your enquiry, we will get back to you soon</p>
                        ";
                    }
                    else {
                        echo "
                            <p>Error inserting record: " . $mysqli_session -> error . "</p>"
                        ;
                    }

                    $mysqli_session -> close();
                ?>
            </div>
        </div>

        <footer>
            <div class = "dld_footer_section_1">
                <?php include_once("dld_footer_section_1.php"); ?>

                <div class = "dld_section_1_footer_right">
                    <h1 class = "dld_footer_heading">Acknowledgement</h1>
                    <div class = "dld_footer_section_1_center_row">
                        <div class = "dld_footer_section_1_center_column">
                            <a target="_blank" href = "https://identify.plantnet.org/k-world-flora/species/Alstonia%20angustifolia%20Wall.%20ex%20A.DC./data" class = "dld_footer_section_1_center_navigation_link_1">Alstonia Angustifolia</a>
                        </div>
                        <div class = "dld_footer_section_1_center_column">
                            <a target="_blank" href = "https://identify.plantnet.org/k-world-flora/species/Alstonia%20scholaris%20(L.)%20R.Br./data">Alstonia Scholaris</a>
                        </div>
                        <div class = "dld_footer_section_1_center_column">
                            <a target="_blank" href = "https://identify.plantnet.org/k-world-flora/species/Alstonia%20macrophylla%20Wall.%20ex%20G.Don/data">Alstonia Macrophylla</a>
                        </div>
                    </div>
                    <div class = "dld_footer_section_1_center_column">
                            <a target="_blank" href = "https://identify.plantnet.org/k-world-flora/species/Hoya%20campanulata%20Blume/data">Hoya Campanulata</a>
                    </div>
                </div>
            </div>

            <?php include_once("dld_footer_section_2.php"); ?>
        </footer>
    </body>
</html>
