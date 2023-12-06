<?php
    session_start();
?>

<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta name = "author" content  = "Nicholas Sik">
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

        <div class = "nic_container">
            <div class = "nic_contact-box">
                <div class = "nic_left">
                    <div id = "nic_slideshow">
                        <div class = "nic_slide-wrapper">
                            <div class = "nic_slide"><img src = "styles/images/czy/apocynaceae/alstonia_angustifolia/1.jpeg" alt = "image.png"></div>
                            <div class = "nic_slide"><img src = "styles/images/czy/apocynaceae/alstonia_macrophylla/1.jpeg" alt = "image.png"></div>
                            <div class = "nic_slide"><img src = "styles/images/czy/apocynaceae/alstonia_scholaris/2.jpeg" alt = "image.png"></div>
                            <div class = "nic_slide"><img src = "styles/images/czy/apocynaceae/hoya_campanulata/1.jpeg" alt = "image.png"></div>
                        </div>
                    </div>
                </div>

                <div class = "nic_right">
                    <h2 class = "nic_h2">Specifics</h2>
                    <form action = "enquiry_confirmation.php" method = "POST" class = "nic_form">
                        <fieldset>
                            <legend class = "nic_label nic_legend">Contact details</legend>
                            <div class = "nic_div">
                                <label class = "nic_label" for = "first-name">First name</label>
                                <input id = "first-name" name = "first-name" class = "nic_field" type = "text" placeholder = "Enter your first name" 
                                    value = "<?= isset($_SESSION['enquiry']['first-name']) ? htmlspecialchars($_SESSION['enquiry']['first-name']) : '' ?>">
                                <?php unset($_SESSION['enquiry']['first-name']); ?>
                            </div>

                            <div class = "nic_div">
                                <label class = "nic_label" for = "last-name">Last name</label>
                                <input id = "last-name" name = "last-name" class = "nic_field" type = "text" placeholder = "Enter your last name" 
                                    value = "<?= isset($_SESSION['enquiry']['last-name']) ? htmlspecialchars($_SESSION['enquiry']['last-name']) : '' ?>">
                                <?php unset($_SESSION['enquiry']['last-name']); ?>
                            </div>

                            <div class = "nic_div">
                                <label class = "nic_label" for = "email">Email</label>
                                <input id = "email" name = "email" class = "nic_field" type = "email" placeholder = "Enter your email" 
                                    value = "<?= isset($_SESSION['enquiry']['email']) ? htmlspecialchars($_SESSION['enquiry']['email']) : '' ?>">
                                <?php unset($_SESSION['enquiry']['email']); ?>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend class = "nic_label nic_legend">Address</legend>
                            <label class = "nic_label" for = "street">Street</label>
                            <input id = "street" name = "street" class = "nic_field" type = "text" placeholder = "Enter your street address" 
                                value = "<?= isset($_SESSION['enquiry']['street']) ? htmlspecialchars($_SESSION['enquiry']['street']) : '' ?>">
                            <?php unset($_SESSION['enquiry']['street']); ?>

                            <label class = "nic_label" for = "city-town">City / Town</label>
                            <input id = "city-town" name = "city-town" class = "nic_field" type = "text" placeholder = "Enter your city or town" 
                                value = "<?= isset($_SESSION['enquiry']['city-town']) ? htmlspecialchars($_SESSION['enquiry']['city-town']) : '' ?>">
                            <?php unset($_SESSION['enquiry']['city-town']); ?>

                            <label class="nic_label" for="state">State</label>
                            <select id="state" name="state" class="nic_select">
                                <option value="">Select your state</option>
                                <?php
                                    $states = ["Selangor", "Perlis", "Kelantan", "Sabah", "Perak", "Penang", "Negeri Sembilan", "Malacca", "Johore", "Terengganu", "Pahang", "Kedah"];

                                    foreach ($states as $state) {
                                        echo '<option value="' . $state . '" ' . (isset($_SESSION['enquiry']['state']) && $_SESSION['enquiry']['state'] == $state ? 'selected' : '') . '>' . $state . '</option>';
                                    }

                                    unset($_SESSION['enquiry']['state']);
                                ?>
                            </select>

                            <label class = "nic_label" for = "postcode">Postcode</label>
                            <input id = "postcode" name = "postcode" class = "nic_field" type = "text" placeholder = "Enter your postcode" 
                                value = "<?= isset($_SESSION['enquiry']['postcode']) ? htmlspecialchars($_SESSION['enquiry']['postcode']) : '' ?>">
                            <?php unset($_SESSION['enquiry']['postcode']); ?>
                        </fieldset>

                        <fieldset>
                            <legend class = "nic_label nic_legend">Enquiry</legend>
                            <div class = "nic_div">
                            <label class="nic_label" for="plant">Plant</label>
                            <select id="plant" name="plant" class="nic_select">
                                <option value="">Select a plant</option>
                                <?php
                                    $plantOptions = ['Dipterocarpaceae', 'Lauraceae', 'Burseraceae', 'Myristicaceae', 'Chrysobalanaceae', 'Meliaceae', 'Ebenaceae'];

                                    foreach ($plantOptions as $option) {
                                        $isSelected = isset($_SESSION['enquiry']['plant']) && $_SESSION['enquiry']['plant'] == $option;
                                        echo '<option value="' . $option . '" ' . ($isSelected ? 'selected' : '') . '>' . $option . '</option>';
                                    }

                                    unset($_SESSION['enquiry']['plant']);
                                ?>
                            </select>
                                
                                <label class = "nic_label" for = "comment">Enquiry</label>
                                <textarea id = "comment" name = "comment" class = "nic_field nic_textarea" placeholder = "Leave your enquiries here">
                                    <?= isset($_SESSION['enquiry']['comment']) ? $_SESSION['enquiry']['comment'] : '' ?>
                                </textarea>
                                <?php unset($_SESSION['enquiry']['comment']); ?>
                            </div>
                        </fieldset>

                        <div class = "nic_button-container">
                            <div class = "nic_reset-button">
                                <button type = "reset" class = "nic_button nic_reset" value = "Reset">Reset</button>
                            </div>

                            <div class = "nic_submit-button">
                                <button type = "submit" class = "nic_button nic_submit" value = "Submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
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
