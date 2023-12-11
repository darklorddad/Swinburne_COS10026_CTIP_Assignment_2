<?php
    session_start();

    $defaultImage = 'styles/images/ttl/ttl_upload_icon.svg';
    $uploadedImage = ''; 
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Tan Tzy Lynn">
    <meta name = "description" content = "Identify">
    <title>FLORASCAN - Identify</title>
    <?php include_once("head.php"); ?>
</head>
<body class = "ttl_body">
    <?php include_once("dld_background_dots.php"); ?>
    <?php include_once("dld_top_navigation_bar.php"); ?>
    <?php include_once("plant_records_table.php"); ?>


    <div class = "ttl_header_section">
        <div class = "ttl_header_container">
            <div class = "ttl_text_container">
                
                <div class = "ttl_page_header">
                    <p class = "ttl_title_header">Identify</p>
                    <p>Explore the diverse world of plants effortlessly with our user-friendly identification tool and deepen your connection with the natural wonders around you.</p>
                </div>

                <div class = "ttl_block_reveal_container">
                    <div class = "ttl_block_reveal">
                
                        <div class = "ttl_any_plant">
                            <div class = "ttl_block2"></div>
                            <p class = "ttl_block2_text">Versatile Floral Recognition</p>
                        </div>

                        <div class = "ttl_anywhere">
                            <div class = "ttl_block3"></div>
                            <p class = "ttl_block3_text">Identification at Every Locale</p>
                        </div>

                        <div class = "ttl_anytime">
                            <div class = "ttl_block4"></div>
                            <p class = "ttl_block4_text">Continuous Recognition Service</p>
                        </div>
                
                    </div>
                </div>

            </div>

            <div class = "ttl_image_slider">
                <div class = "ttl_image_slider_wrapper">
                    <img src = "styles/images/ttl/ttl_slide1.png" alt = "Himalayan Sapria">
                    <img src = "styles/images/ttl/ttl_slide2.png" alt = "Flowers">
                    <img src = "styles/images/ttl/ttl_slide3.png" alt = "Lotus">
                    <img src = "styles/images/ttl/ttl_slide4.png" alt = "Hibiscus">
                </div>
            </div>
        </div>
    </div>

    <div class = "ttl_main_body">
        <div class="ttl_center">
            <div class="ttl_bar">
                <p class="ttl_upload_title">Flora Recognition</p>
                <p class="ttl_upload_description">At least a photo of leaf, flower, fruit or bark is required for identification to work.</p>
            </div>

            <form id="uploadForm" action="identify.php#jump" method="post" enctype="multipart/form-data">
                <div class="ttl_dropzone">
                    <div class="ttl_filecontent">
                        <?php
                            $imageToShow = (!empty($uploadedImage)) ? $uploadedImage : $defaultImage;
                            echo '<img src="' . $imageToShow . '" alt="Uploaded Image" class="ttl_uploaded_image">';
                        ?>
                        <input type = "file" id = "fileToUpload" name = "fileToUpload" accept = ".png, .jpg, .jpeg">
                    </div>
                </div>

                <input type = "hidden" name = "uploaded_filename" value = "<?php echo isset($uploadedFilename) ? $uploadedFilename : ''; ?>">

                <div class="ttl_upload-btn">
                    <button type="submit" class="ttl_identify_button" name = "upload_identify"  id = "jump">
                        Upload and Identify
                        <span class="ttl-star-1">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                        </span>
                        <span class="ttl-star-2">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                        </span>
                        <span class="ttl-star-3">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                        </span>
                        <span class="ttl-star-4">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                        </span>
                        <span class="ttl-star-5">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                        </span>
                        <span class="ttl-star-6">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php
        $targetDir = "store_user_uploads/"; 

        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true); 
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['upload_identify'])) {
            $allowedFileTypes = array("image/png", "image/jpg", "image/jpeg");

            $hostname = "127.0.0.1";
            $user = "root";
            $password = "";
            $database = "florascan_database";

            $conn = new mysqli($hostname, $user, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $target_file = $targetDir . basename($_FILES["fileToUpload"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_FILENAME));
            $filename = isset($_FILES["fileToUpload"]["name"]) ? $imageFileType : '';
            $sql = "SELECT * FROM plant_records WHERE filename = '$filename'";
            $result = $conn->query($sql);

            echo '<section class="ttl_result">' ;
            echo '<h1 class="ttl_result_title">Identification Summary</h1>';
            echo '<div class="ttl_result_container">';

            if (!in_array($_FILES["fileToUpload"]["type"], $allowedFileTypes)) {
                echo '
                <div class = "ttl_center_3">
                    <p class="ttl_upload_img_error_message">Invalid file type. Please upload a PNG or JPG file.</p>
                <div>
                ';
            } else {
                $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                    $uploadedImage = $targetFile;
                    $uploadedFilename = basename($targetFile);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $uploadedImage = $targetFile;
                            $uploadedFilename = basename($targetFile);
                            $_SESSION['uploadedFileText'] = 'File uploaded: ' . $uploadedFilename;
                            $imageFilePath = $row['image_file_path'];
                            $imgCaption = $row['plant_common_name'];
                            $plantCommonName = $row['plant_common_name'];
                            $plantScientificName = $row['plant_scientific_name'];
                            $modalHrefLink = $row['modal_href_link'];
        
                            echo '<div class="ttl_plant_card">';
                            echo '<img src="' . $imageFilePath . '" alt="' . $imgCaption . '">';
                            echo '<div class="ttl_plant_info">';
                            echo '<p class = "ttl_plant_info_common_name">' . $plantCommonName . '</p>';
                            echo '<p class = "ttl_plant_info_scientific_name">' . $plantScientificName . '</p>';
                            echo '<div class="ttl_plant_modal_box">';
                            echo '<a href="' . $modalHrefLink . '" class="ttl_link-1" ">Delve Deeper</a>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '
                        <div class = "ttl_center_3">
                            <p>No records found for the uploaded image. </p>
                        <div>
                        ';
                    }
                } else {
                    echo "<p class='ttl_upload_img_error_message'>Sorry, there was an error uploading your file.</p>";
                }
            }

            echo '</div>';
            echo '</section>';

            $conn->close();
        }
    ?>

    <div class = "ttl_modal_container" id = "ttl_image_1">
        <div class = "ttl_modal">
            <p class = "ttl_modal_title">Singapore Kopsia <br> <em>Kopsia singapurensis</em></p>

            <div class = "ttl_modal_content">
                <div class = "ttl_plant_about_container">
                    <div class = "ttl_plant_about_title_container">
                        <svg xmlns = "http://www.w3.org/2000/svg" x = "0px" y = "0px" viewBox = "0,0,256,256" class = "ttl_plant_about_icon">
                            <g transform = "translate(25.6,25.6) scale(0.8,0.8)">
                                <g fill = "#ffffff" fill-rule = "nonzero" stroke = "none" stroke-width = "1" stroke-linecap = "butt" stroke-linejoin = "miter" stroke-miterlimit = "10" stroke-dasharray = "" stroke-dashoffset = "0" font-family = "none"  font-size = "none"  style = "mix-blend-mode: normal">
                                    <g transform = "scale(5.12,5.12)">
                                        <path d = "M25,2c-12.6907,0 -23,10.3093 -23,23c0,12.69071 10.3093,23 23,23c12.69071,0 23,-10.30929 23,-23c0,-12.6907 -10.30929,-23 -23,-23zM25,4c11.60982,0 21,9.39018 21,21c0,11.60982 -9.39018,21 -21,21c-11.60982,0 -21,-9.39018 -21,-21c0,-11.60982 9.39018,-21 21,-21zM25,11c-1.65685,0 -3,1.34315 -3,3c0,1.65685 1.34315,3 3,3c1.65685,0 3,-1.34315 3,-3c0,-1.65685 -1.34315,-3 -3,-3zM21,21v2h1h1v13h-1h-1v2h1h1h4h1h1v-2h-1h-1v-15h-1h-4z"> 
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <p class = "ttl_plant_about_title">
                            About
                        </p>
                    </div>

                    <p class = "ttl_plant_about_content">
                        Kopsia singapurensis, commonly known as the Singapore Kopsia, is a rare and endangered plant 
                        species native to Singapore. It belongs to the Apocynaceae family, which is a family of 
                        flowering plants that includes around 3665 species in 366 genera. The Singapore Kopsia 
                        is a small tree or shrub that can grow up to 15 meters tall. It is characterized by its 
                        white flowers, which are about 2.5 cm in diameter, and its elliptical leaves, which are 
                        about 10 cm long and 4 cm wide. The plant is known for its beautiful and fragrant flowers, 
                        which bloom from April to July.</br></br></br>

                        The Singapore Kopsia is endemic to Singapore, meaning it is found nowhere else in the world. 
                        It was first discovered in 1893 in the Mandai area, and since then, it has been found in a 
                        few other locations in Singapore, including the Bukit Timah Nature Reserve and the Central 
                        Catchment Nature Reserve. However, due to habitat loss and urban development, the population 
                        of the Singapore Kopsia has significantly declined over the years. Today, it is considered 
                        one of the most endangered plant species in Singapore.</br></br></br>

                        Efforts are being made to conserve the Singapore Kopsia. The National Parks Board of 
                        Singapore has been propagating the plant in nurseries and reintroducing it into suitable 
                        habitats. In addition, the plant has been included in the Singapore Red Data Book, a 
                        compilation of endangered and threatened species in Singapore. Despite these efforts, 
                        the survival of the Singapore Kopsia remains uncertain due to ongoing threats such as 
                        habitat loss and climate change. It is hoped that with continued conservation efforts, 
                        this unique and beautiful plant species can be saved from extinction.</br></br>
                    </p>
                </div>
            </div>

            <a href = "#ttl_identify_page" class = "ttl_link-2"></a>
        </div>
    </div>

    <div class = "ttl_modal_container" id = "ttl_image_2">
        <div class = "ttl_modal">
            <p class = "ttl_modal_title">Small Benstonea <br> <em>Benstonea parva</em></p>

            <div class = "ttl_modal_content">
                <div class = "ttl_plant_about_container">
                    <div class = "ttl_plant_about_title_container">
                        <svg xmlns = "http://www.w3.org/2000/svg" x = "0px" y = "0px" viewBox = "0,0,256,256" class = "ttl_plant_about_icon">
                            <g transform = "translate(25.6,25.6) scale(0.8,0.8)">
                                <g fill = "#ffffff" fill-rule = "nonzero" stroke = "none" stroke-width = "1" stroke-linecap = "butt" stroke-linejoin = "miter" stroke-miterlimit = "10" stroke-dasharray = "" stroke-dashoffset = "0" font-family = "none"  font-size = "none"  style = "mix-blend-mode: normal">
                                    <g transform = "scale(5.12,5.12)">
                                        <path d = "M25,2c-12.6907,0 -23,10.3093 -23,23c0,12.69071 10.3093,23 23,23c12.69071,0 23,-10.30929 23,-23c0,-12.6907 -10.30929,-23 -23,-23zM25,4c11.60982,0 21,9.39018 21,21c0,11.60982 -9.39018,21 -21,21c-11.60982,0 -21,-9.39018 -21,-21c0,-11.60982 9.39018,-21 21,-21zM25,11c-1.65685,0 -3,1.34315 -3,3c0,1.65685 1.34315,3 3,3c1.65685,0 3,-1.34315 3,-3c0,-1.65685 -1.34315,-3 -3,-3zM21,21v2h1h1v13h-1h-1v2h1h1h4h1h1v-2h-1h-1v-15h-1h-4z"> 
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <p class = "ttl_plant_about_title">
                            About
                        </p>
                    </div>

                    <p class = "ttl_plant_about_content">
                        Benstonea parva is a species of plant in the family Pandanaceae. It is endemic to 
                        Peninsular Malaysia, specifically the Cameron Highlands, where it grows in montane 
                        forests. The species was first described in 2012, and it is named after the botanist 
                        Benjamin Clemens Masterman Stone, who made significant contributions to the study of 
                        Asian flora. The specific epithet "parva" is derived from Latin, meaning "small", 
                        which refers to the plant's relatively small size compared to other species in the 
                        genus Benstonea.</br></br></br>

                        The Benstonea parva plant is a small tree or shrub that can reach up to 3 meters in 
                        height. It has a distinctive appearance with its long, narrow leaves that are spirally 
                        arranged around the stem. The leaves are dark green, glossy, and have a leathery texture. 
                        The plant also produces small, inconspicuous flowers that are greenish-white in color. 
                        The flowers are unisexual, meaning that individual plants produce either male or female 
                        flowers, but not both.</br></br></br>

                        Despite its small size, Benstonea parva plays a significant role in its ecosystem. 
                        It provides habitat and food for a variety of wildlife, including insects and birds. 
                        The plant's fruits are also consumed by various animal species. However, like many 
                        other endemic species, Benstonea parva faces threats from habitat loss due to 
                        deforestation and agricultural expansion. Conservation efforts are needed to 
                        ensure the survival of this unique plant species.</br></br>
                    </p>
                </div>
            </div>

            <a href = "#ttl_identify_page" class = "ttl_link-2"></a>
        </div>
    </div>

    <div class = "ttl_modal_container" id = "ttl_image_3">
        <div class = "ttl_modal">
            <p class = "ttl_modal_title">Chinaberry <br> <em>Melia azedarac</em></p>

            <div class = "ttl_modal_content">
                <div class = "ttl_plant_about_container">
                    <div class = "ttl_plant_about_title_container">
                        <svg xmlns = "http://www.w3.org/2000/svg" x = "0px" y = "0px" viewBox = "0,0,256,256" class = "ttl_plant_about_icon">
                            <g transform = "translate(25.6,25.6) scale(0.8,0.8)">
                                <g fill = "#ffffff" fill-rule = "nonzero" stroke = "none" stroke-width = "1" stroke-linecap = "butt" stroke-linejoin = "miter" stroke-miterlimit = "10" stroke-dasharray = "" stroke-dashoffset = "0" font-family = "none"  font-size = "none"  style = "mix-blend-mode: normal">
                                    <g transform = "scale(5.12,5.12)">
                                        <path d = "M25,2c-12.6907,0 -23,10.3093 -23,23c0,12.69071 10.3093,23 23,23c12.69071,0 23,-10.30929 23,-23c0,-12.6907 -10.30929,-23 -23,-23zM25,4c11.60982,0 21,9.39018 21,21c0,11.60982 -9.39018,21 -21,21c-11.60982,0 -21,-9.39018 -21,-21c0,-11.60982 9.39018,-21 21,-21zM25,11c-1.65685,0 -3,1.34315 -3,3c0,1.65685 1.34315,3 3,3c1.65685,0 3,-1.34315 3,-3c0,-1.65685 -1.34315,-3 -3,-3zM21,21v2h1h1v13h-1h-1v2h1h1h4h1h1v-2h-1h-1v-15h-1h-4z"> 
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <p class = "ttl_plant_about_title">
                            About
                        </p>
                    </div>

                    <p class = "ttl_plant_about_content">
                        Melia azedarac, commonly known as the Chinaberry tree, Bead tree, Cape lilac, or 
                        Persian lilac, is a species of deciduous tree in the mahogany family, Meliaceae. 
                        It is native to Indomalaya and Australasia, but has been introduced to several 
                        other regions including the southern United States, southern Europe, and parts 
                        of Africa. The tree is known for its fast growth and tolerance to a variety of 
                        soil conditions, making it a popular choice for urban landscaping. It can reach 
                        heights of up to 15 meters and is characterized by its lustrous, dark green 
                        leaves and clusters of fragrant, lilac-colored flowers.</br></br></br>

                        The fruits of Melia azedarac are small, round, and yellowish, resembling berries. 
                        They are often used in beadwork and other crafts due to their hard, durable nature. 
                        However, they are toxic if ingested, containing compounds such as meliatoxins and 
                        tetranortriterpenoids that can cause symptoms ranging from mild irritation to 
                        severe neurological effects. Despite this, the tree has been used in traditional 
                        medicine in various cultures, with parts of the plant being used to treat 
                        conditions such as malaria, tapeworm, and ulcers.</br></br></br>

                        Melia azedarac is also notable for its environmental impact. It is considered an 
                        invasive species in some regions due to its ability to outcompete native plants. 
                        The tree's dense canopy can block sunlight, preventing other plants from growing 
                        underneath it. However, it also has potential uses in reforestation efforts due 
                        to its fast growth and ability to thrive in poor soil conditions. Additionally, 
                        research has suggested that extracts from the tree may have potential as a 
                        natural pesticide, due to their toxicity to certain insects and pests.</br></br>
                    </p>
                </div>
            </div>

            <a href = "#ttl_identify_page" class = "ttl_link-2"></a>
        </div>
    </div>

    <div class = "ttl_modal_container" id = "ttl_image_4">
        <div class = "ttl_modal">
            <p class = "ttl_modal_title">Climbing Pandan <br> <em>Freycinetia imbricata</em></p>

            <div class = "ttl_modal_content">
                <div class = "ttl_plant_about_container">
                    <div class = "ttl_plant_about_title_container">
                        <svg xmlns = "http://www.w3.org/2000/svg" x = "0px" y = "0px" viewBox = "0,0,256,256" class = "ttl_plant_about_icon">
                            <g transform = "translate(25.6,25.6) scale(0.8,0.8)">
                                <g fill = "#ffffff" fill-rule = "nonzero" stroke = "none" stroke-width = "1" stroke-linecap = "butt" stroke-linejoin = "miter" stroke-miterlimit = "10" stroke-dasharray = "" stroke-dashoffset = "0" font-family = "none"  font-size = "none"  style = "mix-blend-mode: normal">
                                    <g transform = "scale(5.12,5.12)">
                                        <path d = "M25,2c-12.6907,0 -23,10.3093 -23,23c0,12.69071 10.3093,23 23,23c12.69071,0 23,-10.30929 23,-23c0,-12.6907 -10.30929,-23 -23,-23zM25,4c11.60982,0 21,9.39018 21,21c0,11.60982 -9.39018,21 -21,21c-11.60982,0 -21,-9.39018 -21,-21c0,-11.60982 9.39018,-21 21,-21zM25,11c-1.65685,0 -3,1.34315 -3,3c0,1.65685 1.34315,3 3,3c1.65685,0 3,-1.34315 3,-3c0,-1.65685 -1.34315,-3 -3,-3zM21,21v2h1h1v13h-1h-1v2h1h1h4h1h1v-2h-1h-1v-15h-1h-4z"> 
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <p class = "ttl_plant_about_title">
                            About
                        </p>
                    </div>

                    <p class = "ttl_plant_about_content">
                        Freycinetia imbricata is a species of plant in the family Pandanaceae. It is commonly 
                        known as the climbing pandanus or the ivy pandanus. This plant is native to the 
                        tropical regions of Asia and the Pacific, including countries like Malaysia, Indonesia, 
                        the Philippines, and Papua New Guinea. It is a climbing plant that uses aerial roots 
                        to attach itself to trees and other structures. The plant is known for its long, narrow, 
                        and glossy leaves that are arranged in a spiral pattern around the stem.</br></br></br>

                        The Freycinetia imbricata is a dioecious plant, meaning it has separate male and female 
                        plants. The male flowers are small and numerous, arranged in a cylindrical inflorescence, 
                        while the female flowers are larger and fewer, arranged in a globular inflorescence. The 
                        fruit of the Freycinetia imbricata is a multiple fruit, similar to a pineapple, but smaller 
                        and more elongated. The fruit is edible and is sometimes used in local cuisines in the 
                        regions where the plant is native.</br></br></br>

                        In terms of cultivation, Freycinetia imbricata prefers a humid, tropical climate and 
                        well-drained soil. It can tolerate a range of light conditions, from full sun to partial 
                        shade, but it prefers a location with some protection from the hottest midday sun. The 
                        plant is relatively hardy and can tolerate a range of soil types, including sandy, loamy, 
                        and clay soils. It is also resistant to most pests and diseases, making it a relatively 
                        easy plant to grow in suitable conditions.</br></br>
                    </p>
                </div>
            </div>

            <a href = "#ttl_identify_page" class = "ttl_link-2"></a>
        </div>
    </div>

    <div class = "ttl_modal_container" id = "ttl_image_5">
        <div class = "ttl_modal">
            <p class = "ttl_modal_title">Penang Screw Pine <br> <em>Pandanus penangensis</em></p>

            <div class = "ttl_modal_content">
                <div class = "ttl_plant_about_container">
                    <div class = "ttl_plant_about_title_container">
                        <svg xmlns = "http://www.w3.org/2000/svg" x = "0px" y = "0px" viewBox = "0,0,256,256" class = "ttl_plant_about_icon">
                            <g transform = "translate(25.6,25.6) scale(0.8,0.8)">
                                <g fill = "#ffffff" fill-rule = "nonzero" stroke = "none" stroke-width = "1" stroke-linecap = "butt" stroke-linejoin = "miter" stroke-miterlimit = "10" stroke-dasharray = "" stroke-dashoffset = "0" font-family = "none"  font-size = "none"  style = "mix-blend-mode: normal">
                                    <g transform = "scale(5.12,5.12)">
                                        <path d = "M25,2c-12.6907,0 -23,10.3093 -23,23c0,12.69071 10.3093,23 23,23c12.69071,0 23,-10.30929 23,-23c0,-12.6907 -10.30929,-23 -23,-23zM25,4c11.60982,0 21,9.39018 21,21c0,11.60982 -9.39018,21 -21,21c-11.60982,0 -21,-9.39018 -21,-21c0,-11.60982 9.39018,-21 21,-21zM25,11c-1.65685,0 -3,1.34315 -3,3c0,1.65685 1.34315,3 3,3c1.65685,0 3,-1.34315 3,-3c0,-1.65685 -1.34315,-3 -3,-3zM21,21v2h1h1v13h-1h-1v2h1h1h4h1h1v-2h-1h-1v-15h-1h-4z"> 
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <p class = "ttl_plant_about_title">
                            About
                        </p>
                    </div>

                    <p class = "ttl_plant_about_content">
                        Pandanus penangensis, also known as the Penang Screw Pine, is a species of plant in the 
                        Pandanaceae family. It is native to Peninsular Malaysia and Singapore, and it is also 
                        found in other parts of Southeast Asia. This plant is known for its unique growth habit, 
                        with a tall, slender trunk that can reach up to 15 meters in height, and long, narrow 
                        leaves that spiral around the trunk, giving it the appearance of a screw. The leaves 
                        are typically green, but can turn a reddish-brown color in certain conditions.</br></br></br>

                        The Penang Screw Pine is a dioecious plant, meaning it has separate male and female 
                        plants. The male flowers are small and inconspicuous, while the female flowers develop 
                        into large, round fruits. These fruits are initially green, but turn a bright orange-red 
                        when ripe. They are composed of numerous wedge-shaped segments, each containing a single 
                        seed. The fruits are not typically eaten, but the leaves of the plant are used in 
                        traditional medicine and for making mats and baskets.</br></br></br>

                        In terms of cultivation, Pandanus penangensis prefers a tropical climate and well-drained 
                        soil. It can tolerate a range of soil types, including sandy, loamy, and clay soils, as 
                        long as they are well-drained. The plant is also tolerant of salt spray and can be grown 
                        in coastal areas. It requires full sun to partial shade and regular watering, but can 
                        tolerate drought once established. The Penang Screw Pine is propagated by seeds or by 
                        cuttings of the trunk. It is a slow-growing plant, but with proper care, it can become 
                        a striking feature in a tropical garden.</br></br>
                    </p>
                </div>
            </div>

            <a href = "#ttl_identify_page" class = "ttl_link-2"></a>
        </div>
    </div>

    <div class = "ttl_modal_container" id = "ttl_image_6">
        <div class = "ttl_modal">
            <p class = "ttl_modal_title">Vatica pauciflora (No common name) <br> <em>Vatica pauciflora</em></p>

            <div class = "ttl_modal_content">
                <div class = "ttl_plant_about_container">
                    <div class = "ttl_plant_about_title_container">
                        <svg xmlns = "http://www.w3.org/2000/svg" x = "0px" y = "0px" viewBox = "0,0,256,256" class = "ttl_plant_about_icon">
                            <g transform = "translate(25.6,25.6) scale(0.8,0.8)">
                                <g fill = "#ffffff" fill-rule = "nonzero" stroke = "none" stroke-width = "1" stroke-linecap = "butt" stroke-linejoin = "miter" stroke-miterlimit = "10" stroke-dasharray = "" stroke-dashoffset = "0" font-family = "none"  font-size = "none"  style = "mix-blend-mode: normal">
                                    <g transform = "scale(5.12,5.12)">
                                        <path d = "M25,2c-12.6907,0 -23,10.3093 -23,23c0,12.69071 10.3093,23 23,23c12.69071,0 23,-10.30929 23,-23c0,-12.6907 -10.30929,-23 -23,-23zM25,4c11.60982,0 21,9.39018 21,21c0,11.60982 -9.39018,21 -21,21c-11.60982,0 -21,-9.39018 -21,-21c0,-11.60982 9.39018,-21 21,-21zM25,11c-1.65685,0 -3,1.34315 -3,3c0,1.65685 1.34315,3 3,3c1.65685,0 3,-1.34315 3,-3c0,-1.65685 -1.34315,-3 -3,-3zM21,21v2h1h1v13h-1h-1v2h1h1h4h1h1v-2h-1h-1v-15h-1h-4z"> 
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <p class = "ttl_plant_about_title">
                            About
                        </p>
                    </div>

                    <p class = "ttl_plant_about_content">
                        Vatica pauciflora, commonly known as the Resak Tembaga, is a species of plant in the Dipterocarpaceae 
                        family. This species is native to Peninsular Malaysia and Singapore. It is a tropical rainforest 
                        tree that can grow up to 40 meters tall. The tree is recognized for its beautiful, straight trunk 
                        that can reach a diameter of up to 1 meter. The bark is smooth and grey, and the leaves are simple, 
                        alternate, and have a leathery texture.</br></br></br>

                        The Vatica pauciflora is a flowering plant, producing small, yellow flowers that are arranged in 
                        panicles. The flowers are hermaphroditic, meaning they have both male and female organs. The 
                        fruit of the Vatica pauciflora is a nut, enclosed in a two-valved capsule. When mature, the 
                        fruit splits open to reveal the nut, which is dispersed by wind. The plant has a slow growth 
                        rate and takes several years to reach maturity and start producing fruit.</br></br></br>

                        Unfortunately, the Vatica pauciflora is currently listed as vulnerable on the IUCN Red List of 
                        Threatened Species. The main threats to this species are habitat loss due to logging and the 
                        conversion of land for agriculture. Efforts are being made to conserve this species, including
                        the establishment of protected areas and the implementation of sustainable forestry practices. 
                        Despite these challenges, the Vatica pauciflora continues to be an important part of the ecosystem, 
                        providing habitat and food for a variety of wildlife.</br></br>
                    </p>
                </div>
            </div>

            <a href = "#ttl_identify_page" class = "ttl_link-2"></a>
        </div>
    </div>


    <footer>
        <div class = "dld_footer_section_1">
            <?php include_once("dld_footer_section_1.php"); ?>

            <div class = "dld_section_1_footer_right">
                <h1 class = "dld_footer_heading">Acknowledgement</h1>
                <div class = "dld_footer_section_1_center_row">
                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Images</h1>
                        <a target = "_blank" href = "https://unsplash.com/" class = "dld_footer_section_1_center_navigation_link_1">Unsplash</a>
                        <a target = "_blank" href = "https://www.inaturalist.org/observations">iNaturalist</a>
                        <p></p>
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Icon</h1>
                        <a target = "_blank" href = "https://www.svgrepo.com/">SVGRepo</a>
                    </div>
                    
                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Map</h1>
                        <a target = "_blank" href = "https://www.google.com/maps">Google Map</a>
                    </div>
                </div>

                <div class = "dld_footer_section_1_center_row">
                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Malaysian Persimmon Information</h1>
                        <a target = "_blank" href = "https://www.monaconatureencyclopedia.com/diospyros-maritima/?lang=en">Monaca Nature Encyclopedia</a>
                        <a target = "_blank" href = "https://www.picturethisai.com/wiki/Diospyros_virginiana.html">PictureThis</a>
                        <a target = "_blank" href = "https://hort.ifas.ufl.edu/database/documents/pdf/tree_fact_sheets/diovira.pdf">University of Florida</a>
                        <p></p>
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Chinaberry Information</h1>
                        <a target = "_blank" href = "https://www.picturethisai.com/wiki/Melia_azedarach.html">PictureThis</a>
                        <a target = "_blank" href = "https://hort.ifas.ufl.edu/database/documents/pdf/tree_fact_sheets/melazea.pdf">University of Florida</a>
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Video</h1>
                        <a target = "_blank" href = "https://www.youtube.com/">YouTube</a>
                    </div>
                </div>

                <div class = "dld_footer_section_1_center_row">
                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Cocoplum Information</h1>
                        <a target = "_blank" href = "https://www.picturethisai.com/wiki/Chrysobalanus_icaco.html">PictureThis</a>
                        <a target = "_blank" href = "https://edis.ifas.ufl.edu/publication/EP553">University of Florida</a>
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Gumbo-limbo Information</h1>
                        <a target = "_blank" href = "https://www.picturethisai.com/wiki/Chrysobalanus_icaco.html">PictureThis</a>
                        <a target = "_blank" href = "https://edis.ifas.ufl.edu/publication/EP553">University of Florida</a>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once("dld_footer_section_2.php"); ?>
    </footer>
</body>
</html>
