<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta name = "author" content = "Edison Ho">
        <meta name = "description" content = "Explore">
        <title>FLORASCAN - Explore</title>
        <?php include_once("head.php"); ?>
    </head>

    <body class = "czy_body">
        <?php include_once("dld_background_dots.php"); ?>
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
                <?php
                    $families = [
                        [
                            'name' => 'Apocynaceae',
                            'description' => 'Apocynaceae is a family of flowering plants...',
                            'image' => 'styles/images/czy/apocynaceae/alstonia_angustifolia/1.jpeg',
                            'alt' => 'apocynaceae_alstonia_angustifolia',
                            'genera_link' => 'genera.php#apocynaceae',
                            'species_link' => 'species.php#apocynaceae'
                        ],
                        [
                            'name' => 'Dipterocarpaceae',
                            'description' => 'Dipterocarpaceae is a family of 16 genera and about 695 known species of mainly tropical lowland rainforest trees...',
                            'image' => 'styles/images/czy/dipterocarpaceae/hopea_griffithii/2.jpeg',
                            'alt' => 'dipterocarpaceae_hopea_griffithii',
                            'genera_link' => 'genera.php#dipterocarpaceae',
                            'species_link' => 'species.php#dipterocarpaceae'
                        ],
                        [
                            'name' => 'Pandanaceae',
                            'description' => 'Pandanaceae is a family of flowering plants native to the tropics and subtropics of the Old World...',
                            'image' => 'styles/images/czy/pandanaceae/benstonea_nana/1.jpg',
                            'alt' => 'pandanaceae_benstonea_nana',
                            'genera_link' => 'genera.php#pandanaceae',
                            'species_link' => 'species.php#pandanaceae'
                        ],
                    ];

                    function createFamilyCard($family) {
                        echo "<div class='czy_card'>";
                        echo "<img src='{$family['image']}' alt='{$family['alt']}' class='czy_yoo_pictures'>";
                        echo "<div class='czy_cards_le_content'>";
                        echo "<p class='czy_card_title'>{$family['name']}</p>";
                        echo "<div class='czy_seperator'></div>";
                        echo "<p class='czy_small_description'>{$family['description']}</p>";
                        echo "<div class='czy_button'>";
                        echo "<a href='{$family['genera_link']}' class='czy_card_butt_on'>Genera</a>";
                        echo "<a href='{$family['species_link']}' class='czy_card_butt_on'>Species</a>";
                        echo "</div></div></div>";
                    }

                    foreach ($families as $family) {
                        createFamilyCard($family);
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

            <?php include_once("dld_footer_section_2.php"); ?>
        </footer>
    </body>
</html>