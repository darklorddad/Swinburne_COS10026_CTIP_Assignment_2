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
        <div class = "ttl_center">
            <div class = "ttl_bar">
                <p class = "ttl_upload_title">Flora Recognition</p>
                <p class = "ttl_upload_description">At least a photo of leaf, flower, fruit or bark is required for identification to work.</p>
            </div>

            <?php
                $targetDir = "store_user_uploads/"; 

                if (!file_exists($targetDir)) {
                    mkdir($targetDir, 0777, true); 
                }
                
                $defaultImage = 'styles/images/ttl/ttl_upload_icon.svg';
                $uploadedImage = '';

               
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['upload_file'])) {
                    
                    $allowedFileTypes = array("image/png", "image/jpg", "image/jpeg");

                    if (!in_array($_FILES["fileToUpload"]["type"], $allowedFileTypes)) {
                        echo "<p class='ttl_upload_img_error_message'>Invalid file type. Please upload a PNG, JPG, or JPEG file.</p>";
                    } else {
                    
                        $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                            $uploadedImage = $targetFile;

                            $uploadedFilename = basename($targetFile);
                        } else {
                            echo "<p class='ttl_upload_img_error_message'>Sorry, there was an error uploading your file.</p>";
                        }
                    }
                }
            ?>


            
            <form id="uploadForm" action="identify.php" method="post" enctype="multipart/form-data">
                <div class = "ttl_dropzone">
                    <div class = "ttl_filecontent">
                        <?php
                            echo '<img src="' . ($uploadedImage ? $uploadedImage : $defaultImage) . '" alt="Uploaded Image" class="ttl_uploaded_image">';
                        ?>

                        <input type = "file" class = "fileToUpload" name = "fileToUpload">
                        
                    </div>
                </div>

                <input type = "submit" class = "ttl_upload-btn" value = "Upload Image" name = "upload_file">
            </form>

            <div class = "ttl_identify_button_container">
                <button class = "ttl_identify_button">Identify
                    <span class = "ttl-star-1">
                    <svg xmlns:xlink = "http://www.w3.org/1999/xlink" viewBox = "0 0 784.11 815.53" style = "shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version = "1.1" xml:space = "preserve" xmlns = "http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d = "M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class = "fil0"></path></g></svg>
                    </span>
                    <span class = "ttl-star-2">
                    <svg xmlns:xlink = "http://www.w3.org/1999/xlink" viewBox = "0 0 784.11 815.53" style = "shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version = "1.1" xml:space = "preserve" xmlns = "http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d = "M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class = "fil0"></path></g></svg>
                    </span>
                    <span class = "ttl-star-3">
                    <svg xmlns:xlink = "http://www.w3.org/1999/xlink" viewBox = "0 0 784.11 815.53" style = "shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version = "1.1" xml:space = "preserve" xmlns = "http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d = "M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class = "fil0"></path></g></svg>
                    </span>
                    <span class = "ttl-star-4">
                    <svg xmlns:xlink = "http://www.w3.org/1999/xlink" viewBox = "0 0 784.11 815.53" style = "shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version = "1.1" xml:space = "preserve" xmlns = "http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d = "M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class = "fil0"></path></g></svg>
                    </span>
                    <span class = "ttl-star-5">
                    <svg xmlns:xlink = "http://www.w3.org/1999/xlink" viewBox = "0 0 784.11 815.53" style = "shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version = "1.1" xml:space = "preserve" xmlns = "http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d = "M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class = "fil0"></path></g></svg>
                    </span>
                    <span class = "ttl-star-6">
                    <svg xmlns:xlink = "http://www.w3.org/1999/xlink" viewBox = "0 0 784.11 815.53" style = "shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version = "1.1" xml:space = "preserve" xmlns = "http://www.w3.org/2000/svg"><defs></defs><g ><metadata></metadata><path d = "M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class = "fil0"></path></g></svg>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <section class = "ttl_result">

        <h1 class = "ttl_result_title">Identification Summary</h1>

        <div class = "ttl_result_container">

            <div class = "ttl_plant_card">
                <img src = "styles/images/ttl/ttl_chinaberry.jpg" alt = "chinaberry">

                <div class = "ttl_plant_name">
                    <p class = "ttl_plant_common_name">Chinaberry</p>
                    <p class = "ttl_plant_scientific_name">Melia azedarach</p>
                </div>

                <div class = "ttl_plant_modal_box">
                    <a href = "#ttl_chinaberry_info" class = "ttl_link-1" id = "ttl_identify_page">Delve Deeper</a>
                </div>
            </div>

            <div class = "ttl_plant_card">
                <img src = "styles/images/ttl/ttl_persimmon.png" alt = "Common Persimmon" class = "ttl_plant_img">

                <div class = "ttl_plant_name">
                    <p class = "ttl_plant_common_name">Malaysian Persimmon</p>
                    <p class = "ttl_plant_scientific_name">Diospyros maritima</p>
                </div>

                <div class = "ttl_plant_modal_box">
                    <a href = "#ttl_persimmon_info" class = "ttl_link-1" >Delve Deeper</a>
                </div>
            </div>

            <div class = "ttl_plant_card">
                <img src = "styles/images/ttl/ttl_cocoplum.png" alt = "Cocoplum" class = "ttl_plant_img">

                <div class = "ttl_plant_name">
                    <p class = "ttl_plant_common_name">Cocoplum</p>
                    <p class = "ttl_plant_scientific_name">Chrysobalanus icaco</p>
                </div>

                <div class = "ttl_plant_modal_box">
                    <a href = "#ttl_cocoplum_info" class = "ttl_link-1" >Delve Deeper</a>
                </div>
            </div>

            <div class = "ttl_plant_card">
                <img src = "styles/images/ttl/ttl_gumbo_limbo.png" alt = "Gumbo-limbo" class = "ttl_plant_img">

                <div class = "ttl_plant_name">
                    <p class = "ttl_plant_common_name">Gumbo-limbo</p>
                    <p class = "ttl_plant_scientific_name">Bursera simaruba</p>
                </div>

                <div class = "ttl_plant_modal_box">
                    <a href = "#ttl_gumbo_limbo_info" class = "ttl_link-1" >Delve Deeper</a>
                </div>
            </div>
        </div>
    </section>

    <div class = "ttl_modal_container" id = "ttl_chinaberry_info">
        <div class = "ttl_modal">
            <p class = "ttl_modal_title">Chinaberry <br> <em>Melia azedarach</em></p>
            <div class = "ttl_modal_content">
                
                <div class = "ttl_plant_img_gallery_container">
                    <div class = "ttl_plant_gallery">
                        <img src = "styles/images/ttl/ttl_chinaberry.jpg" alt = "Chinaberry flower">
                        <img src = "styles/images/ttl/ttl_chinaberry2.jpg" alt = "Chinaberry fruit">
                        <img src = "styles/images/ttl/ttl_chinaberry3.jpeg" alt = "Chinaberry tree">
                        <img src = "styles/images/ttl/ttl_chinaberry4.png" alt = "Chinaberry flower">
                    </div>
                </div>

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

                    <!--Info from PictureThis-->
                    <p class = "ttl_plant_about_content">
                        Also known as: <em>Persian lilac</em>, <em>Cape lilac</em> <br> <br>
                        The chinaberry tree is considered an invasive species in many areas because of its tendency 
                        to grow into impassable thickets and crowd out other plants. The entire chinaberry tree is 
                        poisonous to humans and many other animals, although cows and some birds have no problems eating the fruit.
                    </p>

                    <div class = "ttl_youtube_video_container">
                        <iframe class = "ttl_youtube_video" src = "https://www.youtube.com/embed/IDoDT3Jr2F0?si=Rf9DxvXbXBesydWt" title = "YouTube video player"  allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>

                <div class = "ttl_plant_care_container">

                    <div class = "ttl_plant_care_title_container">

                        <svg viewBox = "-2.4 -2.4 28.80 28.80" fill = "none" xmlns = "http://www.w3.org/2000/svg" stroke = "#ffffff" class = "ttl_plant_care_icon"><g stroke-width = "0"></g><g stroke-linecap = "round" stroke-linejoin = "round"></g><g id = "SVGRepo_iconCarrier"> <path d = "M22 4.67019V16.7402C22 17.7002 21.22 18.6002 20.26 18.7202L19.93 18.7602C17.75 19.0502 14.39 20.1602 12.47 21.2202C12.21 21.3702 11.78 21.3702 11.51 21.2202L11.47 21.2002C9.54997 20.1502 6.20003 19.0502 4.03003 18.7602L3.73999 18.7202C2.77999 18.6002 2 17.7002 2 16.7402V4.66018C2 3.47018 2.96997 2.57019 4.15997 2.67019C6.25997 2.84019 9.43997 3.90022 11.22 5.01022L11.47 5.16018C11.76 5.34018 12.24 5.34018 12.53 5.16018L12.7 5.05019C13.33 4.66019 14.13 4.27019 15 3.92019C16.31 3.40019 17.77 2.98024 19 2.78024C19.27 2.73024 19.53 2.7002 19.77 2.6802H19.83C21.02 2.5802 22 3.47019 22 4.67019Z" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> <path opacity = "0.4" d = "M12 5.49023V20.4902" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> <path opacity = "0.4" d = "M19 2.78027V8.00024L17 6.67023L15 8.00024V3.92023C16.31 3.40023 17.77 2.98027 19 2.78027Z" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> </g></svg>

                        <p class = "ttl_plant_care_title">
                            Cultivation Advice 
                        </p> 
                    </div>

                </div>

                <div class = "ttl_plant_care_card_container">
                    <!--Info from PictureThis-->
                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg viewBox = "-12.8 -12.8 89.60 89.60" xmlns = "http://www.w3.org/2000/svg" fill = "#000000" class = "ttl_water_icon"><g  stroke-width = "0"></g><g stroke-linecap = "round" stroke-linejoin = "round"></g><g > <g fill = "none" fill-rule = "evenodd"> <path fill = "#B4DFFB" d = "M26.6995662,63 C36.4747667,63 44.3991324,55.0756343 44.3991324,45.3004338 C44.3991324,35.5252333 26.6995662,9 26.6995662,9 C26.6995662,9 9,35.5252333 9,45.3004338 C9,55.0756343 16.9243657,63 26.6995662,63 Z"></path> <path fill = "#4796E7" d = "M41.1107898,41 C48.351679,41 54.2215796,35.1300995 54.2215796,27.8892102 C54.2215796,20.648321 41.1107898,1 41.1107898,1 C41.1107898,1 28,20.648321 28,27.8892102 C28,35.1300995 33.8699005,41 41.1107898,41 Z"></path> <path stroke = "#B4DFFB" stroke-linecap = "round" stroke-width = "2" d = "M32,28 C32,32.9705627 36.0294373,37 41,37 L41,37"></path> <path stroke = "#FFF" stroke-linecap = "round" stroke-width = "2" d = "M13,46 C13,52.627417 18.372583,58 25,58 L25,58"></path> </g> </g></svg>
                            <p class = "ttl_plant_care_card_title">Water</p>
                            <p class = "ttl_plant_care_card_text">Every 1 -2 weeks</p>
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                The chinaberry tree prefers a balance between dryness and wetness, requiring moderate watering. 
                                Originally thriving in riparian habitats, its roots can tolerate some level of moisture. 
                                Seasonal adjustments are unnecessary, and even moisture distribution is ideal for healthy growth.
                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg viewBox = "-6.4 -6.4 76.80 76.80" xmlns = "http://www.w3.org/2000/svg" xmlns:xlink = "http://www.w3.org/1999/xlink" aria-hidden = "true" role = "img" class = "ttl_sun_icon" preserveAspectRatio = "xMidYMid meet" fill = "#000000"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g> <g fill = "#ffe62e"> <path d = "M20.5 59.7l7-7.2c-2.5-.5-4.8-1.5-6.9-2.9l-.1 10.1"> </path> <path d = "M43.5 4.3l-7 7.2c2.5.5 4.8 1.5 6.9 2.9l.1-10.1"> </path> <path d = "M4.3 43.5l10.1-.1C13 41.3 12 39 11.5 36.5l-7.2 7"> </path> <path d = "M59.7 20.5l-10.1.1c1.3 2.1 2.3 4.4 2.9 6.9l7.2-7"> </path> <path d = "M4.3 20.5l7.2 7c.5-2.5 1.5-4.8 2.9-6.9l-10.1-.1"> </path> <path d = "M59.7 43.5l-7.2-7c-.5 2.5-1.5 4.8-2.9 6.9l10.1.1"> </path> <path d = "M20.5 4.3l.1 10.1c2.1-1.3 4.4-2.3 6.9-2.9l-7-7.2"> </path> <path d = "M43.5 59.7l-.1-10.1C41.3 51 39 52 36.5 52.5l7 7.2"> </path> </g> <g fill = "#ffce31"> <path d = "M14.8 44l-4 9.3l9.3-4C18 47.8 16.2 46 14.8 44"> </path> <path d = "M49.2 20l4-9.3l-9.2 4c2 1.5 3.8 3.3 5.2 5.3"> </path> <path d = "M11.4 28.3L2 32l9.4 3.7c-.3-1.2-.4-2.4-.4-3.7s.1-2.5.4-3.7"> </path> <path d = "M52.6 35.7L62 32l-9.4-3.7c.2 1.2.4 2.5.4 3.7c0 1.3-.1 2.5-.4 3.7"> </path> <path d = "M20 14.8l-9.3-4l4 9.3c1.5-2.1 3.3-3.9 5.3-5.3"> </path> <path d = "M44 49.2l9.3 4l-4-9.3C47.8 46 46 47.8 44 49.2"> </path> <path d = "M35.7 11.4L32 2l-3.7 9.4c1.2-.2 2.5-.4 3.7-.4s2.5.1 3.7.4"> </path> <path d = "M28.3 52.6L32 62l3.7-9.4c-1.2.3-2.4.4-3.7.4s-2.5-.1-3.7-.4"> </path> <circle cx = "32" cy = "32" r = "19"> </circle> </g> </g></svg>
                            <p class = "ttl_plant_care_card_title">Lighting</p>
                            <p class = "ttl_plant_care_card_text">Full sun</p>
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                The chinaberry tree thrives under a generous amount of sunlight exposure, yet can endure conditions of lesser light. 
                                Originating from habitats where solar exposure is plentiful, it can withstand a gradient of light thresholds without hampering its growth. 
                                An imbalance in light could potentially affect its vitality and overall health.
                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg version = "1.1" xmlns = "http://www.w3.org/2000/svg" xmlns:xlink = "http://www.w3.org/1999/xlink" viewBox = "-51.2 -51.2 614.40 614.40" xml:space = "preserve" fill = "#000000" class = "ttl_pruning_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g> <path style = "fill:#BAC6CC;" d = "M316.786,272.605c0,0,90.58-102.332,39.097-192.453c0,0-80.455,28.352-101.809,106.301"></path> <path style = "fill:#CFDCE5;" d = "M355.87,80.168c-0.412,1.515-26.839,97.083-84.178,130.489l-17.618-24.21 C275.255,109.105,354.634,80.606,355.87,80.168z"></path> <path style = "fill:#FF6F52;" d = "M322.845,266.547l150.99,156.349c18.267,18.915,18.853,48.717,1.344,68.336l0,0 c-19.447,21.79-53.314,22.457-73.604,1.448L199.482,283.416"></path> <path style = "fill:#E25749;" d = "M437.927,492.678L235.835,283.415l91.251-12.477l-4.241-4.391l-123.362,16.868l202.092,209.263 c14.562,15.079,36.119,18.99,54.319,11.941C449.322,502.076,443.169,498.107,437.927,492.678z"></path> <path style = "fill:#FF6F52;" d = "M252.596,335.163v0.012l-1.49,1.696l-23.01,26.149L112,494.939 c-17.364,19.751-47.027,22.756-68.014,6.907c-17.97-13.62-24.113-36.836-17.073-56.805c2.084-5.877,5.295-11.475,9.682-16.455 l121.632-138.244l22.865-25.979L252.596,335.163z"></path> <path style = "fill:#E25749;" d = "M80.342,501.845c-17.97-13.62-24.113-36.836-17.073-56.805c2.084-5.877,5.295-11.475,9.682-16.455 L194.582,290.34l5.936-6.744l-19.426-19.235l-22.865,25.979L36.595,428.585c-4.386,4.98-7.597,10.578-9.682,16.455 c-7.04,19.969-0.897,43.185,17.073,56.805c14.337,10.828,32.721,12.849,48.469,6.752C88.217,506.951,84.136,504.712,80.342,501.845z "></path> <path style = "fill:#CFDCE5;" d = "M260.132,180.395c-7.62-18.025-11.844-37.836-11.844-58.636c0-48.647,23.056-91.902,58.83-119.458 c-47.24-8.331-97.688,5.957-133.913,42.883c-57.366,58.479-57.189,153.145,0.384,211.419l80.309,83.159l68.947-73.214 C322.845,266.547,274.251,207.422,260.132,180.395z"></path> <path style = "fill:#E25749;" d = "M252.596,335.163v0.012l-1.49,1.696l-23.01,26.149l-62.985-65.214 c-2.399-2.423-4.689-4.92-6.883-7.464l22.865-25.979L252.596,335.163z"></path> <circle style = "fill:#314A5F;" cx = "251.08" cy = "262.445" r = "19.484"></circle> </g></svg>
                            <p class = "ttl_plant_care_card_title">Pruning</p>
                            
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                Despite having a relatively fast habit of growth, Chinaberry tree does not require very much pruning. 
                                It is not necessary to routinely prune this tree, however, it does require some pruning every once in a while. 
                                Pruning can be done to tidy this tree up and remove any diseased or damaged foliage. Chinaberry tree can be pruned for shaping.
                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <img src = "styles/images/ttl/ttl_fertilizer.png" alt = "fertilizer icon" class = "ttl_fertilizer_icon">
                            <p class = "ttl_plant_care_card_title">Fertilizer</p>
                            
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                Most of the time, your chinaberry tree won't need any supplemental nutrients. 
                                However, if you notice yellowing leaves or browning tips, then it's likely your soil is extremely nutrient poor. 
                                In that case, give your tree a nitrogen- or phosphorous-heavy fertilizer (depending on the symptoms) in the spring.
                            </p>
                        </div>
                    </div>

                </div>

                <div class = "ttl_plant_environment_container">
                    <div class = "ttl_plant_environment_title_container">

                        <svg viewBox = "-3 -3 21.00 21.00" fill = "none" xmlns = "http://www.w3.org/2000/svg" stroke = "#ffffff" class = "ttl_plant_environment_icon"><g stroke-width = "0"></g><g stroke-linecap = "round" stroke-linejoin = "round"></g><g> <path d = "M7.5 15V7M7.5 7.5V10.5M7.5 7.5C7.5 5.29086 5.70914 3.5 3.5 3.5H0.5V6.5C0.5 8.70914 2.29086 10.5 4.5 10.5H7.5M7.5 7.5H10.5C12.7091 7.5 14.5 5.70914 14.5 3.5V0.5H11.5C9.29086 0.5 7.5 2.29086 7.5 4.5V7.5ZM7.5 7.5L11.5 3.5M7.5 10.5L3.5 6.5" stroke = "#ffffff"></path> </g></svg>

                        <p class = "ttl_plant_environment_title">
                            Right Environment For Plant
                        </p>
                    </div>

                    <div class = "ttl_plant_environment_content">
                        <!--Info from University of Florida (https://hort.ifas.ufl.edu/database/documents/pdf/tree_fact_sheets/melazea.pdf)-->
                        <table class = "ttl_plant_environment_table">

                            <tr>
                                <th>Light Requirement</th>
                                <td>Tree grows in part shade/part sun; tree grows in full sun</td>
                            </tr>

                            <tr>
                                <th>Soil Tolerance</th>
                                <td>Clay; loam; sand; acidic; alkaline; well-drained</td>
                            </tr>

                            <tr>
                                <th>Drought Tolerance</th>
                                <td>High</td>
                            </tr>

                            <tr>
                                <th>Aerosol Salt Tolerance</th>
                                <td>Moderate</td>
                            </tr>

                        </table>

                    </div>

                </div>

                <div class = "ttl_plant_location_container">
                    <div class = "ttl_plant_location_title_container">

                        <svg fill = "#ffffff" viewBox = "-3.2 -3.2 38.40 38.40" version = "1.1" xmlns = "http://www.w3.org/2000/svg" class = "ttl_globe_icon"><g stroke-width = "0"></g><g stroke-linecap = "round" stroke-linejoin = "round"></g><g > <path d = "M19.063 8.094c2.063 2.063 3.344 4.875 3.344 7.906 0 3.063-1.281 5.813-3.344 7.875s-4.844 3.313-7.875 3.313c-3.063 0-5.813-1.25-7.875-3.313s-3.313-4.813-3.313-7.875c0-3.031 1.25-5.844 3.313-7.906s4.813-3.313 7.875-3.313c3.031 0 5.813 1.25 7.875 3.313zM12.469 22.313h0.063c0.094 0 0.188 0.031 0.25 0.125 0.063 0.063 0.125 0.125 0.25 0.125 0.031 0 0.063-0.031 0.063-0.094 0-0.125 0.031-0.25 0.031-0.281 0.031-0.094 0.094-0.094 0.156-0.094 0.031 0 0.031 0 0.031-0.063l-0.063-0.063c-0.031 0-0.063 0.031-0.063 0.063-0.031 0.031-0.063 0.063-0.094 0l-0.188 0.125-0.219-0.063-0.375-0.563 0.125-0.813c0-0.031-0.031-0.094-0.125-0.125s-0.094-0.094-0.063-0.125c-0.125-0.063-0.281-0.125-0.469-0.125-0.031 0-0.125 0.031-0.281 0.063-0.156 0-0.25 0-0.25-0.063 0-0.094 0.094-0.281 0.156-0.5 0.031-0.094 0.063-0.25 0.094-0.313 0-0.063 0.031-0.125 0.031-0.125l0.156-0.375-0.031-0.063-0.219-0.031c-0.063 0-0.281 0.125-0.438 0.25-0.156 0.188-0.281 0.344-0.281 0.469l-0.625 0.125c-0.125 0-0.25-0.031-0.344-0.156-0.031-0.156-0.125-0.344-0.25-0.531-0.125-0.156-0.156-0.313-0.156-0.469 0-0.188 0.031-0.438 0.094-0.594 0.063-0.188 0.063-0.406-0.063-0.594 0.031 0 0.125-0.063 0.063-0.125l0.156-0.188 0.031-0.031 0.031 0.031c0.125-0.094 0.344-0.125 0.531-0.094 0.219 0.031 0.344-0.063 0.406-0.219l0.219 0.219c0.063 0.031 0.188-0.188 0.188-0.25l-0.094-0.063 0.563-0.125 0.031 0.063h0.25l0.313 0.188c0.031 0 0.063-0.031 0.094-0.063 0.063-0.063 0.094-0.063 0.125-0.031l0.281 0.313c-0.031 0.063-0.031 0.125-0.031 0.188 0.031 0.031 0.063 0.063 0.063 0.094 0 0.125 0.281 0.688 0.438 0.688 0.094 0 0.125-0.063 0.094-0.188v-0.25c0-0.156-0.031-0.344-0.094-0.531-0.094-0.156-0.156-0.375-0.219-0.563v-0.063c0-0.094 0.063-0.188 0.188-0.25 0.094-0.063 0.156-0.125 0.156-0.125 0.094-0.063 0.188-0.156 0.313-0.219 0.094-0.063 0.188-0.219 0.25-0.313l0.094-0.219v-0.125h0.094s0.063-0.031 0.063-0.094c0 0-0.031-0.031-0.063-0.031-0.031-0.031-0.125-0.094-0.188-0.156l0.063-0.063c0.094-0.094 0.125-0.313 0.063-0.406l0.25-0.125c-0.063 0.125 0.125 0.156 0.188 0.125l0.125-0.281c-0.063-0.156-0.094 0 0-0.188 0.094-0.031 0.188-0.063 0.281-0.125 0.094-0.031 0.156-0.063 0.25-0.063 0.031 0 0.063 0.031 0.063 0.031 0.063 0 0.094-0.031 0.094-0.031 0-0.094-0.031-0.156-0.063-0.156l0.156-0.344c0.125 0 0.25-0.063 0.313-0.188l0.25-0.031c0.063 0 0.094-0.031 0.094-0.094v-0.063l0.469-0.125 0.063-0.156-0.125-0.188s0.031-0.031 0.031-0.063-0.031-0.063-0.063-0.094c-0.031 0-0.063-0.031-0.094-0.031-0.031-0.031-0.063-0.063-0.094-0.063h0.25s0.125-0.031 0.125-0.125c0-0.125-0.063-0.156-0.188-0.156-0.344 0-0.875 0.125-1.063 0.5l-0.188 0.094 0.25-0.25 0.031-0.063c0-0.031-0.031-0.063-0.094-0.094h-0.094c0.313 0 0.5-0.094 0.625-0.188 0.094-0.094 0.188-0.188 0.406-0.25 0.219 0.031 0.438 0.031 0.656 0.031 0.188-0.031 0.375-0.031 0.594-0.031 0.094-0.063 0.219-0.188 0.281-0.313l0.313-0.031c0.063 0.063 0.281-0.094 0.281-0.188s-0.031-0.125-0.125-0.156-0.188-0.094-0.188-0.188v-0.094c0.031-0.031 0-0.063-0.031-0.063-0.125 0-0.438 0.156-0.531 0.219-0.063 0.063-0.094-0.031-0.094-0.094l0.031 0.031 0.125-0.063 0.313-0.125 0.031-0.031c0-0.125-0.188-0.156-0.25-0.156-0.031 0-0.094 0.031-0.156 0.063-0.063 0-0.125 0-0.125-0.063l0.031-0.063c-0.219-0.156-0.406-0.469-0.406-0.563v-0.125c0.031-0.031 0-0.031-0.063-0.031h-0.094c-0.031 0.031-0.063 0-0.063-0.063s-0.125-0.406-0.281-0.406l-0.094 0.094c0 0.063-0.031 0.094-0.094 0.125s-0.094 0.063-0.094 0.094h-0.031l-0.313 0.188c0-0.063-0.031-0.063-0.063-0.031-0.031 0-0.031 0.031-0.094 0.031h-0.063c0.156 0 0.125-0.219 0-0.219l-0.25 0.031c-0.063 0-0.063 0 0-0.063 0.031-0.063 0.094-0.125 0.031-0.188 0-0.063-0.031-0.063-0.063-0.031l0.063-0.094c0.063-0.031-0.031-0.156-0.094-0.219l-0.281-0.031-0.188-0.188c-0.031 0.031-0.063 0-0.125-0.031-0.031-0.031-0.094-0.094-0.125-0.094l-0.219 0.094-0.563-0.125c-0.063 0-0.156 0.031-0.156 0.125 0 0.031 0 0.063 0.031 0.063 0.063 0.031 0.063 0.063 0.063 0.094s0.031 0.156 0.063 0.313c0 0.156 0 0.219-0.094 0.188l-0.125 0.188c0 0.063 0.063 0.094 0.094 0.094 0.094 0.063 0.188 0.156 0.25 0.25 0.063 0.063 0.063 0.156 0.031 0.25l-0.594 0.469v0.031c0 0.094 0 0.156 0.031 0.219 0.063 0.063 0.063 0.156 0.125 0.25 0.156 0.063 0.156 0.125 0.031 0.188-0.063 0-0.125 0.031-0.188 0.063l-0.063 0.063c0 0.031-0.031 0.031-0.063 0.031h-0.156s0-0.031 0.031-0.031c0 0 0.031-0.031 0.031-0.063l-0.281-0.156-0.125-0.219c0.031-0.094 0.031-0.156 0-0.188s-0.031-0.094-0.031-0.156-0.063-0.219-0.188-0.219c-0.156 0-0.281 0.031-0.438 0.063 0.063-0.031-0.063-0.188-0.094-0.188-0.156 0-0.344-0.063-0.563-0.188s-0.375-0.188-0.5-0.188c-0.094 0-0.281 0.031-0.406 0.094 0.063-0.031 0.063-0.063 0.094-0.156l-0.188-0.313-0.031-0.031c-0.063 0-0.125 0.031-0.188 0.094-0.063 0.031-0.156 0-0.156-0.125 0-0.031 0.031-0.063 0.031-0.063 0.031-0.031 0.031-0.031 0-0.063 0-0.094 0.031-0.188 0.125-0.281 0.063-0.063 0.094-0.188 0.125-0.281 0.063-0.031 0.063-0.063 0.063-0.094 0-0.063 0.031-0.063 0.063-0.063 0.063 0 0.156-0.031 0.219-0.063 0.063-0.063 0.125-0.094 0.219-0.094l0.031-0.094c0-0.031-0.094-0.063-0.281-0.094-0.219-0.031-0.313-0.031-0.313-0.094l0.031-0.031c0.188 0.063 0.344 0.094 0.438 0.094 0.188 0.031 0.281-0.031 0.469-0.125 0.063-0.031 0.25-0.094 0.406-0.188 0-0.031-0.031-0.031-0.125-0.063h0.125l0.219-0.125v-0.125l-0.063-0.063 0.313-0.063c-0.031-0.063 0.031-0.094 0.063-0.094 0.063 0 0.125 0.031 0.188 0.094s0.094 0.063 0.125 0.063l0.281-0.094c0-0.031 0.031-0.031 0.094-0.031 0.063-0.031 0.094-0.063 0.063-0.094l-0.219-0.219c-0.063 0-0.094-0.094-0.031-0.094 0.094 0 0.156-0.031 0.094-0.125-0.063-0.031-0.156-0.094-0.25-0.125-0.094-0.063-0.188-0.094-0.281-0.094-0.063 0-0.188 0.031-0.188 0.125 0 0.063 0.031 0.063 0.063 0.063 0.063 0 0.094 0.031 0.094 0.063 0.063 0.031 0.031 0.063-0.031 0.063h-0.063c-0.063 0-0.156 0.063-0.219 0.188-0.063 0.094-0.156 0.188-0.25 0.219-0.031 0-0.031 0-0.031-0.031 0.031-0.031 0-0.031 0-0.063-0.031-0.031-0.063-0.063-0.094-0.063-0.063-0.031-0.125-0.031-0.125-0.063 0-0.063 0.063-0.094 0.125-0.188 0.031-0.094-0.063-0.125-0.219-0.125-0.063 0-0.125 0.031-0.156 0.094-0.031 0.031-0.063 0.094-0.094 0.156l-0.313-0.344-0.25-0.031c0-0.063 0.031-0.125 0.063-0.188 0.063-0.125-0.188-0.281-0.281-0.375-0.031 0-0.094-0.031-0.156-0.031-0.031 0-0.219 0.156-0.344 0.219-0.063 0.031-0.094 0.063-0.094 0.094 0 0.063 0.063 0.063 0.156 0.063h-0.031c-0.063 0-0.094 0.031-0.094 0.125 0 0.031 0.25 0.094 0.313 0.094s0.125 0 0.125 0.031c0.031 0.031 0.031 0.031 0.094 0.031l0.094-0.031v0.063s-0.031 0.063-0.031 0.063l0.031 0.094-0.313 0.156-0.031 0.031c-0.031 0-0.063 0-0.063 0.031s0 0.094 0.063 0.156c0.031 0.063 0 0.094-0.156 0.094l-0.094-0.063c0-0.063-0.063-0.125-0.219-0.188-0.281-0.094-0.781-0.125-1.219-0.125-0.219-0.031-0.375-0.031-0.5-0.031l-0.469 0.156 0.125 0.25c-0.031 0-0.094 0.031-0.094 0.031-0.125-0.094-0.313-0.281-0.375-0.281l-0.219-0.031c-0.688 0.031-1.5 0.688-2.281 1.469s-1.469 1.656-1.813 2.188h0.063c0.063 0 0.094-0.031 0.188-0.063 0.063-0.031 0.094 0.031 0.094 0.125 0 0.063 0 0.094-0.031 0.156s0.031 0.094 0.156 0.094c0.031 0 0.063-0.031 0.063-0.094 0.031-0.063 0.031-0.063 0.031 0l0.063 0.219v0.031c0 0.031-0.031 0.063-0.063 0.094-0.094 0.031 0 0.125 0.094 0.125h0.156l0.063-0.031 0.031-0.031c0 0.125 0.125 0.156 0.219 0.156h0.031s-0.031 0.063-0.063 0.094c-0.063 0-0.063 0.031 0 0.063l0.313 0.063v0.031l0.188 0.406c0 0.063-0.063 0.219-0.125 0.219s-0.063-0.031-0.063-0.063c0.031 0 0.031-0.031 0.031-0.094 0-0.031-0.031-0.063-0.031-0.094-0.031-0.031-0.094-0.031-0.219-0.031-0.031 0-0.125 0-0.063 0.094l0.156 0.344 0.063 0.063c-0.188 0-0.219 0.625-0.219 0.813l0.031 0.25 0.031 0.094v0.031l-0.031 0.281 0.375 0.625h0.094c0 0.031 0 0.063-0.031 0.094s-0.031 0.063-0.031 0.125l0.125 0.094c0 0.188 0.063 0.219 0.219 0.375 0 0.094 0.125 0.219 0.313 0.344 0.219 0.094 0.344 0.156 0.406 0.188 0.125 0.438 0.344 0.906 0.656 1.188l0.031 0.188-0.063 0.063c-0.063 0-0.063 0.031-0.031 0.063l0.25 0.125c0.063-0.063 0.094 0 0.156 0.094 0.063 0.125 0.094 0.188 0.125 0.219v0.094l0.156 0.219 0.063 0.063 0.063-0.156c-0.063-0.156-0.281-0.5-0.469-0.781-0.094-0.156-0.188-0.313-0.281-0.438-0.063-0.094-0.094-0.156-0.094-0.188s-0.031-0.375-0.063-0.438c0.031 0.031 0.125 0.063 0.188 0.094 0.094 0.031 0.188 0.063 0.25 0.094 0.031 0.25 0.125 0.438 0.281 0.594 0.125 0.125 0.25 0.281 0.344 0.469-0.063 0.063 0.063 0.063 0.125 0.063 0.031 0.063 0.031 0.094 0.031 0.219 0.281 0.281 0.844 0.938 0.844 1.219v0.031l-0.063 0.188c0.125 0.281 0.406 0.5 0.688 0.594h0.063c0.156 0.094 0.375 0.188 0.594 0.281 0.188 0.125 0.375 0.219 0.563 0.281l0.313-0.188c0.156 0.031 0.344 0.188 0.563 0.375s0.5 0.406 0.875 0.469c0.125-0.094 0.188-0.063 0.188 0.063v0.063l0.344 0.406 0.063 0.188c0.188 0.125 0.406 0.313 0.5 0.531zM8.438 6.594l-0.031-0.063c-0.063-0.031-0.219-0.094-0.281-0.094-0.031 0-0.094 0.031-0.219 0.063-0.219 0.125-0.563 0.219-0.813 0.344-0.125 0.063-0.219 0.094-0.281 0.094 0.125 0 0.25-0.031 0.375-0.094 0.094-0.063 0.219-0.094 0.344-0.094l0.094 0.063c0.063 0.031 0.094 0.031 0.156 0.031 0.031 0 0.063 0 0.125 0.063 0.063-0.031 0.125-0.031 0.219 0.031l0.094-0.063v-0.125l-0.031-0.063 0.063 0.031c0.063 0 0.125-0.031 0.188-0.125zM13.156 24.906l0.031 0.188c0 0.063-0.031 0.063-0.063 0.125-0.094 0.063-0.25 0.156-0.25 0.344 0 0.031 0.031 0.063 0.031 0.125 0.031 0.031 0.063 0.063 0.063 0.125 0 0.031-0.031 0.063-0.031 0.094 2.156-0.375 4.094-1.406 5.594-3h-0.031c-0.063 0.031-0.156 0.031-0.188 0l-0.094 0.031-0.156-0.031h-0.094c-0.063-0.094-0.125-0.156-0.219-0.219l-0.031-0.031c-0.031 0-0.063 0-0.063 0.063 0-0.281-0.219-0.531-0.469-0.531 0 0.031-0.031 0.031-0.031 0.031h-0.063l-0.063-0.031h0.094l0.063-0.188-0.156-0.094-0.031 0.031c-0.125-0.031-0.219-0.094-0.281-0.219l-0.094-0.031v0.031l-0.063 0.031c-0.125 0.031-0.219 0.063-0.281 0.094-0.125-0.031-0.219-0.094-0.25-0.125l-0.375 0.031c0-0.125-0.063-0.281-0.219-0.281-0.188 0-0.438 0-0.5 0.219 0 0.063 0.031 0.156 0.063 0.188v0.125l-0.031 0.063-0.031 0.031h-0.031l-0.094-0.219 0.094-0.125c-0.031-0.063-0.031-0.094-0.031-0.156s-0.031-0.094-0.031-0.156l-0.031-0.031h-0.094l-0.188 0.125h-0.125l-0.031 0.063c-0.031 0-0.031 0.031-0.031 0.063 0 0-0.031 0-0.031 0.031l-0.031-0.031h-0.125c-0.063 0.063-0.094 0.156-0.125 0.25l0.063 0.063-0.156 0.063-0.031 0.063-0.094 0.063v0.031h-0.031v0.156h-0.031c-0.031-0.125-0.125-0.25-0.313-0.344h-0.094v0.063c0 0.063 0.063 0.094 0.125 0.125 0.063 0.063 0.094 0.125 0.125 0.156-0.031-0.031-0.094 0-0.094 0.031v0.063l0.188 0.281v0.531l0.063 0.125c-0.063 0.156-0.125 0.313-0.219 0.406v-0.031l-0.063 0.031-0.031 0.031-0.031 0.125 0.031 0.031v0.031l-0.063-0.063-0.031 0.188-0.156 0.063c-0.063 0.031-0.094 0.063-0.063 0.156 0 0.063-0.031 0.094-0.094 0.125l0.031 0.063-0.063 0.094c0 0.031 0 0.063-0.031 0.063v0.125l0.031 0.219 0.063 0.031 0.063-0.031z"></path> </g></svg>

                        <p class = "ttl_plant_location_title">
                            Main Location - Malaysia
                        </p>
                    </div>

                    <div class = "ttl_plant_location_content">
                        <div class = "ttl_google_map">
                            <iframe src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16300651.775447275!2d98.93588896168734!3d4.09119254455521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3034d3975f6730af%3A0x745969328211cd8!2sMalaysia!5e0!3m2!1sen!2smy!4v1696127621406!5m2!1sen!2smy"  style = "border:0;" allowfullscreen = "" loading = "lazy" referrerpolicy = "no-referrer-when-downgrade"></iframe>
                    
                        </div>
                    </div>

                </div>
            </div>

            <a href = "#ttl_identify_page" class = "ttl_link-2"></a>
        </div>
    </div>

    <div class = "ttl_modal_container" id = "ttl_persimmon_info">
        <div class = "ttl_modal">
            <p class = "ttl_modal_title">Malaysian Persimmon <br> <em>Diospyros maritima</em></p>
            <div class = "ttl_modal_content">
                
                <div class = "ttl_plant_img_gallery_container">
                    <div class = "ttl_plant_gallery">
                        <img src = "styles/images/ttl/ttl_persimmon.png" alt = "Persimmon Fruit">
                        <img src = "styles/images/ttl/ttl_persimmon2.jpeg" alt = "Persimmon Tree Bark">
                        <img src = "styles/images/ttl/ttl_persimmon3.jpg" alt = "Persimmon tree">
                        <img src = "styles/images/ttl/ttl_persimmon4.jpg" alt = "Persimmon flower">
                    </div>
                </div>

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

                    <!--Info from Monaco Nature Encyclopedia (https://www.monaconatureencyclopedia.com/diospyros-maritima/?lang=en)-->
                    <p class = "ttl_plant_about_content">
                        Also known as: Broadleaf ebony, Sea ebony <br> <br>
                        The Diospyros maritima Blume (1826) is a shrub or an evergreen dioecious tree, 5-15 m tall, with trunk having a smooth greyish brown bark, 
                        tending to flake off in small quadrangular scales, and brown-yellowish young branches. The leaves, on a 0,6-1 cm long petiole, are simple, 
                        alternate, oblong-elliptical or obovate-oblong with obtusely acuminate apex and slightly wavy entire margin, 7-20 cm long and 3-9 cm broad, 
                        coriaceous, of glossy dark green colour above, opaque below, with paler central vein and prominent below. 
                        Fasciculate axillar male inflorescences with few flowers, on villous short pedicel, with tubular green calyx, pubescent externally, about 4 mm long, 
                        divided in 4 ovate erect lobes with acute apex, urceolate cream yellow corolla, pubescent externally, 8-9 mm tube with 4 oblong lobes having obtuse apex, about 7 mm long,
                        and 16-20 stamens. Solitary sessile female flowers, axillar, similar to the male ones, with 8-locular ovary.
                        <br><br>
                        The fruit is a globose-depressed berry of yellow colour becoming orange-red when ripe, of 2-3 cm of diameter, with persistent calyx with retroflexed lobes, 
                        containing 7-8 seeds shaped like a clove, 1,2 cm long, of glossy blackish brown colour.
                    </p>

                    <div class = "ttl_youtube_video_container">
                        <iframe class = "ttl_youtube_video" src = "https://www.youtube.com/embed/UFa6qTQvmW8?si=CH2gPS7onZdDsl9D" title = "YouTube video player" allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                </div>
                <!--Info from PictureThis-->
                <div class = "ttl_plant_care_container">

                    <div class = "ttl_plant_care_title_container">

                        <svg viewBox = "-2.4 -2.4 28.80 28.80" fill = "none" xmlns = "http://www.w3.org/2000/svg" stroke = "#ffffff" class = "ttl_plant_care_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g > <path d = "M22 4.67019V16.7402C22 17.7002 21.22 18.6002 20.26 18.7202L19.93 18.7602C17.75 19.0502 14.39 20.1602 12.47 21.2202C12.21 21.3702 11.78 21.3702 11.51 21.2202L11.47 21.2002C9.54997 20.1502 6.20003 19.0502 4.03003 18.7602L3.73999 18.7202C2.77999 18.6002 2 17.7002 2 16.7402V4.66018C2 3.47018 2.96997 2.57019 4.15997 2.67019C6.25997 2.84019 9.43997 3.90022 11.22 5.01022L11.47 5.16018C11.76 5.34018 12.24 5.34018 12.53 5.16018L12.7 5.05019C13.33 4.66019 14.13 4.27019 15 3.92019C16.31 3.40019 17.77 2.98024 19 2.78024C19.27 2.73024 19.53 2.7002 19.77 2.6802H19.83C21.02 2.5802 22 3.47019 22 4.67019Z" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> <path opacity = "0.4" d = "M12 5.49023V20.4902" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> <path opacity = "0.4" d = "M19 2.78027V8.00024L17 6.67023L15 8.00024V3.92023C16.31 3.40023 17.77 2.98027 19 2.78027Z" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> </g></svg>

                        <p class = "ttl_plant_care_title">
                            Cultivation Advice 
                        </p> 
                    </div>

                </div>

                <div class = "ttl_plant_care_card_container">
                    <!--Info from PictureThis-->
                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg viewBox = "-12.8 -12.8 89.60 89.60" xmlns = "http://www.w3.org/2000/svg" fill = "#000000" class = "ttl_water_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g > <g fill = "none" fill-rule = "evenodd"> <path fill = "#B4DFFB" d = "M26.6995662,63 C36.4747667,63 44.3991324,55.0756343 44.3991324,45.3004338 C44.3991324,35.5252333 26.6995662,9 26.6995662,9 C26.6995662,9 9,35.5252333 9,45.3004338 C9,55.0756343 16.9243657,63 26.6995662,63 Z"></path> <path fill = "#4796E7" d = "M41.1107898,41 C48.351679,41 54.2215796,35.1300995 54.2215796,27.8892102 C54.2215796,20.648321 41.1107898,1 41.1107898,1 C41.1107898,1 28,20.648321 28,27.8892102 C28,35.1300995 33.8699005,41 41.1107898,41 Z"></path> <path stroke = "#B4DFFB" stroke-linecap = "round" stroke-width = "2" d = "M32,28 C32,32.9705627 36.0294373,37 41,37 L41,37"></path> <path stroke = "#FFF" stroke-linecap = "round" stroke-width = "2" d = "M13,46 C13,52.627417 18.372583,58 25,58 L25,58"></path> </g> </g></svg>
                            <p class = "ttl_plant_care_card_title">Water</p>
                            <p class = "ttl_plant_care_card_text">Every 1 -2 weeks</p>
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                For Common Persimmon, originating from warm climates, it prefers well-draining soil and moderate watering, 
                                particularly during its growing season. 
                                Be cautious not to overwater as it can lead to root rot. Water only when the top inch of soil is dry.
                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg viewBox = "-6.4 -6.4 76.80 76.80" xmlns = "http://www.w3.org/2000/svg" xmlns:xlink = "http://www.w3.org/1999/xlink" aria-hidden = "true" role = "img" class = "ttl_sun_icon" preserveAspectRatio = "xMidYMid meet" fill = "#000000"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g > <g fill = "#ffe62e"> <path d = "M20.5 59.7l7-7.2c-2.5-.5-4.8-1.5-6.9-2.9l-.1 10.1"> </path> <path d = "M43.5 4.3l-7 7.2c2.5.5 4.8 1.5 6.9 2.9l.1-10.1"> </path> <path d = "M4.3 43.5l10.1-.1C13 41.3 12 39 11.5 36.5l-7.2 7"> </path> <path d = "M59.7 20.5l-10.1.1c1.3 2.1 2.3 4.4 2.9 6.9l7.2-7"> </path> <path d = "M4.3 20.5l7.2 7c.5-2.5 1.5-4.8 2.9-6.9l-10.1-.1"> </path> <path d = "M59.7 43.5l-7.2-7c-.5 2.5-1.5 4.8-2.9 6.9l10.1.1"> </path> <path d = "M20.5 4.3l.1 10.1c2.1-1.3 4.4-2.3 6.9-2.9l-7-7.2"> </path> <path d = "M43.5 59.7l-.1-10.1C41.3 51 39 52 36.5 52.5l7 7.2"> </path> </g> <g fill = "#ffce31"> <path d = "M14.8 44l-4 9.3l9.3-4C18 47.8 16.2 46 14.8 44"> </path> <path d = "M49.2 20l4-9.3l-9.2 4c2 1.5 3.8 3.3 5.2 5.3"> </path> <path d = "M11.4 28.3L2 32l9.4 3.7c-.3-1.2-.4-2.4-.4-3.7s.1-2.5.4-3.7"> </path> <path d = "M52.6 35.7L62 32l-9.4-3.7c.2 1.2.4 2.5.4 3.7c0 1.3-.1 2.5-.4 3.7"> </path> <path d = "M20 14.8l-9.3-4l4 9.3c1.5-2.1 3.3-3.9 5.3-5.3"> </path> <path d = "M44 49.2l9.3 4l-4-9.3C47.8 46 46 47.8 44 49.2"> </path> <path d = "M35.7 11.4L32 2l-3.7 9.4c1.2-.2 2.5-.4 3.7-.4s2.5.1 3.7.4"> </path> <path d = "M28.3 52.6L32 62l3.7-9.4c-1.2.3-2.4.4-3.7.4s-2.5-.1-3.7-.4"> </path> <circle cx = "32" cy = "32" r = "19"> </circle> </g> </g></svg>
                            <p class = "ttl_plant_care_card_title">Lighting</p>
                            <p class = "ttl_plant_care_card_text">Full sun</p>
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                Common Persimmon prefers a sunny environment and should be planted on sun-facing slopes that receive plenty of light. If there is insufficient light, the fruits and flowers will fall early. 
                                This will also cause a thick and rough rind, lowered sugar content, and poor quality fruit. With enough light, the branches will develop fully and have a strong branching ability, 
                                while flower buds will form easily, giving you more flowers and a high fruiting rate. Sufficient light will give you good quality fruit with a thin skin and sweet flesh.
                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg version = "1.1"  xmlns = "http://www.w3.org/2000/svg" xmlns:xlink = "http://www.w3.org/1999/xlink" viewBox = "-51.2 -51.2 614.40 614.40" xml:space = "preserve" fill = "#000000" class = "ttl_pruning_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g> <path style = "fill:#BAC6CC;" d = "M316.786,272.605c0,0,90.58-102.332,39.097-192.453c0,0-80.455,28.352-101.809,106.301"></path> <path style = "fill:#CFDCE5;" d = "M355.87,80.168c-0.412,1.515-26.839,97.083-84.178,130.489l-17.618-24.21 C275.255,109.105,354.634,80.606,355.87,80.168z"></path> <path style = "fill:#FF6F52;" d = "M322.845,266.547l150.99,156.349c18.267,18.915,18.853,48.717,1.344,68.336l0,0 c-19.447,21.79-53.314,22.457-73.604,1.448L199.482,283.416"></path> <path style = "fill:#E25749;" d = "M437.927,492.678L235.835,283.415l91.251-12.477l-4.241-4.391l-123.362,16.868l202.092,209.263 c14.562,15.079,36.119,18.99,54.319,11.941C449.322,502.076,443.169,498.107,437.927,492.678z"></path> <path style = "fill:#FF6F52;" d = "M252.596,335.163v0.012l-1.49,1.696l-23.01,26.149L112,494.939 c-17.364,19.751-47.027,22.756-68.014,6.907c-17.97-13.62-24.113-36.836-17.073-56.805c2.084-5.877,5.295-11.475,9.682-16.455 l121.632-138.244l22.865-25.979L252.596,335.163z"></path> <path style = "fill:#E25749;" d = "M80.342,501.845c-17.97-13.62-24.113-36.836-17.073-56.805c2.084-5.877,5.295-11.475,9.682-16.455 L194.582,290.34l5.936-6.744l-19.426-19.235l-22.865,25.979L36.595,428.585c-4.386,4.98-7.597,10.578-9.682,16.455 c-7.04,19.969-0.897,43.185,17.073,56.805c14.337,10.828,32.721,12.849,48.469,6.752C88.217,506.951,84.136,504.712,80.342,501.845z "></path> <path style = "fill:#CFDCE5;" d = "M260.132,180.395c-7.62-18.025-11.844-37.836-11.844-58.636c0-48.647,23.056-91.902,58.83-119.458 c-47.24-8.331-97.688,5.957-133.913,42.883c-57.366,58.479-57.189,153.145,0.384,211.419l80.309,83.159l68.947-73.214 C322.845,266.547,274.251,207.422,260.132,180.395z"></path> <path style = "fill:#E25749;" d = "M252.596,335.163v0.012l-1.49,1.696l-23.01,26.149l-62.985-65.214 c-2.399-2.423-4.689-4.92-6.883-7.464l22.865-25.979L252.596,335.163z"></path> <circle style = "fill:#314A5F;" cx = "251.08" cy = "262.445" r = "19.484"></circle> </g></svg>
                            <p class = "ttl_plant_care_card_title">Pruning</p>
                            
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                Pruning is best carried out in the late winter, when the plant is still dormant, but additional pruning
                                may also be needed during the growing season. When pruning in the winter, focus on thinning out branches, 
                                keeping fruit-producing limbs evenly spaced out. Remove dead branches, as well as those growing at improper angles, 
                                and cut off any suckers too. this is also the time to cut back tall branches to make fruit-harvesting easier - 
                                any new shoots will grow below where the branch was cut. 
                                Additional pruning will depend on the shape and style of tree you are going for.
                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <img src = "styles/images/ttl/ttl_fertilizer.png" alt = "fertilizer icon" class = "ttl_fertilizer_icon">
                            <p class = "ttl_plant_care_card_title">Fertilizer</p>
                            
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                Common Persimmon trees will do best with a feeding of fruit tree fertilizer once a year, in spring. 
                                Begin this regimen only after the plants are old enough to begin producing fruit. 
                                Keeping a layer of mulch around the trunk can help, as well.
                            </p>
                        </div>
                    </div>

                </div>

                <div class = "ttl_plant_environment_container">
                    <div class = "ttl_plant_environment_title_container">

                        <svg viewBox = "-3 -3 21.00 21.00" fill = "none" xmlns = "http://www.w3.org/2000/svg" stroke = "#ffffff" class = "ttl_plant_environment_icon"><g stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g > <path d = "M7.5 15V7M7.5 7.5V10.5M7.5 7.5C7.5 5.29086 5.70914 3.5 3.5 3.5H0.5V6.5C0.5 8.70914 2.29086 10.5 4.5 10.5H7.5M7.5 7.5H10.5C12.7091 7.5 14.5 5.70914 14.5 3.5V0.5H11.5C9.29086 0.5 7.5 2.29086 7.5 4.5V7.5ZM7.5 7.5L11.5 3.5M7.5 10.5L3.5 6.5" stroke = "#ffffff"></path> </g></svg>

                        <p class = "ttl_plant_environment_title">
                            Right Environment For Plant
                        </p>
                    </div>

                    <div class = "ttl_plant_environment_content">
                        <!--Info from University of Florida (https://hort.ifas.ufl.edu/database/documents/pdf/tree_fact_sheets/diovira.pdf)-->
                        <table class = "ttl_plant_environment_table">

                            <tr>
                                <th>Light Requirement</th>
                                <td>Tree grows in full sun</td>
                            </tr>

                            <tr>
                                <th>Soil Tolerance</th>
                                <td>Clay; loam; sand; acidic; alkaline; extended flooding; well-drained</td>
                            </tr>

                            <tr>
                                <th>Drought Tolerance</th>
                                <td>High</td>
                            </tr>

                            <tr>
                                <th>Aerosol Salt Tolerance</th>
                                <td>High</td>
                            </tr>

                            <tr>
                                <th>Soil Salt Tolerance</th>
                                <td>Moderate</td>
                            </tr>

                        </table>

                    </div>

                </div>

                <div class = "ttl_plant_location_container">
                    <div class = "ttl_plant_location_title_container">

                        <svg fill = "#ffffff" viewBox = "-3.2 -3.2 38.40 38.40" version = "1.1" xmlns = "http://www.w3.org/2000/svg" class = "ttl_globe_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g > <path d = "M19.063 8.094c2.063 2.063 3.344 4.875 3.344 7.906 0 3.063-1.281 5.813-3.344 7.875s-4.844 3.313-7.875 3.313c-3.063 0-5.813-1.25-7.875-3.313s-3.313-4.813-3.313-7.875c0-3.031 1.25-5.844 3.313-7.906s4.813-3.313 7.875-3.313c3.031 0 5.813 1.25 7.875 3.313zM12.469 22.313h0.063c0.094 0 0.188 0.031 0.25 0.125 0.063 0.063 0.125 0.125 0.25 0.125 0.031 0 0.063-0.031 0.063-0.094 0-0.125 0.031-0.25 0.031-0.281 0.031-0.094 0.094-0.094 0.156-0.094 0.031 0 0.031 0 0.031-0.063l-0.063-0.063c-0.031 0-0.063 0.031-0.063 0.063-0.031 0.031-0.063 0.063-0.094 0l-0.188 0.125-0.219-0.063-0.375-0.563 0.125-0.813c0-0.031-0.031-0.094-0.125-0.125s-0.094-0.094-0.063-0.125c-0.125-0.063-0.281-0.125-0.469-0.125-0.031 0-0.125 0.031-0.281 0.063-0.156 0-0.25 0-0.25-0.063 0-0.094 0.094-0.281 0.156-0.5 0.031-0.094 0.063-0.25 0.094-0.313 0-0.063 0.031-0.125 0.031-0.125l0.156-0.375-0.031-0.063-0.219-0.031c-0.063 0-0.281 0.125-0.438 0.25-0.156 0.188-0.281 0.344-0.281 0.469l-0.625 0.125c-0.125 0-0.25-0.031-0.344-0.156-0.031-0.156-0.125-0.344-0.25-0.531-0.125-0.156-0.156-0.313-0.156-0.469 0-0.188 0.031-0.438 0.094-0.594 0.063-0.188 0.063-0.406-0.063-0.594 0.031 0 0.125-0.063 0.063-0.125l0.156-0.188 0.031-0.031 0.031 0.031c0.125-0.094 0.344-0.125 0.531-0.094 0.219 0.031 0.344-0.063 0.406-0.219l0.219 0.219c0.063 0.031 0.188-0.188 0.188-0.25l-0.094-0.063 0.563-0.125 0.031 0.063h0.25l0.313 0.188c0.031 0 0.063-0.031 0.094-0.063 0.063-0.063 0.094-0.063 0.125-0.031l0.281 0.313c-0.031 0.063-0.031 0.125-0.031 0.188 0.031 0.031 0.063 0.063 0.063 0.094 0 0.125 0.281 0.688 0.438 0.688 0.094 0 0.125-0.063 0.094-0.188v-0.25c0-0.156-0.031-0.344-0.094-0.531-0.094-0.156-0.156-0.375-0.219-0.563v-0.063c0-0.094 0.063-0.188 0.188-0.25 0.094-0.063 0.156-0.125 0.156-0.125 0.094-0.063 0.188-0.156 0.313-0.219 0.094-0.063 0.188-0.219 0.25-0.313l0.094-0.219v-0.125h0.094s0.063-0.031 0.063-0.094c0 0-0.031-0.031-0.063-0.031-0.031-0.031-0.125-0.094-0.188-0.156l0.063-0.063c0.094-0.094 0.125-0.313 0.063-0.406l0.25-0.125c-0.063 0.125 0.125 0.156 0.188 0.125l0.125-0.281c-0.063-0.156-0.094 0 0-0.188 0.094-0.031 0.188-0.063 0.281-0.125 0.094-0.031 0.156-0.063 0.25-0.063 0.031 0 0.063 0.031 0.063 0.031 0.063 0 0.094-0.031 0.094-0.031 0-0.094-0.031-0.156-0.063-0.156l0.156-0.344c0.125 0 0.25-0.063 0.313-0.188l0.25-0.031c0.063 0 0.094-0.031 0.094-0.094v-0.063l0.469-0.125 0.063-0.156-0.125-0.188s0.031-0.031 0.031-0.063-0.031-0.063-0.063-0.094c-0.031 0-0.063-0.031-0.094-0.031-0.031-0.031-0.063-0.063-0.094-0.063h0.25s0.125-0.031 0.125-0.125c0-0.125-0.063-0.156-0.188-0.156-0.344 0-0.875 0.125-1.063 0.5l-0.188 0.094 0.25-0.25 0.031-0.063c0-0.031-0.031-0.063-0.094-0.094h-0.094c0.313 0 0.5-0.094 0.625-0.188 0.094-0.094 0.188-0.188 0.406-0.25 0.219 0.031 0.438 0.031 0.656 0.031 0.188-0.031 0.375-0.031 0.594-0.031 0.094-0.063 0.219-0.188 0.281-0.313l0.313-0.031c0.063 0.063 0.281-0.094 0.281-0.188s-0.031-0.125-0.125-0.156-0.188-0.094-0.188-0.188v-0.094c0.031-0.031 0-0.063-0.031-0.063-0.125 0-0.438 0.156-0.531 0.219-0.063 0.063-0.094-0.031-0.094-0.094l0.031 0.031 0.125-0.063 0.313-0.125 0.031-0.031c0-0.125-0.188-0.156-0.25-0.156-0.031 0-0.094 0.031-0.156 0.063-0.063 0-0.125 0-0.125-0.063l0.031-0.063c-0.219-0.156-0.406-0.469-0.406-0.563v-0.125c0.031-0.031 0-0.031-0.063-0.031h-0.094c-0.031 0.031-0.063 0-0.063-0.063s-0.125-0.406-0.281-0.406l-0.094 0.094c0 0.063-0.031 0.094-0.094 0.125s-0.094 0.063-0.094 0.094h-0.031l-0.313 0.188c0-0.063-0.031-0.063-0.063-0.031-0.031 0-0.031 0.031-0.094 0.031h-0.063c0.156 0 0.125-0.219 0-0.219l-0.25 0.031c-0.063 0-0.063 0 0-0.063 0.031-0.063 0.094-0.125 0.031-0.188 0-0.063-0.031-0.063-0.063-0.031l0.063-0.094c0.063-0.031-0.031-0.156-0.094-0.219l-0.281-0.031-0.188-0.188c-0.031 0.031-0.063 0-0.125-0.031-0.031-0.031-0.094-0.094-0.125-0.094l-0.219 0.094-0.563-0.125c-0.063 0-0.156 0.031-0.156 0.125 0 0.031 0 0.063 0.031 0.063 0.063 0.031 0.063 0.063 0.063 0.094s0.031 0.156 0.063 0.313c0 0.156 0 0.219-0.094 0.188l-0.125 0.188c0 0.063 0.063 0.094 0.094 0.094 0.094 0.063 0.188 0.156 0.25 0.25 0.063 0.063 0.063 0.156 0.031 0.25l-0.594 0.469v0.031c0 0.094 0 0.156 0.031 0.219 0.063 0.063 0.063 0.156 0.125 0.25 0.156 0.063 0.156 0.125 0.031 0.188-0.063 0-0.125 0.031-0.188 0.063l-0.063 0.063c0 0.031-0.031 0.031-0.063 0.031h-0.156s0-0.031 0.031-0.031c0 0 0.031-0.031 0.031-0.063l-0.281-0.156-0.125-0.219c0.031-0.094 0.031-0.156 0-0.188s-0.031-0.094-0.031-0.156-0.063-0.219-0.188-0.219c-0.156 0-0.281 0.031-0.438 0.063 0.063-0.031-0.063-0.188-0.094-0.188-0.156 0-0.344-0.063-0.563-0.188s-0.375-0.188-0.5-0.188c-0.094 0-0.281 0.031-0.406 0.094 0.063-0.031 0.063-0.063 0.094-0.156l-0.188-0.313-0.031-0.031c-0.063 0-0.125 0.031-0.188 0.094-0.063 0.031-0.156 0-0.156-0.125 0-0.031 0.031-0.063 0.031-0.063 0.031-0.031 0.031-0.031 0-0.063 0-0.094 0.031-0.188 0.125-0.281 0.063-0.063 0.094-0.188 0.125-0.281 0.063-0.031 0.063-0.063 0.063-0.094 0-0.063 0.031-0.063 0.063-0.063 0.063 0 0.156-0.031 0.219-0.063 0.063-0.063 0.125-0.094 0.219-0.094l0.031-0.094c0-0.031-0.094-0.063-0.281-0.094-0.219-0.031-0.313-0.031-0.313-0.094l0.031-0.031c0.188 0.063 0.344 0.094 0.438 0.094 0.188 0.031 0.281-0.031 0.469-0.125 0.063-0.031 0.25-0.094 0.406-0.188 0-0.031-0.031-0.031-0.125-0.063h0.125l0.219-0.125v-0.125l-0.063-0.063 0.313-0.063c-0.031-0.063 0.031-0.094 0.063-0.094 0.063 0 0.125 0.031 0.188 0.094s0.094 0.063 0.125 0.063l0.281-0.094c0-0.031 0.031-0.031 0.094-0.031 0.063-0.031 0.094-0.063 0.063-0.094l-0.219-0.219c-0.063 0-0.094-0.094-0.031-0.094 0.094 0 0.156-0.031 0.094-0.125-0.063-0.031-0.156-0.094-0.25-0.125-0.094-0.063-0.188-0.094-0.281-0.094-0.063 0-0.188 0.031-0.188 0.125 0 0.063 0.031 0.063 0.063 0.063 0.063 0 0.094 0.031 0.094 0.063 0.063 0.031 0.031 0.063-0.031 0.063h-0.063c-0.063 0-0.156 0.063-0.219 0.188-0.063 0.094-0.156 0.188-0.25 0.219-0.031 0-0.031 0-0.031-0.031 0.031-0.031 0-0.031 0-0.063-0.031-0.031-0.063-0.063-0.094-0.063-0.063-0.031-0.125-0.031-0.125-0.063 0-0.063 0.063-0.094 0.125-0.188 0.031-0.094-0.063-0.125-0.219-0.125-0.063 0-0.125 0.031-0.156 0.094-0.031 0.031-0.063 0.094-0.094 0.156l-0.313-0.344-0.25-0.031c0-0.063 0.031-0.125 0.063-0.188 0.063-0.125-0.188-0.281-0.281-0.375-0.031 0-0.094-0.031-0.156-0.031-0.031 0-0.219 0.156-0.344 0.219-0.063 0.031-0.094 0.063-0.094 0.094 0 0.063 0.063 0.063 0.156 0.063h-0.031c-0.063 0-0.094 0.031-0.094 0.125 0 0.031 0.25 0.094 0.313 0.094s0.125 0 0.125 0.031c0.031 0.031 0.031 0.031 0.094 0.031l0.094-0.031v0.063s-0.031 0.063-0.031 0.063l0.031 0.094-0.313 0.156-0.031 0.031c-0.031 0-0.063 0-0.063 0.031s0 0.094 0.063 0.156c0.031 0.063 0 0.094-0.156 0.094l-0.094-0.063c0-0.063-0.063-0.125-0.219-0.188-0.281-0.094-0.781-0.125-1.219-0.125-0.219-0.031-0.375-0.031-0.5-0.031l-0.469 0.156 0.125 0.25c-0.031 0-0.094 0.031-0.094 0.031-0.125-0.094-0.313-0.281-0.375-0.281l-0.219-0.031c-0.688 0.031-1.5 0.688-2.281 1.469s-1.469 1.656-1.813 2.188h0.063c0.063 0 0.094-0.031 0.188-0.063 0.063-0.031 0.094 0.031 0.094 0.125 0 0.063 0 0.094-0.031 0.156s0.031 0.094 0.156 0.094c0.031 0 0.063-0.031 0.063-0.094 0.031-0.063 0.031-0.063 0.031 0l0.063 0.219v0.031c0 0.031-0.031 0.063-0.063 0.094-0.094 0.031 0 0.125 0.094 0.125h0.156l0.063-0.031 0.031-0.031c0 0.125 0.125 0.156 0.219 0.156h0.031s-0.031 0.063-0.063 0.094c-0.063 0-0.063 0.031 0 0.063l0.313 0.063v0.031l0.188 0.406c0 0.063-0.063 0.219-0.125 0.219s-0.063-0.031-0.063-0.063c0.031 0 0.031-0.031 0.031-0.094 0-0.031-0.031-0.063-0.031-0.094-0.031-0.031-0.094-0.031-0.219-0.031-0.031 0-0.125 0-0.063 0.094l0.156 0.344 0.063 0.063c-0.188 0-0.219 0.625-0.219 0.813l0.031 0.25 0.031 0.094v0.031l-0.031 0.281 0.375 0.625h0.094c0 0.031 0 0.063-0.031 0.094s-0.031 0.063-0.031 0.125l0.125 0.094c0 0.188 0.063 0.219 0.219 0.375 0 0.094 0.125 0.219 0.313 0.344 0.219 0.094 0.344 0.156 0.406 0.188 0.125 0.438 0.344 0.906 0.656 1.188l0.031 0.188-0.063 0.063c-0.063 0-0.063 0.031-0.031 0.063l0.25 0.125c0.063-0.063 0.094 0 0.156 0.094 0.063 0.125 0.094 0.188 0.125 0.219v0.094l0.156 0.219 0.063 0.063 0.063-0.156c-0.063-0.156-0.281-0.5-0.469-0.781-0.094-0.156-0.188-0.313-0.281-0.438-0.063-0.094-0.094-0.156-0.094-0.188s-0.031-0.375-0.063-0.438c0.031 0.031 0.125 0.063 0.188 0.094 0.094 0.031 0.188 0.063 0.25 0.094 0.031 0.25 0.125 0.438 0.281 0.594 0.125 0.125 0.25 0.281 0.344 0.469-0.063 0.063 0.063 0.063 0.125 0.063 0.031 0.063 0.031 0.094 0.031 0.219 0.281 0.281 0.844 0.938 0.844 1.219v0.031l-0.063 0.188c0.125 0.281 0.406 0.5 0.688 0.594h0.063c0.156 0.094 0.375 0.188 0.594 0.281 0.188 0.125 0.375 0.219 0.563 0.281l0.313-0.188c0.156 0.031 0.344 0.188 0.563 0.375s0.5 0.406 0.875 0.469c0.125-0.094 0.188-0.063 0.188 0.063v0.063l0.344 0.406 0.063 0.188c0.188 0.125 0.406 0.313 0.5 0.531zM8.438 6.594l-0.031-0.063c-0.063-0.031-0.219-0.094-0.281-0.094-0.031 0-0.094 0.031-0.219 0.063-0.219 0.125-0.563 0.219-0.813 0.344-0.125 0.063-0.219 0.094-0.281 0.094 0.125 0 0.25-0.031 0.375-0.094 0.094-0.063 0.219-0.094 0.344-0.094l0.094 0.063c0.063 0.031 0.094 0.031 0.156 0.031 0.031 0 0.063 0 0.125 0.063 0.063-0.031 0.125-0.031 0.219 0.031l0.094-0.063v-0.125l-0.031-0.063 0.063 0.031c0.063 0 0.125-0.031 0.188-0.125zM13.156 24.906l0.031 0.188c0 0.063-0.031 0.063-0.063 0.125-0.094 0.063-0.25 0.156-0.25 0.344 0 0.031 0.031 0.063 0.031 0.125 0.031 0.031 0.063 0.063 0.063 0.125 0 0.031-0.031 0.063-0.031 0.094 2.156-0.375 4.094-1.406 5.594-3h-0.031c-0.063 0.031-0.156 0.031-0.188 0l-0.094 0.031-0.156-0.031h-0.094c-0.063-0.094-0.125-0.156-0.219-0.219l-0.031-0.031c-0.031 0-0.063 0-0.063 0.063 0-0.281-0.219-0.531-0.469-0.531 0 0.031-0.031 0.031-0.031 0.031h-0.063l-0.063-0.031h0.094l0.063-0.188-0.156-0.094-0.031 0.031c-0.125-0.031-0.219-0.094-0.281-0.219l-0.094-0.031v0.031l-0.063 0.031c-0.125 0.031-0.219 0.063-0.281 0.094-0.125-0.031-0.219-0.094-0.25-0.125l-0.375 0.031c0-0.125-0.063-0.281-0.219-0.281-0.188 0-0.438 0-0.5 0.219 0 0.063 0.031 0.156 0.063 0.188v0.125l-0.031 0.063-0.031 0.031h-0.031l-0.094-0.219 0.094-0.125c-0.031-0.063-0.031-0.094-0.031-0.156s-0.031-0.094-0.031-0.156l-0.031-0.031h-0.094l-0.188 0.125h-0.125l-0.031 0.063c-0.031 0-0.031 0.031-0.031 0.063 0 0-0.031 0-0.031 0.031l-0.031-0.031h-0.125c-0.063 0.063-0.094 0.156-0.125 0.25l0.063 0.063-0.156 0.063-0.031 0.063-0.094 0.063v0.031h-0.031v0.156h-0.031c-0.031-0.125-0.125-0.25-0.313-0.344h-0.094v0.063c0 0.063 0.063 0.094 0.125 0.125 0.063 0.063 0.094 0.125 0.125 0.156-0.031-0.031-0.094 0-0.094 0.031v0.063l0.188 0.281v0.531l0.063 0.125c-0.063 0.156-0.125 0.313-0.219 0.406v-0.031l-0.063 0.031-0.031 0.031-0.031 0.125 0.031 0.031v0.031l-0.063-0.063-0.031 0.188-0.156 0.063c-0.063 0.031-0.094 0.063-0.063 0.156 0 0.063-0.031 0.094-0.094 0.125l0.031 0.063-0.063 0.094c0 0.031 0 0.063-0.031 0.063v0.125l0.031 0.219 0.063 0.031 0.063-0.031z"></path> </g></svg>

                        <p class = "ttl_plant_location_title">
                            Main Location - Malaysia
                        </p>
                    </div>

                    <div class = "ttl_plant_location_content">
                        <div class = "ttl_google_map">
                            <iframe src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16300651.775447275!2d98.93588896168734!3d4.09119254455521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3034d3975f6730af%3A0x745969328211cd8!2sMalaysia!5e0!3m2!1sen!2smy!4v1696127621406!5m2!1sen!2smy"  style = "border:0;" allowfullscreen = "" loading = "lazy" referrerpolicy = "no-referrer-when-downgrade"></iframe>
                    
                        </div>
                    </div>

                </div>
            </div>

            <a href = "#ttl_identify_page" class = "ttl_link-2"></a>
        </div>
    </div>

    <div class = "ttl_modal_container" id = "ttl_cocoplum_info">
        <div class = "ttl_modal">
            <p class = "ttl_modal_title">Cocoplum <br> <em>Chrysobalanus icaco</em></p>
            <div class = "ttl_modal_content">
                
                <div class = "ttl_plant_img_gallery_container">
                    <div class = "ttl_plant_gallery">
                        <img src = "styles/images/ttl/ttl_cocoplum.png" alt = "Cocoplum fruit">
                        <img src = "styles/images/ttl/ttl_cocoplum2.jpeg" alt = "Cocoplum Leaves">
                        <img src = "styles/images/ttl/ttl_cocoplum3.jpg" alt = "Cocoplum">
                        <img src = "styles/images/ttl/ttl_cocoplum4.jpeg" alt = "Cocoplum flower">
                    </div>
                </div>

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

                    <!--Info from PictureThis-->
                    <p class = "ttl_plant_about_content">
                        Also known as: Icaco, Coco plum <br> <br>
                        Cocoplum (Chrysobalanus icaco) is a plant species native to south Florida. Edible plums grow from its branches. The tiny white flowers can be made into jelly. 
                        The seeds can be roasted and eaten or used as a recipe ingredient.
                    </p>

                    <div class = "ttl_youtube_video_container">
                        <iframe class = "ttl_youtube_video" src = "https://www.youtube.com/embed/__9K60n8oYM?si=4IU57KDGmzLBQAuW" title = "YouTube video player" allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                </div>

                <div class = "ttl_plant_care_container">

                    <div class = "ttl_plant_care_title_container">

                        <svg viewBox = "-2.4 -2.4 28.80 28.80" fill = "none" xmlns = "http://www.w3.org/2000/svg" stroke = "#ffffff" class = "ttl_plant_care_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g> <path d = "M22 4.67019V16.7402C22 17.7002 21.22 18.6002 20.26 18.7202L19.93 18.7602C17.75 19.0502 14.39 20.1602 12.47 21.2202C12.21 21.3702 11.78 21.3702 11.51 21.2202L11.47 21.2002C9.54997 20.1502 6.20003 19.0502 4.03003 18.7602L3.73999 18.7202C2.77999 18.6002 2 17.7002 2 16.7402V4.66018C2 3.47018 2.96997 2.57019 4.15997 2.67019C6.25997 2.84019 9.43997 3.90022 11.22 5.01022L11.47 5.16018C11.76 5.34018 12.24 5.34018 12.53 5.16018L12.7 5.05019C13.33 4.66019 14.13 4.27019 15 3.92019C16.31 3.40019 17.77 2.98024 19 2.78024C19.27 2.73024 19.53 2.7002 19.77 2.6802H19.83C21.02 2.5802 22 3.47019 22 4.67019Z" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> <path opacity = "0.4" d = "M12 5.49023V20.4902" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> <path opacity = "0.4" d = "M19 2.78027V8.00024L17 6.67023L15 8.00024V3.92023C16.31 3.40023 17.77 2.98027 19 2.78027Z" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> </g></svg>

                        <p class = "ttl_plant_care_title">
                            Cultivation Advice 
                        </p> 
                    </div>

                </div>

                <div class = "ttl_plant_care_card_container">
                    <!--Info from PictureThis-->
                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg viewBox = "-12.8 -12.8 89.60 89.60" xmlns = "http://www.w3.org/2000/svg" fill = "#000000" class = "ttl_water_icon"><g stroke-width = "0"></g><g stroke-linecap = "round" stroke-linejoin = "round"></g><g> <g fill = "none" fill-rule = "evenodd"> <path fill = "#B4DFFB" d = "M26.6995662,63 C36.4747667,63 44.3991324,55.0756343 44.3991324,45.3004338 C44.3991324,35.5252333 26.6995662,9 26.6995662,9 C26.6995662,9 9,35.5252333 9,45.3004338 C9,55.0756343 16.9243657,63 26.6995662,63 Z"></path> <path fill = "#4796E7" d = "M41.1107898,41 C48.351679,41 54.2215796,35.1300995 54.2215796,27.8892102 C54.2215796,20.648321 41.1107898,1 41.1107898,1 C41.1107898,1 28,20.648321 28,27.8892102 C28,35.1300995 33.8699005,41 41.1107898,41 Z"></path> <path stroke = "#B4DFFB" stroke-linecap = "round" stroke-width = "2" d = "M32,28 C32,32.9705627 36.0294373,37 41,37 L41,37"></path> <path stroke = "#FFF" stroke-linecap = "round" stroke-width = "2" d = "M13,46 C13,52.627417 18.372583,58 25,58 L25,58"></path> </g> </g></svg>
                            <p class = "ttl_plant_care_card_title">Water</p>
                            <p class = "ttl_plant_care_card_text">Every 1 - 2 weeks</p>
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                Cocoplum thrives in moist conditions and prefers consistent watering. As it originates from wetlands and coastal environments, 
                                it can tolerate both well-drained soil and standing water without overwatering issues.
                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg viewBox = "-6.4 -6.4 76.80 76.80" xmlns = "http://www.w3.org/2000/svg" xmlns:xlink = "http://www.w3.org/1999/xlink" aria-hidden = "true" role = "img" class = "ttl_sun_icon" preserveAspectRatio = "xMidYMid meet" fill = "#000000"><g stroke-width = "0"></g><g stroke-linecap = "round" stroke-linejoin = "round"></g><g> <g fill = "#ffe62e"> <path d = "M20.5 59.7l7-7.2c-2.5-.5-4.8-1.5-6.9-2.9l-.1 10.1"> </path> <path d = "M43.5 4.3l-7 7.2c2.5.5 4.8 1.5 6.9 2.9l.1-10.1"> </path> <path d = "M4.3 43.5l10.1-.1C13 41.3 12 39 11.5 36.5l-7.2 7"> </path> <path d = "M59.7 20.5l-10.1.1c1.3 2.1 2.3 4.4 2.9 6.9l7.2-7"> </path> <path d = "M4.3 20.5l7.2 7c.5-2.5 1.5-4.8 2.9-6.9l-10.1-.1"> </path> <path d = "M59.7 43.5l-7.2-7c-.5 2.5-1.5 4.8-2.9 6.9l10.1.1"> </path> <path d = "M20.5 4.3l.1 10.1c2.1-1.3 4.4-2.3 6.9-2.9l-7-7.2"> </path> <path d = "M43.5 59.7l-.1-10.1C41.3 51 39 52 36.5 52.5l7 7.2"> </path> </g> <g fill = "#ffce31"> <path d = "M14.8 44l-4 9.3l9.3-4C18 47.8 16.2 46 14.8 44"> </path> <path d = "M49.2 20l4-9.3l-9.2 4c2 1.5 3.8 3.3 5.2 5.3"> </path> <path d = "M11.4 28.3L2 32l9.4 3.7c-.3-1.2-.4-2.4-.4-3.7s.1-2.5.4-3.7"> </path> <path d = "M52.6 35.7L62 32l-9.4-3.7c.2 1.2.4 2.5.4 3.7c0 1.3-.1 2.5-.4 3.7"> </path> <path d = "M20 14.8l-9.3-4l4 9.3c1.5-2.1 3.3-3.9 5.3-5.3"> </path> <path d = "M44 49.2l9.3 4l-4-9.3C47.8 46 46 47.8 44 49.2"> </path> <path d = "M35.7 11.4L32 2l-3.7 9.4c1.2-.2 2.5-.4 3.7-.4s2.5.1 3.7.4"> </path> <path d = "M28.3 52.6L32 62l3.7-9.4c-1.2.3-2.4.4-3.7.4s-2.5-.1-3.7-.4"> </path> <circle cx = "32" cy = "32" r = "19"> </circle> </g> </g></svg>
                            <p class = "ttl_plant_care_card_title">Lighting</p>
                            <p class = "ttl_plant_care_card_text">Full sun</p>
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                Cocoplum thrives with ample amounts of sunlight, equating to most of the day's light period. Nevertheless, cocoplum also exhibits ability to grow in less sunny areas, although sunlight exposure is fundamental. Lack or overload of sun can lead to feeble growth, while its habitat exhibits sizeable sunshine. 
                                Its sustenance through different growth stages depends on sufficient solar exposure.
                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg version = "1.1"  xmlns = "http://www.w3.org/2000/svg" xmlns:xlink = "http://www.w3.org/1999/xlink" viewBox = "-51.2 -51.2 614.40 614.40" xml:space = "preserve" fill = "#000000" class = "ttl_pruning_icon"><g stroke-width = "0"></g><g stroke-linecap = "round" stroke-linejoin = "round"></g><g > <path style = "fill:#BAC6CC;" d = "M316.786,272.605c0,0,90.58-102.332,39.097-192.453c0,0-80.455,28.352-101.809,106.301"></path> <path style = "fill:#CFDCE5;" d = "M355.87,80.168c-0.412,1.515-26.839,97.083-84.178,130.489l-17.618-24.21 C275.255,109.105,354.634,80.606,355.87,80.168z"></path> <path style = "fill:#FF6F52;" d = "M322.845,266.547l150.99,156.349c18.267,18.915,18.853,48.717,1.344,68.336l0,0 c-19.447,21.79-53.314,22.457-73.604,1.448L199.482,283.416"></path> <path style = "fill:#E25749;" d = "M437.927,492.678L235.835,283.415l91.251-12.477l-4.241-4.391l-123.362,16.868l202.092,209.263 c14.562,15.079,36.119,18.99,54.319,11.941C449.322,502.076,443.169,498.107,437.927,492.678z"></path> <path style = "fill:#FF6F52;" d = "M252.596,335.163v0.012l-1.49,1.696l-23.01,26.149L112,494.939 c-17.364,19.751-47.027,22.756-68.014,6.907c-17.97-13.62-24.113-36.836-17.073-56.805c2.084-5.877,5.295-11.475,9.682-16.455 l121.632-138.244l22.865-25.979L252.596,335.163z"></path> <path style = "fill:#E25749;" d = "M80.342,501.845c-17.97-13.62-24.113-36.836-17.073-56.805c2.084-5.877,5.295-11.475,9.682-16.455 L194.582,290.34l5.936-6.744l-19.426-19.235l-22.865,25.979L36.595,428.585c-4.386,4.98-7.597,10.578-9.682,16.455 c-7.04,19.969-0.897,43.185,17.073,56.805c14.337,10.828,32.721,12.849,48.469,6.752C88.217,506.951,84.136,504.712,80.342,501.845z "></path> <path style = "fill:#CFDCE5;" d = "M260.132,180.395c-7.62-18.025-11.844-37.836-11.844-58.636c0-48.647,23.056-91.902,58.83-119.458 c-47.24-8.331-97.688,5.957-133.913,42.883c-57.366,58.479-57.189,153.145,0.384,211.419l80.309,83.159l68.947-73.214 C322.845,266.547,274.251,207.422,260.132,180.395z"></path> <path style = "fill:#E25749;" d = "M252.596,335.163v0.012l-1.49,1.696l-23.01,26.149l-62.985-65.214 c-2.399-2.423-4.689-4.92-6.883-7.464l22.865-25.979L252.596,335.163z"></path> <circle style = "fill:#314A5F;" cx = "251.08" cy = "262.445" r = "19.484"></circle> </g></svg>
                            <p class = "ttl_plant_care_card_title">Pruning</p>
                            
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                To produce optimum fruit harvests, you'll need to cut off the poorly developed small fruits if the fruits are too many and close. 
                                This will help the good fruits to get more nutrients and thus benefits the whole pruduction.  
                                In addition to keeping diseased branches trimmed away, give the tree a good pruning each year in addition to maintenance. 
                                The rule of thumb is to prune around 20% of the tree’s branch canopy. Try not to remove any more than that. While pruning is important, do not get carried away with the pruning tools and cut back too much of 
                                your Cocoplum's growing branches. Since the best fruit bearers are often around the perimeter of the plant, 
                                it will require concentration and care not to cut away too much.
                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <img src = "styles/images/ttl/ttl_fertilizer.png" alt = "fertilizer icon" class = "ttl_fertilizer_icon">
                            <p class = "ttl_plant_care_card_title">Fertilizer</p>
                            
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                Most types of Cocoplum grow in tropical locations that have a lot of decaying organic matter in the environment naturally. They can benefit from fertilizer to supplement their macronutrient and micronutrient needs. 
                                When growing Cocoplum for fruit, a high-phosphorus organic fertilizer such as mushroom compost, bone meal and poultry manure supports the development of delicious and well-formed fruits. When purchasing fertilizer, 
                                there will be a number (NPK) on the label with the ratio of the three macronutrients nitrogen, phosphorus, and potassium. 
                                Low nitrogen is the most common nutrient deficit in soil, but a soil test is the best way to know which types of nutrients might be lacking in your soil and require additional supplementation.
                            </p>
                        </div>
                    </div>

                </div>

                <div class = "ttl_plant_environment_container">
                    <div class = "ttl_plant_environment_title_container">

                        <svg viewBox = "-3 -3 21.00 21.00" fill = "none" xmlns = "http://www.w3.org/2000/svg" stroke = "#ffffff" class = "ttl_plant_environment_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g > <path d = "M7.5 15V7M7.5 7.5V10.5M7.5 7.5C7.5 5.29086 5.70914 3.5 3.5 3.5H0.5V6.5C0.5 8.70914 2.29086 10.5 4.5 10.5H7.5M7.5 7.5H10.5C12.7091 7.5 14.5 5.70914 14.5 3.5V0.5H11.5C9.29086 0.5 7.5 2.29086 7.5 4.5V7.5ZM7.5 7.5L11.5 3.5M7.5 10.5L3.5 6.5" stroke = "#ffffff"></path> </g></svg>

                        <p class = "ttl_plant_environment_title">
                            Right Environment For Plant
                        </p>
                    </div>

                    <div class = "ttl_plant_environment_content">
                        <!--Info from University of Florida (https://edis.ifas.ufl.edu/publication/EP553)-->
                        <table class = "ttl_plant_environment_table">

                            <tr>
                                <th>Light Requirement</th>
                                <td>Full sun; moderate to light shade</td>
                            </tr>

                            <tr>
                                <th>Soil Tolerance</th>
                                <td>Acidic to alkaline; clay to sandy; seasonally saturated to seasonally dry</td>
                            </tr>

                            <tr>
                                <th>Drought Tolerance</th>
                                <td>Medium</td>
                            </tr>

                            <tr>
                                <th>Salt Tolerance</th>
                                <td>High</td>
                            </tr>

                            <tr>
                                <th>Wind Tolerance</th>
                                <td>High</td>
                            </tr>

                        </table>

                    </div>

                </div>

                <div class = "ttl_plant_location_container">
                    <div class = "ttl_plant_location_title_container">

                        <svg fill = "#ffffff" viewBox = "-3.2 -3.2 38.40 38.40" version = "1.1" xmlns = "http://www.w3.org/2000/svg" class = "ttl_globe_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g> <path d = "M19.063 8.094c2.063 2.063 3.344 4.875 3.344 7.906 0 3.063-1.281 5.813-3.344 7.875s-4.844 3.313-7.875 3.313c-3.063 0-5.813-1.25-7.875-3.313s-3.313-4.813-3.313-7.875c0-3.031 1.25-5.844 3.313-7.906s4.813-3.313 7.875-3.313c3.031 0 5.813 1.25 7.875 3.313zM12.469 22.313h0.063c0.094 0 0.188 0.031 0.25 0.125 0.063 0.063 0.125 0.125 0.25 0.125 0.031 0 0.063-0.031 0.063-0.094 0-0.125 0.031-0.25 0.031-0.281 0.031-0.094 0.094-0.094 0.156-0.094 0.031 0 0.031 0 0.031-0.063l-0.063-0.063c-0.031 0-0.063 0.031-0.063 0.063-0.031 0.031-0.063 0.063-0.094 0l-0.188 0.125-0.219-0.063-0.375-0.563 0.125-0.813c0-0.031-0.031-0.094-0.125-0.125s-0.094-0.094-0.063-0.125c-0.125-0.063-0.281-0.125-0.469-0.125-0.031 0-0.125 0.031-0.281 0.063-0.156 0-0.25 0-0.25-0.063 0-0.094 0.094-0.281 0.156-0.5 0.031-0.094 0.063-0.25 0.094-0.313 0-0.063 0.031-0.125 0.031-0.125l0.156-0.375-0.031-0.063-0.219-0.031c-0.063 0-0.281 0.125-0.438 0.25-0.156 0.188-0.281 0.344-0.281 0.469l-0.625 0.125c-0.125 0-0.25-0.031-0.344-0.156-0.031-0.156-0.125-0.344-0.25-0.531-0.125-0.156-0.156-0.313-0.156-0.469 0-0.188 0.031-0.438 0.094-0.594 0.063-0.188 0.063-0.406-0.063-0.594 0.031 0 0.125-0.063 0.063-0.125l0.156-0.188 0.031-0.031 0.031 0.031c0.125-0.094 0.344-0.125 0.531-0.094 0.219 0.031 0.344-0.063 0.406-0.219l0.219 0.219c0.063 0.031 0.188-0.188 0.188-0.25l-0.094-0.063 0.563-0.125 0.031 0.063h0.25l0.313 0.188c0.031 0 0.063-0.031 0.094-0.063 0.063-0.063 0.094-0.063 0.125-0.031l0.281 0.313c-0.031 0.063-0.031 0.125-0.031 0.188 0.031 0.031 0.063 0.063 0.063 0.094 0 0.125 0.281 0.688 0.438 0.688 0.094 0 0.125-0.063 0.094-0.188v-0.25c0-0.156-0.031-0.344-0.094-0.531-0.094-0.156-0.156-0.375-0.219-0.563v-0.063c0-0.094 0.063-0.188 0.188-0.25 0.094-0.063 0.156-0.125 0.156-0.125 0.094-0.063 0.188-0.156 0.313-0.219 0.094-0.063 0.188-0.219 0.25-0.313l0.094-0.219v-0.125h0.094s0.063-0.031 0.063-0.094c0 0-0.031-0.031-0.063-0.031-0.031-0.031-0.125-0.094-0.188-0.156l0.063-0.063c0.094-0.094 0.125-0.313 0.063-0.406l0.25-0.125c-0.063 0.125 0.125 0.156 0.188 0.125l0.125-0.281c-0.063-0.156-0.094 0 0-0.188 0.094-0.031 0.188-0.063 0.281-0.125 0.094-0.031 0.156-0.063 0.25-0.063 0.031 0 0.063 0.031 0.063 0.031 0.063 0 0.094-0.031 0.094-0.031 0-0.094-0.031-0.156-0.063-0.156l0.156-0.344c0.125 0 0.25-0.063 0.313-0.188l0.25-0.031c0.063 0 0.094-0.031 0.094-0.094v-0.063l0.469-0.125 0.063-0.156-0.125-0.188s0.031-0.031 0.031-0.063-0.031-0.063-0.063-0.094c-0.031 0-0.063-0.031-0.094-0.031-0.031-0.031-0.063-0.063-0.094-0.063h0.25s0.125-0.031 0.125-0.125c0-0.125-0.063-0.156-0.188-0.156-0.344 0-0.875 0.125-1.063 0.5l-0.188 0.094 0.25-0.25 0.031-0.063c0-0.031-0.031-0.063-0.094-0.094h-0.094c0.313 0 0.5-0.094 0.625-0.188 0.094-0.094 0.188-0.188 0.406-0.25 0.219 0.031 0.438 0.031 0.656 0.031 0.188-0.031 0.375-0.031 0.594-0.031 0.094-0.063 0.219-0.188 0.281-0.313l0.313-0.031c0.063 0.063 0.281-0.094 0.281-0.188s-0.031-0.125-0.125-0.156-0.188-0.094-0.188-0.188v-0.094c0.031-0.031 0-0.063-0.031-0.063-0.125 0-0.438 0.156-0.531 0.219-0.063 0.063-0.094-0.031-0.094-0.094l0.031 0.031 0.125-0.063 0.313-0.125 0.031-0.031c0-0.125-0.188-0.156-0.25-0.156-0.031 0-0.094 0.031-0.156 0.063-0.063 0-0.125 0-0.125-0.063l0.031-0.063c-0.219-0.156-0.406-0.469-0.406-0.563v-0.125c0.031-0.031 0-0.031-0.063-0.031h-0.094c-0.031 0.031-0.063 0-0.063-0.063s-0.125-0.406-0.281-0.406l-0.094 0.094c0 0.063-0.031 0.094-0.094 0.125s-0.094 0.063-0.094 0.094h-0.031l-0.313 0.188c0-0.063-0.031-0.063-0.063-0.031-0.031 0-0.031 0.031-0.094 0.031h-0.063c0.156 0 0.125-0.219 0-0.219l-0.25 0.031c-0.063 0-0.063 0 0-0.063 0.031-0.063 0.094-0.125 0.031-0.188 0-0.063-0.031-0.063-0.063-0.031l0.063-0.094c0.063-0.031-0.031-0.156-0.094-0.219l-0.281-0.031-0.188-0.188c-0.031 0.031-0.063 0-0.125-0.031-0.031-0.031-0.094-0.094-0.125-0.094l-0.219 0.094-0.563-0.125c-0.063 0-0.156 0.031-0.156 0.125 0 0.031 0 0.063 0.031 0.063 0.063 0.031 0.063 0.063 0.063 0.094s0.031 0.156 0.063 0.313c0 0.156 0 0.219-0.094 0.188l-0.125 0.188c0 0.063 0.063 0.094 0.094 0.094 0.094 0.063 0.188 0.156 0.25 0.25 0.063 0.063 0.063 0.156 0.031 0.25l-0.594 0.469v0.031c0 0.094 0 0.156 0.031 0.219 0.063 0.063 0.063 0.156 0.125 0.25 0.156 0.063 0.156 0.125 0.031 0.188-0.063 0-0.125 0.031-0.188 0.063l-0.063 0.063c0 0.031-0.031 0.031-0.063 0.031h-0.156s0-0.031 0.031-0.031c0 0 0.031-0.031 0.031-0.063l-0.281-0.156-0.125-0.219c0.031-0.094 0.031-0.156 0-0.188s-0.031-0.094-0.031-0.156-0.063-0.219-0.188-0.219c-0.156 0-0.281 0.031-0.438 0.063 0.063-0.031-0.063-0.188-0.094-0.188-0.156 0-0.344-0.063-0.563-0.188s-0.375-0.188-0.5-0.188c-0.094 0-0.281 0.031-0.406 0.094 0.063-0.031 0.063-0.063 0.094-0.156l-0.188-0.313-0.031-0.031c-0.063 0-0.125 0.031-0.188 0.094-0.063 0.031-0.156 0-0.156-0.125 0-0.031 0.031-0.063 0.031-0.063 0.031-0.031 0.031-0.031 0-0.063 0-0.094 0.031-0.188 0.125-0.281 0.063-0.063 0.094-0.188 0.125-0.281 0.063-0.031 0.063-0.063 0.063-0.094 0-0.063 0.031-0.063 0.063-0.063 0.063 0 0.156-0.031 0.219-0.063 0.063-0.063 0.125-0.094 0.219-0.094l0.031-0.094c0-0.031-0.094-0.063-0.281-0.094-0.219-0.031-0.313-0.031-0.313-0.094l0.031-0.031c0.188 0.063 0.344 0.094 0.438 0.094 0.188 0.031 0.281-0.031 0.469-0.125 0.063-0.031 0.25-0.094 0.406-0.188 0-0.031-0.031-0.031-0.125-0.063h0.125l0.219-0.125v-0.125l-0.063-0.063 0.313-0.063c-0.031-0.063 0.031-0.094 0.063-0.094 0.063 0 0.125 0.031 0.188 0.094s0.094 0.063 0.125 0.063l0.281-0.094c0-0.031 0.031-0.031 0.094-0.031 0.063-0.031 0.094-0.063 0.063-0.094l-0.219-0.219c-0.063 0-0.094-0.094-0.031-0.094 0.094 0 0.156-0.031 0.094-0.125-0.063-0.031-0.156-0.094-0.25-0.125-0.094-0.063-0.188-0.094-0.281-0.094-0.063 0-0.188 0.031-0.188 0.125 0 0.063 0.031 0.063 0.063 0.063 0.063 0 0.094 0.031 0.094 0.063 0.063 0.031 0.031 0.063-0.031 0.063h-0.063c-0.063 0-0.156 0.063-0.219 0.188-0.063 0.094-0.156 0.188-0.25 0.219-0.031 0-0.031 0-0.031-0.031 0.031-0.031 0-0.031 0-0.063-0.031-0.031-0.063-0.063-0.094-0.063-0.063-0.031-0.125-0.031-0.125-0.063 0-0.063 0.063-0.094 0.125-0.188 0.031-0.094-0.063-0.125-0.219-0.125-0.063 0-0.125 0.031-0.156 0.094-0.031 0.031-0.063 0.094-0.094 0.156l-0.313-0.344-0.25-0.031c0-0.063 0.031-0.125 0.063-0.188 0.063-0.125-0.188-0.281-0.281-0.375-0.031 0-0.094-0.031-0.156-0.031-0.031 0-0.219 0.156-0.344 0.219-0.063 0.031-0.094 0.063-0.094 0.094 0 0.063 0.063 0.063 0.156 0.063h-0.031c-0.063 0-0.094 0.031-0.094 0.125 0 0.031 0.25 0.094 0.313 0.094s0.125 0 0.125 0.031c0.031 0.031 0.031 0.031 0.094 0.031l0.094-0.031v0.063s-0.031 0.063-0.031 0.063l0.031 0.094-0.313 0.156-0.031 0.031c-0.031 0-0.063 0-0.063 0.031s0 0.094 0.063 0.156c0.031 0.063 0 0.094-0.156 0.094l-0.094-0.063c0-0.063-0.063-0.125-0.219-0.188-0.281-0.094-0.781-0.125-1.219-0.125-0.219-0.031-0.375-0.031-0.5-0.031l-0.469 0.156 0.125 0.25c-0.031 0-0.094 0.031-0.094 0.031-0.125-0.094-0.313-0.281-0.375-0.281l-0.219-0.031c-0.688 0.031-1.5 0.688-2.281 1.469s-1.469 1.656-1.813 2.188h0.063c0.063 0 0.094-0.031 0.188-0.063 0.063-0.031 0.094 0.031 0.094 0.125 0 0.063 0 0.094-0.031 0.156s0.031 0.094 0.156 0.094c0.031 0 0.063-0.031 0.063-0.094 0.031-0.063 0.031-0.063 0.031 0l0.063 0.219v0.031c0 0.031-0.031 0.063-0.063 0.094-0.094 0.031 0 0.125 0.094 0.125h0.156l0.063-0.031 0.031-0.031c0 0.125 0.125 0.156 0.219 0.156h0.031s-0.031 0.063-0.063 0.094c-0.063 0-0.063 0.031 0 0.063l0.313 0.063v0.031l0.188 0.406c0 0.063-0.063 0.219-0.125 0.219s-0.063-0.031-0.063-0.063c0.031 0 0.031-0.031 0.031-0.094 0-0.031-0.031-0.063-0.031-0.094-0.031-0.031-0.094-0.031-0.219-0.031-0.031 0-0.125 0-0.063 0.094l0.156 0.344 0.063 0.063c-0.188 0-0.219 0.625-0.219 0.813l0.031 0.25 0.031 0.094v0.031l-0.031 0.281 0.375 0.625h0.094c0 0.031 0 0.063-0.031 0.094s-0.031 0.063-0.031 0.125l0.125 0.094c0 0.188 0.063 0.219 0.219 0.375 0 0.094 0.125 0.219 0.313 0.344 0.219 0.094 0.344 0.156 0.406 0.188 0.125 0.438 0.344 0.906 0.656 1.188l0.031 0.188-0.063 0.063c-0.063 0-0.063 0.031-0.031 0.063l0.25 0.125c0.063-0.063 0.094 0 0.156 0.094 0.063 0.125 0.094 0.188 0.125 0.219v0.094l0.156 0.219 0.063 0.063 0.063-0.156c-0.063-0.156-0.281-0.5-0.469-0.781-0.094-0.156-0.188-0.313-0.281-0.438-0.063-0.094-0.094-0.156-0.094-0.188s-0.031-0.375-0.063-0.438c0.031 0.031 0.125 0.063 0.188 0.094 0.094 0.031 0.188 0.063 0.25 0.094 0.031 0.25 0.125 0.438 0.281 0.594 0.125 0.125 0.25 0.281 0.344 0.469-0.063 0.063 0.063 0.063 0.125 0.063 0.031 0.063 0.031 0.094 0.031 0.219 0.281 0.281 0.844 0.938 0.844 1.219v0.031l-0.063 0.188c0.125 0.281 0.406 0.5 0.688 0.594h0.063c0.156 0.094 0.375 0.188 0.594 0.281 0.188 0.125 0.375 0.219 0.563 0.281l0.313-0.188c0.156 0.031 0.344 0.188 0.563 0.375s0.5 0.406 0.875 0.469c0.125-0.094 0.188-0.063 0.188 0.063v0.063l0.344 0.406 0.063 0.188c0.188 0.125 0.406 0.313 0.5 0.531zM8.438 6.594l-0.031-0.063c-0.063-0.031-0.219-0.094-0.281-0.094-0.031 0-0.094 0.031-0.219 0.063-0.219 0.125-0.563 0.219-0.813 0.344-0.125 0.063-0.219 0.094-0.281 0.094 0.125 0 0.25-0.031 0.375-0.094 0.094-0.063 0.219-0.094 0.344-0.094l0.094 0.063c0.063 0.031 0.094 0.031 0.156 0.031 0.031 0 0.063 0 0.125 0.063 0.063-0.031 0.125-0.031 0.219 0.031l0.094-0.063v-0.125l-0.031-0.063 0.063 0.031c0.063 0 0.125-0.031 0.188-0.125zM13.156 24.906l0.031 0.188c0 0.063-0.031 0.063-0.063 0.125-0.094 0.063-0.25 0.156-0.25 0.344 0 0.031 0.031 0.063 0.031 0.125 0.031 0.031 0.063 0.063 0.063 0.125 0 0.031-0.031 0.063-0.031 0.094 2.156-0.375 4.094-1.406 5.594-3h-0.031c-0.063 0.031-0.156 0.031-0.188 0l-0.094 0.031-0.156-0.031h-0.094c-0.063-0.094-0.125-0.156-0.219-0.219l-0.031-0.031c-0.031 0-0.063 0-0.063 0.063 0-0.281-0.219-0.531-0.469-0.531 0 0.031-0.031 0.031-0.031 0.031h-0.063l-0.063-0.031h0.094l0.063-0.188-0.156-0.094-0.031 0.031c-0.125-0.031-0.219-0.094-0.281-0.219l-0.094-0.031v0.031l-0.063 0.031c-0.125 0.031-0.219 0.063-0.281 0.094-0.125-0.031-0.219-0.094-0.25-0.125l-0.375 0.031c0-0.125-0.063-0.281-0.219-0.281-0.188 0-0.438 0-0.5 0.219 0 0.063 0.031 0.156 0.063 0.188v0.125l-0.031 0.063-0.031 0.031h-0.031l-0.094-0.219 0.094-0.125c-0.031-0.063-0.031-0.094-0.031-0.156s-0.031-0.094-0.031-0.156l-0.031-0.031h-0.094l-0.188 0.125h-0.125l-0.031 0.063c-0.031 0-0.031 0.031-0.031 0.063 0 0-0.031 0-0.031 0.031l-0.031-0.031h-0.125c-0.063 0.063-0.094 0.156-0.125 0.25l0.063 0.063-0.156 0.063-0.031 0.063-0.094 0.063v0.031h-0.031v0.156h-0.031c-0.031-0.125-0.125-0.25-0.313-0.344h-0.094v0.063c0 0.063 0.063 0.094 0.125 0.125 0.063 0.063 0.094 0.125 0.125 0.156-0.031-0.031-0.094 0-0.094 0.031v0.063l0.188 0.281v0.531l0.063 0.125c-0.063 0.156-0.125 0.313-0.219 0.406v-0.031l-0.063 0.031-0.031 0.031-0.031 0.125 0.031 0.031v0.031l-0.063-0.063-0.031 0.188-0.156 0.063c-0.063 0.031-0.094 0.063-0.063 0.156 0 0.063-0.031 0.094-0.094 0.125l0.031 0.063-0.063 0.094c0 0.031 0 0.063-0.031 0.063v0.125l0.031 0.219 0.063 0.031 0.063-0.031z"></path> </g></svg>

                        <p class = "ttl_plant_location_title">
                            Main Location - Caribbean Islands
                        </p>
                    </div>

                    <div class = "ttl_plant_location_content">
                        <div class = "ttl_google_map">
                            <iframe src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15511371.583800571!2d-82.95597164739584!3d18.34929380684071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb9e309d5a038b7%3A0xc67ecf32cac5dbdc!2sCaribbean!5e0!3m2!1sen!2smy!4v1697157997237!5m2!1sen!2smy"  style = "border:0;" allowfullscreen = "" loading = "lazy" referrerpolicy = "no-referrer-when-downgrade"></iframe>
                    
                        </div>
                    </div>

                </div>
            </div>

            <a href = "#ttl_identify_page" class = "ttl_link-2"></a>
        </div>
    </div>

    <div class = "ttl_modal_container" id = "ttl_gumbo_limbo_info">
        <div class = "ttl_modal">
            <p class = "ttl_modal_title">Gumbo-limbo <br> <em>Bursera simaruba</em></p>
            <div class = "ttl_modal_content">
                
                <div class = "ttl_plant_img_gallery_container">
                    <div class = "ttl_plant_gallery">
                        <img src = "styles/images/ttl/ttl_gumbo_limbo.png" alt = "Gumbo-limbo bark">
                        <img src = "styles/images/ttl/ttl_gumbo_limbo2.jpg" alt = "Gumbo-limbo fruits">
                        <img src = "styles/images/ttl/ttl_gumbo_limbo3.jpeg" alt = "Gumbo-limbo tree">
                        <img src = "styles/images/ttl/ttl_gumbo_limbo4.png" alt = "Gumbo-limbo Flower">
                    </div>
                </div>

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

                    <!--Info from PictureThis-->
                    <p class = "ttl_plant_about_content">
                        Also known as: Chaca, Turpentine tree, West Indian birch, Tourist tree <br> <br>
                        Commonly known as the gumbo-limbo, the Bursera simaruba tree grows to about 30 m tall with a shiny dark red bark with spirally arranged leaves and pinnate with 7-11 leaflets. It produces a small, three-valved capsule with a single seed as the fruit which birds seek out to feed on. 
                        The gumbo-limbo is believed to be one of the most wind-tolerant trees and is planted to provide wind protection for crops and roads.
                    </p>

                    <div class = "ttl_youtube_video_container">
                        <iframe class = "ttl_youtube_video" src = "https://www.youtube.com/embed/yvcdIYQXlsE?si=OnpRQM5FPnutu-Fy" title = "YouTube video player" allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                </div>

                <div class = "ttl_plant_care_container">

                    <div class = "ttl_plant_care_title_container">

                        <svg viewBox = "-2.4 -2.4 28.80 28.80" fill = "none" xmlns = "http://www.w3.org/2000/svg" stroke = "#ffffff" class = "ttl_plant_care_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g > <path d = "M22 4.67019V16.7402C22 17.7002 21.22 18.6002 20.26 18.7202L19.93 18.7602C17.75 19.0502 14.39 20.1602 12.47 21.2202C12.21 21.3702 11.78 21.3702 11.51 21.2202L11.47 21.2002C9.54997 20.1502 6.20003 19.0502 4.03003 18.7602L3.73999 18.7202C2.77999 18.6002 2 17.7002 2 16.7402V4.66018C2 3.47018 2.96997 2.57019 4.15997 2.67019C6.25997 2.84019 9.43997 3.90022 11.22 5.01022L11.47 5.16018C11.76 5.34018 12.24 5.34018 12.53 5.16018L12.7 5.05019C13.33 4.66019 14.13 4.27019 15 3.92019C16.31 3.40019 17.77 2.98024 19 2.78024C19.27 2.73024 19.53 2.7002 19.77 2.6802H19.83C21.02 2.5802 22 3.47019 22 4.67019Z" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> <path opacity = "0.4" d = "M12 5.49023V20.4902" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> <path opacity = "0.4" d = "M19 2.78027V8.00024L17 6.67023L15 8.00024V3.92023C16.31 3.40023 17.77 2.98027 19 2.78027Z" stroke = "#ffffff" stroke-width = "1.5" stroke-linecap = "round" stroke-linejoin = "round"></path> </g></svg>

                        <p class = "ttl_plant_care_title">
                            Cultivation Advice 
                        </p> 
                    </div>

                </div>

                <div class = "ttl_plant_care_card_container">
                    <!--Info from PictureThis-->
                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg viewBox = "-12.8 -12.8 89.60 89.60" xmlns = "http://www.w3.org/2000/svg" fill = "#000000" class = "ttl_water_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g > <g fill = "none" fill-rule = "evenodd"> <path fill = "#B4DFFB" d = "M26.6995662,63 C36.4747667,63 44.3991324,55.0756343 44.3991324,45.3004338 C44.3991324,35.5252333 26.6995662,9 26.6995662,9 C26.6995662,9 9,35.5252333 9,45.3004338 C9,55.0756343 16.9243657,63 26.6995662,63 Z"></path> <path fill = "#4796E7" d = "M41.1107898,41 C48.351679,41 54.2215796,35.1300995 54.2215796,27.8892102 C54.2215796,20.648321 41.1107898,1 41.1107898,1 C41.1107898,1 28,20.648321 28,27.8892102 C28,35.1300995 33.8699005,41 41.1107898,41 Z"></path> <path stroke = "#B4DFFB" stroke-linecap = "round" stroke-width = "2" d = "M32,28 C32,32.9705627 36.0294373,37 41,37 L41,37"></path> <path stroke = "#FFF" stroke-linecap = "round" stroke-width = "2" d = "M13,46 C13,52.627417 18.372583,58 25,58 L25,58"></path> </g> </g></svg>
                            <p class = "ttl_plant_care_card_title">Water</p>
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                The gumbo-limbo prefers well-drained soil conditions, with moderate watering requirements. Its native growing environment is semi-arid habitats, so avoid overwatering. 
                                During dormant seasons, reduce the watering frequency to prevent root rot.
                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg viewBox = "-6.4 -6.4 76.80 76.80" xmlns = "http://www.w3.org/2000/svg" xmlns:xlink = "http://www.w3.org/1999/xlink" aria-hidden = "true" role = "img" class = "ttl_sun_icon" preserveAspectRatio = "xMidYMid meet" fill = "#000000"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g > <g fill = "#ffe62e"> <path d = "M20.5 59.7l7-7.2c-2.5-.5-4.8-1.5-6.9-2.9l-.1 10.1"> </path> <path d = "M43.5 4.3l-7 7.2c2.5.5 4.8 1.5 6.9 2.9l.1-10.1"> </path> <path d = "M4.3 43.5l10.1-.1C13 41.3 12 39 11.5 36.5l-7.2 7"> </path> <path d = "M59.7 20.5l-10.1.1c1.3 2.1 2.3 4.4 2.9 6.9l7.2-7"> </path> <path d = "M4.3 20.5l7.2 7c.5-2.5 1.5-4.8 2.9-6.9l-10.1-.1"> </path> <path d = "M59.7 43.5l-7.2-7c-.5 2.5-1.5 4.8-2.9 6.9l10.1.1"> </path> <path d = "M20.5 4.3l.1 10.1c2.1-1.3 4.4-2.3 6.9-2.9l-7-7.2"> </path> <path d = "M43.5 59.7l-.1-10.1C41.3 51 39 52 36.5 52.5l7 7.2"> </path> </g> <g fill = "#ffce31"> <path d = "M14.8 44l-4 9.3l9.3-4C18 47.8 16.2 46 14.8 44"> </path> <path d = "M49.2 20l4-9.3l-9.2 4c2 1.5 3.8 3.3 5.2 5.3"> </path> <path d = "M11.4 28.3L2 32l9.4 3.7c-.3-1.2-.4-2.4-.4-3.7s.1-2.5.4-3.7"> </path> <path d = "M52.6 35.7L62 32l-9.4-3.7c.2 1.2.4 2.5.4 3.7c0 1.3-.1 2.5-.4 3.7"> </path> <path d = "M20 14.8l-9.3-4l4 9.3c1.5-2.1 3.3-3.9 5.3-5.3"> </path> <path d = "M44 49.2l9.3 4l-4-9.3C47.8 46 46 47.8 44 49.2"> </path> <path d = "M35.7 11.4L32 2l-3.7 9.4c1.2-.2 2.5-.4 3.7-.4s2.5.1 3.7.4"> </path> <path d = "M28.3 52.6L32 62l3.7-9.4c-1.2.3-2.4.4-3.7.4s-2.5-.1-3.7-.4"> </path> <circle cx = "32" cy = "32" r = "19"> </circle> </g> </g></svg>
                            <p class = "ttl_plant_care_card_title">Lighting</p>
                            <p class = "ttl_plant_care_card_text">Full sun</p>
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                Gumbo-limbo is a sun-loving plant that appreciates generous light exposure for optimal growth. 
                                Originating from ecosystems where it receives ample light, it can withstand sun-limited conditions as well, 
                                although it may affect its overall health and growth. Unregulated light exposure can lead to stress, impacting its wellness.

                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <svg version = "1.1"  xmlns = "http://www.w3.org/2000/svg" xmlns:xlink = "http://www.w3.org/1999/xlink" viewBox = "-51.2 -51.2 614.40 614.40" xml:space = "preserve" fill = "#000000" class = "ttl_pruning_icon"><g stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g> <path style = "fill:#BAC6CC;" d = "M316.786,272.605c0,0,90.58-102.332,39.097-192.453c0,0-80.455,28.352-101.809,106.301"></path> <path style = "fill:#CFDCE5;" d = "M355.87,80.168c-0.412,1.515-26.839,97.083-84.178,130.489l-17.618-24.21 C275.255,109.105,354.634,80.606,355.87,80.168z"></path> <path style = "fill:#FF6F52;" d = "M322.845,266.547l150.99,156.349c18.267,18.915,18.853,48.717,1.344,68.336l0,0 c-19.447,21.79-53.314,22.457-73.604,1.448L199.482,283.416"></path> <path style = "fill:#E25749;" d = "M437.927,492.678L235.835,283.415l91.251-12.477l-4.241-4.391l-123.362,16.868l202.092,209.263 c14.562,15.079,36.119,18.99,54.319,11.941C449.322,502.076,443.169,498.107,437.927,492.678z"></path> <path style = "fill:#FF6F52;" d = "M252.596,335.163v0.012l-1.49,1.696l-23.01,26.149L112,494.939 c-17.364,19.751-47.027,22.756-68.014,6.907c-17.97-13.62-24.113-36.836-17.073-56.805c2.084-5.877,5.295-11.475,9.682-16.455 l121.632-138.244l22.865-25.979L252.596,335.163z"></path> <path style = "fill:#E25749;" d = "M80.342,501.845c-17.97-13.62-24.113-36.836-17.073-56.805c2.084-5.877,5.295-11.475,9.682-16.455 L194.582,290.34l5.936-6.744l-19.426-19.235l-22.865,25.979L36.595,428.585c-4.386,4.98-7.597,10.578-9.682,16.455 c-7.04,19.969-0.897,43.185,17.073,56.805c14.337,10.828,32.721,12.849,48.469,6.752C88.217,506.951,84.136,504.712,80.342,501.845z "></path> <path style = "fill:#CFDCE5;" d = "M260.132,180.395c-7.62-18.025-11.844-37.836-11.844-58.636c0-48.647,23.056-91.902,58.83-119.458 c-47.24-8.331-97.688,5.957-133.913,42.883c-57.366,58.479-57.189,153.145,0.384,211.419l80.309,83.159l68.947-73.214 C322.845,266.547,274.251,207.422,260.132,180.395z"></path> <path style = "fill:#E25749;" d = "M252.596,335.163v0.012l-1.49,1.696l-23.01,26.149l-62.985-65.214 c-2.399-2.423-4.689-4.92-6.883-7.464l22.865-25.979L252.596,335.163z"></path> <circle style = "fill:#314A5F;" cx = "251.08" cy = "262.445" r = "19.484"></circle> </g></svg>
                            <p class = "ttl_plant_care_card_title">Pruning</p>
                            
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                Despite having a relatively fast habit of growth, Gumbo-limbo does not require very much pruning. It is not necessary to routinely prune this tree, however, it does require some pruning every once in a while. 
                                Pruning can be done to tidy this tree up and remove any diseased or damaged foliage or Gumbo-limbo can be pruned for shaping.
                            </p>
                        </div>
                    </div>

                    <div class = "ttl_plant_care_card">
                        <div class = "ttl_plant_care_card_left">
                            <img src = "styles/images/ttl/ttl_fertilizer.png" alt = "fertilizer icon" class = "ttl_fertilizer_icon">
                            <p class = "ttl_plant_care_card_title">Fertilizer</p>
                            
                        </div>

                        <div class = "ttl_plant_care_card_right">
                            <p class = "ttl_plant_care_card_description">
                                The primary reason why Gumbo-limbo needs regular fertilization is that they have showy leaves that require a lot of energy to produce and maintain. 
                                The challenge is that your Gumbo-limbo must not only allot enough energy to keep its leaves in good shape, but it must also find enough energy to support the growth of its stems, branches, roots, and all its other vital structures. If you neglect fertilization, there are two outcomes that are likely to take place. 
                                The first is that the leaves of your Gumbo-limbo will begin to lose their natural color or texture while looking somewhat unhealthy overall, which detracts greatly from its ornamental appeal. 
                                The other outcome is that your Gumbo-limbo will begin to slow its growth overall or produce weak growth that could be prone to breakage.
                            </p>
                        </div>
                    </div>

                </div>

                <div class = "ttl_plant_environment_container">
                    <div class = "ttl_plant_environment_title_container">

                        <svg viewBox = "-3 -3 21.00 21.00" fill = "none" xmlns = "http://www.w3.org/2000/svg" stroke = "#ffffff" class = "ttl_plant_environment_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g > <path d = "M7.5 15V7M7.5 7.5V10.5M7.5 7.5C7.5 5.29086 5.70914 3.5 3.5 3.5H0.5V6.5C0.5 8.70914 2.29086 10.5 4.5 10.5H7.5M7.5 7.5H10.5C12.7091 7.5 14.5 5.70914 14.5 3.5V0.5H11.5C9.29086 0.5 7.5 2.29086 7.5 4.5V7.5ZM7.5 7.5L11.5 3.5M7.5 10.5L3.5 6.5" stroke = "#ffffff"></path> </g></svg>

                        <p class = "ttl_plant_environment_title">
                            Right Environment For Plant
                        </p>
                    </div>

                    <div class = "ttl_plant_environment_content">
                        <!--Info from University of Florida (https://edis.ifas.ufl.edu/publication/ST104)-->
                        <table class = "ttl_plant_environment_table">

                            <tr>
                                <th>Light Requirements</th>
                                <td>Full sun to partial shade</td>
                            </tr>

                            <tr>
                                <th>Soil Tolerance</th>
                                <td>Clay; sand; loam; acidic; alkaline; well-drained</td>
                            </tr>

                            <tr>
                                <th>Drought Tolerance</th>
                                <td>High</td>
                            </tr>

                            <tr>
                                <th>Aerosol Salt Tolerance</th>
                                <td>High</td>
                            </tr>


                        </table>

                    </div>

                </div>

                <div class = "ttl_plant_location_container">
                    <div class = "ttl_plant_location_title_container">

                        <svg fill = "#ffffff" viewBox = "-3.2 -3.2 38.40 38.40" version = "1.1" xmlns = "http://www.w3.org/2000/svg" class = "ttl_globe_icon"><g  stroke-width = "0"></g><g  stroke-linecap = "round" stroke-linejoin = "round"></g><g > <path d = "M19.063 8.094c2.063 2.063 3.344 4.875 3.344 7.906 0 3.063-1.281 5.813-3.344 7.875s-4.844 3.313-7.875 3.313c-3.063 0-5.813-1.25-7.875-3.313s-3.313-4.813-3.313-7.875c0-3.031 1.25-5.844 3.313-7.906s4.813-3.313 7.875-3.313c3.031 0 5.813 1.25 7.875 3.313zM12.469 22.313h0.063c0.094 0 0.188 0.031 0.25 0.125 0.063 0.063 0.125 0.125 0.25 0.125 0.031 0 0.063-0.031 0.063-0.094 0-0.125 0.031-0.25 0.031-0.281 0.031-0.094 0.094-0.094 0.156-0.094 0.031 0 0.031 0 0.031-0.063l-0.063-0.063c-0.031 0-0.063 0.031-0.063 0.063-0.031 0.031-0.063 0.063-0.094 0l-0.188 0.125-0.219-0.063-0.375-0.563 0.125-0.813c0-0.031-0.031-0.094-0.125-0.125s-0.094-0.094-0.063-0.125c-0.125-0.063-0.281-0.125-0.469-0.125-0.031 0-0.125 0.031-0.281 0.063-0.156 0-0.25 0-0.25-0.063 0-0.094 0.094-0.281 0.156-0.5 0.031-0.094 0.063-0.25 0.094-0.313 0-0.063 0.031-0.125 0.031-0.125l0.156-0.375-0.031-0.063-0.219-0.031c-0.063 0-0.281 0.125-0.438 0.25-0.156 0.188-0.281 0.344-0.281 0.469l-0.625 0.125c-0.125 0-0.25-0.031-0.344-0.156-0.031-0.156-0.125-0.344-0.25-0.531-0.125-0.156-0.156-0.313-0.156-0.469 0-0.188 0.031-0.438 0.094-0.594 0.063-0.188 0.063-0.406-0.063-0.594 0.031 0 0.125-0.063 0.063-0.125l0.156-0.188 0.031-0.031 0.031 0.031c0.125-0.094 0.344-0.125 0.531-0.094 0.219 0.031 0.344-0.063 0.406-0.219l0.219 0.219c0.063 0.031 0.188-0.188 0.188-0.25l-0.094-0.063 0.563-0.125 0.031 0.063h0.25l0.313 0.188c0.031 0 0.063-0.031 0.094-0.063 0.063-0.063 0.094-0.063 0.125-0.031l0.281 0.313c-0.031 0.063-0.031 0.125-0.031 0.188 0.031 0.031 0.063 0.063 0.063 0.094 0 0.125 0.281 0.688 0.438 0.688 0.094 0 0.125-0.063 0.094-0.188v-0.25c0-0.156-0.031-0.344-0.094-0.531-0.094-0.156-0.156-0.375-0.219-0.563v-0.063c0-0.094 0.063-0.188 0.188-0.25 0.094-0.063 0.156-0.125 0.156-0.125 0.094-0.063 0.188-0.156 0.313-0.219 0.094-0.063 0.188-0.219 0.25-0.313l0.094-0.219v-0.125h0.094s0.063-0.031 0.063-0.094c0 0-0.031-0.031-0.063-0.031-0.031-0.031-0.125-0.094-0.188-0.156l0.063-0.063c0.094-0.094 0.125-0.313 0.063-0.406l0.25-0.125c-0.063 0.125 0.125 0.156 0.188 0.125l0.125-0.281c-0.063-0.156-0.094 0 0-0.188 0.094-0.031 0.188-0.063 0.281-0.125 0.094-0.031 0.156-0.063 0.25-0.063 0.031 0 0.063 0.031 0.063 0.031 0.063 0 0.094-0.031 0.094-0.031 0-0.094-0.031-0.156-0.063-0.156l0.156-0.344c0.125 0 0.25-0.063 0.313-0.188l0.25-0.031c0.063 0 0.094-0.031 0.094-0.094v-0.063l0.469-0.125 0.063-0.156-0.125-0.188s0.031-0.031 0.031-0.063-0.031-0.063-0.063-0.094c-0.031 0-0.063-0.031-0.094-0.031-0.031-0.031-0.063-0.063-0.094-0.063h0.25s0.125-0.031 0.125-0.125c0-0.125-0.063-0.156-0.188-0.156-0.344 0-0.875 0.125-1.063 0.5l-0.188 0.094 0.25-0.25 0.031-0.063c0-0.031-0.031-0.063-0.094-0.094h-0.094c0.313 0 0.5-0.094 0.625-0.188 0.094-0.094 0.188-0.188 0.406-0.25 0.219 0.031 0.438 0.031 0.656 0.031 0.188-0.031 0.375-0.031 0.594-0.031 0.094-0.063 0.219-0.188 0.281-0.313l0.313-0.031c0.063 0.063 0.281-0.094 0.281-0.188s-0.031-0.125-0.125-0.156-0.188-0.094-0.188-0.188v-0.094c0.031-0.031 0-0.063-0.031-0.063-0.125 0-0.438 0.156-0.531 0.219-0.063 0.063-0.094-0.031-0.094-0.094l0.031 0.031 0.125-0.063 0.313-0.125 0.031-0.031c0-0.125-0.188-0.156-0.25-0.156-0.031 0-0.094 0.031-0.156 0.063-0.063 0-0.125 0-0.125-0.063l0.031-0.063c-0.219-0.156-0.406-0.469-0.406-0.563v-0.125c0.031-0.031 0-0.031-0.063-0.031h-0.094c-0.031 0.031-0.063 0-0.063-0.063s-0.125-0.406-0.281-0.406l-0.094 0.094c0 0.063-0.031 0.094-0.094 0.125s-0.094 0.063-0.094 0.094h-0.031l-0.313 0.188c0-0.063-0.031-0.063-0.063-0.031-0.031 0-0.031 0.031-0.094 0.031h-0.063c0.156 0 0.125-0.219 0-0.219l-0.25 0.031c-0.063 0-0.063 0 0-0.063 0.031-0.063 0.094-0.125 0.031-0.188 0-0.063-0.031-0.063-0.063-0.031l0.063-0.094c0.063-0.031-0.031-0.156-0.094-0.219l-0.281-0.031-0.188-0.188c-0.031 0.031-0.063 0-0.125-0.031-0.031-0.031-0.094-0.094-0.125-0.094l-0.219 0.094-0.563-0.125c-0.063 0-0.156 0.031-0.156 0.125 0 0.031 0 0.063 0.031 0.063 0.063 0.031 0.063 0.063 0.063 0.094s0.031 0.156 0.063 0.313c0 0.156 0 0.219-0.094 0.188l-0.125 0.188c0 0.063 0.063 0.094 0.094 0.094 0.094 0.063 0.188 0.156 0.25 0.25 0.063 0.063 0.063 0.156 0.031 0.25l-0.594 0.469v0.031c0 0.094 0 0.156 0.031 0.219 0.063 0.063 0.063 0.156 0.125 0.25 0.156 0.063 0.156 0.125 0.031 0.188-0.063 0-0.125 0.031-0.188 0.063l-0.063 0.063c0 0.031-0.031 0.031-0.063 0.031h-0.156s0-0.031 0.031-0.031c0 0 0.031-0.031 0.031-0.063l-0.281-0.156-0.125-0.219c0.031-0.094 0.031-0.156 0-0.188s-0.031-0.094-0.031-0.156-0.063-0.219-0.188-0.219c-0.156 0-0.281 0.031-0.438 0.063 0.063-0.031-0.063-0.188-0.094-0.188-0.156 0-0.344-0.063-0.563-0.188s-0.375-0.188-0.5-0.188c-0.094 0-0.281 0.031-0.406 0.094 0.063-0.031 0.063-0.063 0.094-0.156l-0.188-0.313-0.031-0.031c-0.063 0-0.125 0.031-0.188 0.094-0.063 0.031-0.156 0-0.156-0.125 0-0.031 0.031-0.063 0.031-0.063 0.031-0.031 0.031-0.031 0-0.063 0-0.094 0.031-0.188 0.125-0.281 0.063-0.063 0.094-0.188 0.125-0.281 0.063-0.031 0.063-0.063 0.063-0.094 0-0.063 0.031-0.063 0.063-0.063 0.063 0 0.156-0.031 0.219-0.063 0.063-0.063 0.125-0.094 0.219-0.094l0.031-0.094c0-0.031-0.094-0.063-0.281-0.094-0.219-0.031-0.313-0.031-0.313-0.094l0.031-0.031c0.188 0.063 0.344 0.094 0.438 0.094 0.188 0.031 0.281-0.031 0.469-0.125 0.063-0.031 0.25-0.094 0.406-0.188 0-0.031-0.031-0.031-0.125-0.063h0.125l0.219-0.125v-0.125l-0.063-0.063 0.313-0.063c-0.031-0.063 0.031-0.094 0.063-0.094 0.063 0 0.125 0.031 0.188 0.094s0.094 0.063 0.125 0.063l0.281-0.094c0-0.031 0.031-0.031 0.094-0.031 0.063-0.031 0.094-0.063 0.063-0.094l-0.219-0.219c-0.063 0-0.094-0.094-0.031-0.094 0.094 0 0.156-0.031 0.094-0.125-0.063-0.031-0.156-0.094-0.25-0.125-0.094-0.063-0.188-0.094-0.281-0.094-0.063 0-0.188 0.031-0.188 0.125 0 0.063 0.031 0.063 0.063 0.063 0.063 0 0.094 0.031 0.094 0.063 0.063 0.031 0.031 0.063-0.031 0.063h-0.063c-0.063 0-0.156 0.063-0.219 0.188-0.063 0.094-0.156 0.188-0.25 0.219-0.031 0-0.031 0-0.031-0.031 0.031-0.031 0-0.031 0-0.063-0.031-0.031-0.063-0.063-0.094-0.063-0.063-0.031-0.125-0.031-0.125-0.063 0-0.063 0.063-0.094 0.125-0.188 0.031-0.094-0.063-0.125-0.219-0.125-0.063 0-0.125 0.031-0.156 0.094-0.031 0.031-0.063 0.094-0.094 0.156l-0.313-0.344-0.25-0.031c0-0.063 0.031-0.125 0.063-0.188 0.063-0.125-0.188-0.281-0.281-0.375-0.031 0-0.094-0.031-0.156-0.031-0.031 0-0.219 0.156-0.344 0.219-0.063 0.031-0.094 0.063-0.094 0.094 0 0.063 0.063 0.063 0.156 0.063h-0.031c-0.063 0-0.094 0.031-0.094 0.125 0 0.031 0.25 0.094 0.313 0.094s0.125 0 0.125 0.031c0.031 0.031 0.031 0.031 0.094 0.031l0.094-0.031v0.063s-0.031 0.063-0.031 0.063l0.031 0.094-0.313 0.156-0.031 0.031c-0.031 0-0.063 0-0.063 0.031s0 0.094 0.063 0.156c0.031 0.063 0 0.094-0.156 0.094l-0.094-0.063c0-0.063-0.063-0.125-0.219-0.188-0.281-0.094-0.781-0.125-1.219-0.125-0.219-0.031-0.375-0.031-0.5-0.031l-0.469 0.156 0.125 0.25c-0.031 0-0.094 0.031-0.094 0.031-0.125-0.094-0.313-0.281-0.375-0.281l-0.219-0.031c-0.688 0.031-1.5 0.688-2.281 1.469s-1.469 1.656-1.813 2.188h0.063c0.063 0 0.094-0.031 0.188-0.063 0.063-0.031 0.094 0.031 0.094 0.125 0 0.063 0 0.094-0.031 0.156s0.031 0.094 0.156 0.094c0.031 0 0.063-0.031 0.063-0.094 0.031-0.063 0.031-0.063 0.031 0l0.063 0.219v0.031c0 0.031-0.031 0.063-0.063 0.094-0.094 0.031 0 0.125 0.094 0.125h0.156l0.063-0.031 0.031-0.031c0 0.125 0.125 0.156 0.219 0.156h0.031s-0.031 0.063-0.063 0.094c-0.063 0-0.063 0.031 0 0.063l0.313 0.063v0.031l0.188 0.406c0 0.063-0.063 0.219-0.125 0.219s-0.063-0.031-0.063-0.063c0.031 0 0.031-0.031 0.031-0.094 0-0.031-0.031-0.063-0.031-0.094-0.031-0.031-0.094-0.031-0.219-0.031-0.031 0-0.125 0-0.063 0.094l0.156 0.344 0.063 0.063c-0.188 0-0.219 0.625-0.219 0.813l0.031 0.25 0.031 0.094v0.031l-0.031 0.281 0.375 0.625h0.094c0 0.031 0 0.063-0.031 0.094s-0.031 0.063-0.031 0.125l0.125 0.094c0 0.188 0.063 0.219 0.219 0.375 0 0.094 0.125 0.219 0.313 0.344 0.219 0.094 0.344 0.156 0.406 0.188 0.125 0.438 0.344 0.906 0.656 1.188l0.031 0.188-0.063 0.063c-0.063 0-0.063 0.031-0.031 0.063l0.25 0.125c0.063-0.063 0.094 0 0.156 0.094 0.063 0.125 0.094 0.188 0.125 0.219v0.094l0.156 0.219 0.063 0.063 0.063-0.156c-0.063-0.156-0.281-0.5-0.469-0.781-0.094-0.156-0.188-0.313-0.281-0.438-0.063-0.094-0.094-0.156-0.094-0.188s-0.031-0.375-0.063-0.438c0.031 0.031 0.125 0.063 0.188 0.094 0.094 0.031 0.188 0.063 0.25 0.094 0.031 0.25 0.125 0.438 0.281 0.594 0.125 0.125 0.25 0.281 0.344 0.469-0.063 0.063 0.063 0.063 0.125 0.063 0.031 0.063 0.031 0.094 0.031 0.219 0.281 0.281 0.844 0.938 0.844 1.219v0.031l-0.063 0.188c0.125 0.281 0.406 0.5 0.688 0.594h0.063c0.156 0.094 0.375 0.188 0.594 0.281 0.188 0.125 0.375 0.219 0.563 0.281l0.313-0.188c0.156 0.031 0.344 0.188 0.563 0.375s0.5 0.406 0.875 0.469c0.125-0.094 0.188-0.063 0.188 0.063v0.063l0.344 0.406 0.063 0.188c0.188 0.125 0.406 0.313 0.5 0.531zM8.438 6.594l-0.031-0.063c-0.063-0.031-0.219-0.094-0.281-0.094-0.031 0-0.094 0.031-0.219 0.063-0.219 0.125-0.563 0.219-0.813 0.344-0.125 0.063-0.219 0.094-0.281 0.094 0.125 0 0.25-0.031 0.375-0.094 0.094-0.063 0.219-0.094 0.344-0.094l0.094 0.063c0.063 0.031 0.094 0.031 0.156 0.031 0.031 0 0.063 0 0.125 0.063 0.063-0.031 0.125-0.031 0.219 0.031l0.094-0.063v-0.125l-0.031-0.063 0.063 0.031c0.063 0 0.125-0.031 0.188-0.125zM13.156 24.906l0.031 0.188c0 0.063-0.031 0.063-0.063 0.125-0.094 0.063-0.25 0.156-0.25 0.344 0 0.031 0.031 0.063 0.031 0.125 0.031 0.031 0.063 0.063 0.063 0.125 0 0.031-0.031 0.063-0.031 0.094 2.156-0.375 4.094-1.406 5.594-3h-0.031c-0.063 0.031-0.156 0.031-0.188 0l-0.094 0.031-0.156-0.031h-0.094c-0.063-0.094-0.125-0.156-0.219-0.219l-0.031-0.031c-0.031 0-0.063 0-0.063 0.063 0-0.281-0.219-0.531-0.469-0.531 0 0.031-0.031 0.031-0.031 0.031h-0.063l-0.063-0.031h0.094l0.063-0.188-0.156-0.094-0.031 0.031c-0.125-0.031-0.219-0.094-0.281-0.219l-0.094-0.031v0.031l-0.063 0.031c-0.125 0.031-0.219 0.063-0.281 0.094-0.125-0.031-0.219-0.094-0.25-0.125l-0.375 0.031c0-0.125-0.063-0.281-0.219-0.281-0.188 0-0.438 0-0.5 0.219 0 0.063 0.031 0.156 0.063 0.188v0.125l-0.031 0.063-0.031 0.031h-0.031l-0.094-0.219 0.094-0.125c-0.031-0.063-0.031-0.094-0.031-0.156s-0.031-0.094-0.031-0.156l-0.031-0.031h-0.094l-0.188 0.125h-0.125l-0.031 0.063c-0.031 0-0.031 0.031-0.031 0.063 0 0-0.031 0-0.031 0.031l-0.031-0.031h-0.125c-0.063 0.063-0.094 0.156-0.125 0.25l0.063 0.063-0.156 0.063-0.031 0.063-0.094 0.063v0.031h-0.031v0.156h-0.031c-0.031-0.125-0.125-0.25-0.313-0.344h-0.094v0.063c0 0.063 0.063 0.094 0.125 0.125 0.063 0.063 0.094 0.125 0.125 0.156-0.031-0.031-0.094 0-0.094 0.031v0.063l0.188 0.281v0.531l0.063 0.125c-0.063 0.156-0.125 0.313-0.219 0.406v-0.031l-0.063 0.031-0.031 0.031-0.031 0.125 0.031 0.031v0.031l-0.063-0.063-0.031 0.188-0.156 0.063c-0.063 0.031-0.094 0.063-0.063 0.156 0 0.063-0.031 0.094-0.094 0.125l0.031 0.063-0.063 0.094c0 0.031 0 0.063-0.031 0.063v0.125l0.031 0.219 0.063 0.031 0.063-0.031z"></path> </g></svg>

                        <p class = "ttl_plant_location_title">
                            Main Location - Mexico
                        </p>
                    </div>

                    <div class = "ttl_plant_location_content">
                        <div class = "ttl_google_map">
                            <iframe src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15019432.505274387!2d-113.26928769261042!3d23.212003938019798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84043a3b88685353%3A0xed64b4be6b099811!2sMexico!5e0!3m2!1sen!2smy!4v1697162046978!5m2!1sen!2smy"  style = "border:0;" allowfullscreen = "" loading = "lazy" referrerpolicy = "no-referrer-when-downgrade"></iframe>
                    
                        </div>
                    </div>

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
