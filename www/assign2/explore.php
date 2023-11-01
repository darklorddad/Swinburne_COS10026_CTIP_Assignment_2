<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta name = "author" content = "Edison Ho">
        <meta name = "description" content = "Explore">
        <title>FLORASCAN  -  Explore</title>
        <?php include_once("dld_head.php"); ?>
    </head>

    <body class = "czy_body">
        <?php include_once("dld_background.php"); ?>
        <?php include_once("dld_top_navigation_bar.php"); ?>
        
        <nav class = "czy_navigation_fool">
            <?php include_once("czy_navigation_fool.php"); ?>
            <ul>
                <li><a href = "explore.php" class = "czy_active">Families</a></li>
                <li><a href = "genera.php">Genera</a></li>
                <li><a href = "species.php">Species</a></li>
            </ul>
        </nav>
        
        <div class = "czy_where_magic_happens">
            <div class = "czy_back"></div>
            <p class = "czy_head">Families</p>

            <input type="text" placeholder="Navigate the foliage realm" class = "czy_tis_a_search_bar">

            <div class = "czy_tis_a_line"></div>

            <div class = "czy_ooo_pictures">
                
                <div class = "czy_card">
                    <img src = "styles/images/czy/apocynaceae/alstonia_angustifolia/1.jpeg" alt = "apocynaceae_alstonia_angustifolia" class = "czy_yoo_pictures">
                    <div class = "czy_image_container"></div>
                    <div class = "czy_cards_le_content">
                        <p class = "czy_card_title">Apocynaceae</p>
                        
                        <div class = "czy_seperator"></div>

                        <p class = "czy_small_description">
                            Apocynaceae is a family of flowering plants. Many species are tall trees found in tropical forests, but some grow in tropical dry environments. Many of these plants have milky latex, and many species are poisonous if ingested.
                        </p>

                        <div class = "czy_button">
                            <a href = "genera.php#apocynaceae" class = "czy_card_butt_on">Genera</a>
                            <a href = "species.php#apocynaceae" class = "czy_card_butt_on">Species</a>
                        </div>
                    </div>
                </div>

                <div class = "czy_card">
                    <img src = "styles/images/czy/dipterocarpaceae/hopea_griffithii/2.jpeg" alt = "dipterocarpaceae_hopea_griffithii" class = "czy_yoo_pictures">
                    <div class = "czy_cards_le_content">
                        <p class = "czy_card_title">Dipterocarpaceae</p>
                        
                        <div class = "czy_seperator"></div>

                        <p class = "czy_small_description">
                            Dipterocarpaceae is a family of 16 genera and about 695 known species of mainly tropical lowland rainforest trees. The greatest diversity of Dipterocarpaceae occurs in Borneo. Many are large forest-emergent species, typically reaching heights of 40 - 70 m, some even over 80m.
                        </p>

                        <div class = "czy_button">
                            <a href = "genera.php#dipterocarpaceae" class = "czy_card_butt_on">Genera</a>
                            <a href = "species.php#dipterocarpaceae" class = "czy_card_butt_on">Species</a>
                        </div>
                    </div>
                </div>

                <div class = "czy_card">
                    <img src = "styles/images/czy/pandanaceae/benstonea_nana/1.jpg" alt = "pandanaceae_benstonea_nana" class = "czy_yoo_pictures">
                    <div class = "czy_cards_le_content">
                        <p class = "czy_card_title">Pandanaceae</p>
                        
                        <div class = "czy_seperator"></div>

                        <p class = "czy_small_description">
                            Pandanaceae is a family of flowering plants native to the tropics and subtropics of the Old World, from West Africa through the Pacific. It contains 982 known species in five genera. The family likely originated during the Late Cretaceous.
                        </p>

                        <div class = "czy_button">
                            <a href = "genera.php#pandanaceae" class = "czy_card_butt_on">Genera</a>
                            <a href = "species.php#pandanaceae" class = "czy_card_butt_on">Species</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class = "dld_footer_section_1">
                <?php include_once("dld_footer.php"); ?>

                <div class = "dld_section_1_footer_right">
                    <h1 class = "dld_footer_heading">Acknowledgement</h1>
                    <div class = "dld_footer_section_1_center_row">
                        <div class = "dld_footer_section_1_center_column">
                            <h1 class = "dld_heading">Apocynaceae
                            </h1>

                            <a target="_blank" href = "https://identify.plantnet.org/k-world-flora/species/Alstonia%20angustifolia%20Wall.%20ex%20A.DC./data" class = "dld_footer_section_1_center_navigation_link_1">Alstonia Angustifolia</a>
                        </div>

                        <div class = "dld_footer_section_1_center_column">
                            <h1 class = "dld_heading">Pandanaceae
                            </h1>

                            <a target="_blank" href = "https://tropicos.org/name/100383713">Benstonea Nana</a>
                        </div>

                        <div class = "dld_footer_section_1_center_column">
                            <h1 class = "dld_heading">Dipterocarpaceae
                            </h1>

                            <a target="_blank" href = "https://identify.plantnet.org/k-world-flora/species/Hopea%20griffithii%20Kurz/data">Hopea Griffithii</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php include_once("dld_footer_2.php"); ?>
        </footer>
    </body>
</html>