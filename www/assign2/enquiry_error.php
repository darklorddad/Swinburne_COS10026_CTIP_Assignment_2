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
                    session_start();
                    if(isset($_SESSION['error'])) {
                        echo "<p>" . $_SESSION['error'] . "</p>";
                        unset($_SESSION['error']);
                    }
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
