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
        ['filename' => 'ttl_chinaberry.jpg', 'image_file_path' => 'styles/images/ttl/ttl_chinaberry.jpg', 'plant_common_name' => 'Chinaberry', 'plant_scientific_name' => 'Melia azedarach', 'modal_href_link' => '#ttl_chinaberry_info'],
        ['filename' => 'ttl_persimmon.png', 'image_file_path' => 'styles/images/ttl/ttl_persimmon.png', 'plant_common_name' => 'Malaysian Persimmon', 'plant_scientific_name' => 'Diospyros maritima', 'modal_href_link' => '#ttl_persimmon_info'],
        ['filename' => 'ttl_cocoplum.png', 'image_file_path' => 'styles/images/ttl/ttl_cocoplum.png', 'plant_common_name' => 'Cocoplum', 'plant_scientific_name' => 'Chrysobalanus icaco', 'modal_href_link' => '#ttl_cocoplum_info'],
        ['filename' => 'ttl_gumbo_limbo.png', 'image_file_path' => 'styles/images/ttl/ttl_gumbo_limbo.png', 'plant_common_name' => 'Gumbo-limbo', 'plant_scientific_name' => 'Bursera simaruba', 'modal_href_link' => '#ttl_gumbo_limbo_info'],
        
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