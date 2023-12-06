<?php
    session_start();
?>

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
            <div class = "dld_enquiry_result_center">
                <fieldset class = "czy_enquiry_details">
                    <legend>Enquiry Status</legend>
                    <?php
                        if (isset($_SESSION['result'])){
                            echo "<p>" . $_SESSION['result'] . "</p>";
                        }
                        else{
                            echo "<div class = \"user-info\">";
                            echo "<div class = \"czy_header\">First Name</div>";
                            echo "<div class = \"czy_between\">:</div>";

                            if (isset($_SESSION['first_name_error'])){
                                echo "<div class = \"czy_description czy_error\">" . $_SESSION['first_name_error'] . "</div>\n</div>\n";
                            }else{
                                echo "<div class = \"czy_description\">" . $_SESSION['first_name'] . "</div>\n</div>\n";
                            }

                            echo "<div class = \"user-info\">";
                            echo "<div class = \"czy_header\">Last Name</div>";
                            echo "<div class = \"czy_between\">:</div>";

                            if (isset($_SESSION['last_name_error'])){
                                echo "<div class = \"czy_description czy_error\">" . $_SESSION['last_name_error'] . "</div>\n</div>";
                            }else{
                                echo "<div class = \"czy_description\">" . $_SESSION['last_name'] . "</div>\n</div>";
                            }

                            echo "<div class = \"user-info\">";
                            echo "<div class = \"czy_header\">Email</div>";
                            echo "<div class = \"czy_between\">:</div>";

                            if (isset($_SESSION['email_error'])){
                                echo "<div class = \"czy_description czy_error\">" . $_SESSION['email_error'] . "</div>\n</div>";
                            }else{
                                echo "<div class = \"czy_description\">" . $_SESSION['email'] . "</div>\n</div>";
                            }

                            echo "<div class = \"user-info\">";
                            echo "<div class = \"czy_header\">Street</div>";
                            echo "<div class = \"czy_between\">:</div>";

                            if (isset($_SESSION['street_error'])){
                                echo "<div class = \"czy_description czy_error\">" . $_SESSION['street_error'] . "</div>\n</div>";
                            }else{
                                echo "<div class = \"czy_description\">" . $_SESSION['street'] . "</div>\n</div>";
                            }

                            echo "<div class = \"user-info\">";
                            echo "<div class = \"czy_header\">City Town</div>";
                            echo "<div class = \"czy_between\">:</div>";

                            if (isset($_SESSION['city_town_error'])){
                                echo "<div class = \"czy_description czy_error\">" . $_SESSION['city_town_error'] . "</div>\n</div>";
                            }else{
                                echo "<div class = \"czy_description\">" . $_SESSION['city_town'] . "</div>\n</div>";
                            }

                            echo "<div class = \"user-info\">";
                            echo "<div class = \"czy_header\">State</div>";
                            echo "<div class = \"czy_between\">:</div>";

                            if (isset($_SESSION['state_error'])){
                                echo "<div class = \"czy_description czy_error\">" . $_SESSION['state_error'] . "</div>\n</div>";
                            }else{
                                echo "<div class = \"czy_description\">" . $_SESSION['state'] . "</div>\n</div>";
                            }

                            echo "<div class = \"user-info\">";
                            echo "<div class = \"czy_header\">Postcode</div>";
                            echo "<div class = \"czy_between\">:</div>";

                            if (isset($_SESSION['postcode_error'])){
                                echo "<div class = \"czy_description czy_error\">" . $_SESSION['postcode_error'] . "</div>\n</div>";
                            }else{
                                echo "<div class = \"czy_description\">" . $_SESSION['postcode'] . "</div>\n</div>";
                            }

                            echo "<div class = \"user-info\">";
                            echo "<div class = \"czy_header\">Plant</div>";
                            echo "<div class = \"czy_between\">:</div>";

                            if (isset($_SESSION['plant_error'])){
                                echo "<div class = \"czy_description czy_error\">" . $_SESSION['plant_error'] . "</div>\n</div>";
                            }else{
                                echo "<div class = \"czy_description\">" . $_SESSION['plant'] . "</div>\n</div>";
                            }

                            
                            echo "<div class = \"user-info\">";
                            echo "<div class = \"czy_header\">Comment</div>";
                            echo "<div class = \"czy_between\">:</div>"; 

                            if (isset($_SESSION['comment_error'])){
                                echo "<div class = \"czy_description czy_error comment\">" . $_SESSION['comment_error'] . "</div>\n</div>";
                            }else{
                                echo "<div class = \"czy_description comment\">" . $_SESSION['comment'] . "</div>\n</div>";
                            }
                        }
                        ?>
                    </fieldset>
                <div class = "czy_enquiry_error">
                    <a href = "enquiry.php" class = "czy_enquiry_error_button">Return to enquiry page</a>
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
