<?php
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "florascan_database";

    // Create connection
    $conn = mysqli_connect($hostname, $user, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if database exists
    $db_exists = mysqli_query($conn, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$database'");
    
    if ($db_exists->num_rows <= 0) {
        // Database doesn't exist, so create it
        $sql = "CREATE DATABASE $database";
        if (mysqli_query($conn, $sql)) {
            mysqli_select_db($conn, $database);
        } else {
            echo "Error creating database: " . mysqli_error($conn);
        }
    } else {
        mysqli_select_db($conn, $database);
    }

    // Check if table exists
    $tableName = "plant_records";
    $tableCheck = mysqli_query($conn, "SHOW TABLES LIKE '$tableName'");

    if (mysqli_num_rows($tableCheck) == 0) {
        // Table doesn't exist, so create it
        $sql = "CREATE TABLE plant_records (
            filename VARCHAR(255) NOT NULL,
            image_file_path VARCHAR(500) NOT NULL,
            plant_common_name VARCHAR(255),
            plant_scientific_name VARCHAR(255),
            modal_href_link VARCHAR(255)
        )";

        mysqli_query($conn, $sql);

        
        // if (mysqli_query($conn, $sql)) {
        //     echo "Table plant_records created successfully";
        // } else {
        //     echo "Error creating table: " . mysqli_error($conn);
        // }
    }

    $plantDetailsToInsert = [
        ['filename' => 'image_1', 'image_file_path' => 'styles/images/czy/apocynaceae/kopsia_singapurensis/5.jpeg', 'plant_common_name' => 'Singapore Kopsia', 'plant_scientific_name' => 'Kopsia singapurensis', 'modal_href_link' => '#ttl_image_1'],
        ['filename' => 'image_2', 'image_file_path' => 'styles/images/czy/pandanaceae/benstonea_parva/2.jpg', 'plant_common_name' => 'Small Benstonea', 'plant_scientific_name' => 'Benstonea parva', 'modal_href_link' => '#ttl_image_2'],
        ['filename' => 'image_3', 'image_file_path' => 'styles/images/ttl/ttl_chinaberry.jpg', 'plant_common_name' => 'Chinaberry', 'plant_scientific_name' => 'Melia azedarac', 'modal_href_link' => '#ttl_image_3'],
        ['filename' => 'image_4', 'image_file_path' => 'styles/images/czy/pandanaceae/freycinetia_imbricata/1.jpg', 'plant_common_name' => 'Climbing Pandan', 'plant_scientific_name' => 'Freycinetia imbricata', 'modal_href_link' => '#ttl_image_4'],
        ['filename' => 'image_5', 'image_file_path' => 'styles/images/czy/pandanaceae/pandanus_penangensis/2.jpg', 'plant_common_name' => 'Penang Screw Pine', 'plant_scientific_name' => 'Pandanus penangensis', 'modal_href_link' => '#ttl_image_5'],
        ['filename' => 'image_6', 'image_file_path' => 'styles/images/czy/dipterocarpaceae/vatica_pauciflora/1.jpg', 'plant_common_name' => 'Vatica pauciflora (no common name)', 'plant_scientific_name' => 'Vatica pauciflora', 'modal_href_link' => '#ttl_image_6'],
    ];
    
    foreach ($plantDetailsToInsert as $plantData) {
        $plant_common_name = $plantData['plant_common_name'];
    
        $checkData = mysqli_query($conn, "SELECT * FROM plant_records WHERE plant_common_name = '$plant_common_name'");
    
        if (mysqli_num_rows($checkData) == 0) {
            
            $fields = implode(", ", array_keys($plantData));
            $values = "'" . implode("', '", array_values($plantData)) . "'";
    
            $insertQuery = "INSERT INTO plant_records ($fields) VALUES ($values)";
    
            mysqli_query($conn, $insertQuery);
    
           
            // if (mysqli_query($conn, $insertQuery)) {
            //     echo "<br> New record created successfully for username: $plant_common_name, image_file_path: {$plantData['image_file_path']}";
            // } else {
            //     echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
            // }
        }
    }
    
    mysqli_close($conn);
?>