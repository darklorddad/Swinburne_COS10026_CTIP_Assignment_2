<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Enquiry Form">
    <meta name="author" content="Nicholas Sik">
    <title>Enquiry</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,500,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
</head>

<body class="nic_body">
    <?php include_once("dld_background.php"); ?>

    <?php include_once("dld_top_navigation_bar.php"); ?>

    <div class="ash_section_1">
		<div class="ash_page_header">
			<p class = "ash_title_header">Enquiry</p>
			<p>Discover your green sanctuary with our wide selection of plants and expert advice.</p>
		</div>
	</div>

    <div class="nic_container">
        <div class="nic_contact-box">
            <div class="nic_left">
                <div id = "nic_slideshow">
                    <div class = "nic_slide-wrapper">
                        <div class = "nic_slide"><img src = "styles/images/czy/apocynaceae/alstonia_angustifolia/1.jpeg" alt = "image.png"></div>
                        <div class = "nic_slide"><img src = "styles/images/czy/apocynaceae/alstonia_macrophylla/1.jpeg" alt = "image.png"></div>
                        <div class = "nic_slide"><img src = "styles/images/czy/apocynaceae/alstonia_scholaris/2.jpeg" alt = "image.png"></div>
                        <div class = "nic_slide"><img src = "styles/images/czy/apocynaceae/hoya_campanulata/1.jpeg" alt = "image.png"></div>
                    </div>
                </div>
            </div>

            <div class="nic_right">
                <h2 class = "nic_h2">Specifics</h2>
                <form action="mailto:management@florascan.com" method="POST" class="nic_form">
                    <fieldset>
                        <legend class = "nic_label nic_legend">Contact details</legend>
                        <div class = "nic_div">
                            <label class="nic_label" for="first-name">First name</label>
                            <input id="first-name" name="first-name" class="nic_field" type="text" maxlength="25" pattern="[A-Za-z]+" placeholder = "Enter your first name" required>
                        </div>
                        <div class = "nic_div">
                            <label class="nic_label" for="last-name">Last name</label>
                            <input id="last-name" name="last-name" class="nic_field" type="text" maxlength="25" pattern="[A-Za-z]+" required placeholder = "Enter your last name">
                        </div>
                        <div class = "nic_div">
                            <label class="nic_label" for="email">E-mail</label>
                            <input id="email" name="email" class="nic_field" type="email" placeholder = "Enter your email" required>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend class="nic_label nic_legend">Address</legend>
                        <label class="nic_label" for="street-address">Street</label>
                        <input id="street-address" name="street-address" class="nic_field" type="text" maxlength="40" placeholder = "Enter your street address" required>
                        <label class="nic_label" for="city-town">City / Town</label>
                        <input id="city-town" name="city-town" class="nic_field" type="text" maxlength="20" placeholder = "Enter your city or town" required>
                        <label class="nic_label" for="state">State</label>
                        <select id="state" name="state" class="nic_select" required>
                            <option value="">Select your state</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Perak">Perak</option>
                            <option value="Penang">Penang</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Malacca">Malacca</option>
                            <option value="Johore">Johore</option>
                            <option value="Terengganu">Terengganu</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Kedah">Kedah</option>
                        </select>
                        <label class="nic_label" for="postcode">Postcode</label>
                        <input id="postcode" name="postcode" class="nic_field" type="text" pattern="[0-9]{5}" placeholder = "Enter your postcode" required>
                    </fieldset>

                    <fieldset>
                        <legend class = "nic_label nic_legend">Enquiry</legend>
                        <div class = "nic_div">
                            <label class="nic_label" for="plant">Plant</label>
                            <select id="plant" name="plant" class="nic_select" required>
                                <option value="">Select a plant</option>
                                <option value="Dipterocarpaceae">Dipterocarpaceae</option>
                                <option value="Lauraceae">Lauraceae</option>
                                <option value="Burseraceae">Burseraceae</option>
                                <option value="Myristicaceae">Myristicaceae</option>
                                <option value="Chrysobalanaceae">Chrysobalanaceae</option>
                                <option value="Meliaceae">Meliaceae</option>
                                <option value="Ebenaceae">Ebenaceae</option>
                            </select>
                            
                            <label class="nic_label" for="comment">Enquiry</label>
                            <textarea id="comment" name="comment" class="nic_field nic_textarea" placeholder="Leave your enquiries here"></textarea>
                        </div>
                    </fieldset>

                    <div class="nic_button-container">
                        <div class="nic_submit-button">
                            <button type="submit" class="nic_button nic_submit" value="Submit">Submit</button>
                        </div>
                        <div class="nic_reset-button">
                            <button type="reset" class="nic_button nic_reset" value="Reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class = "dld_footer_section_1">
            <div class = "dld_footer_section_1_left">
                <h1 class = "dld_footer_section_1_left_title"><a href = "index.html">FLORASCAN</a></h1>
                <p class = "dld_footer_section_1_left_title_text">Unearth, delve and spread the wonder of untamed plant life, in nature's grand show.</p>
                <p class = "dld_footer_heading">Location</p>

                <div class = "dld_footer_section_1_left_information">
                    <a class = "dld_footer_section_1_left_information_icon" href = "https://www.google.com.my/maps/place/Swinburne+University+of+Technology+Sarawak+Campus/@1.5326046,110.3574906,17.43z/data=!4m6!3m5!1s0x31fba70b11e02ce7:0x69cbf290cfd24bb7!8m2!3d1.5323021!4d110.3571732!16zL20vMGYyemIz?authuser=1&entry=ttu">
                        <span class = "material-symbols-outlined">location_on</span>
                    </a>
                    <a href = "https://www.google.com.my/maps/place/Swinburne+University+of+Technology+Sarawak+Campus/@1.5326046,110.3574906,17.43z/data=!4m6!3m5!1s0x31fba70b11e02ce7:0x69cbf290cfd24bb7!8m2!3d1.5323021!4d110.3571732!16zL20vMGYyemIz?authuser=1&entry=ttu">
                        <p class = "dld_footer_section_1_left_information_address">Q5B, 93350 Kuching, Sarawak</p>
                    </a>
                </div>

                <p class = "dld_footer_heading">Contact Details</p>

                <a href = "index.html">
                    <div class = "dld_footer_section_1_left_information dld_no_hover">
                        <span class = "material-symbols-outlined">call</span>
                        <p class = "dld_footer_section_1_left_information_phone_number">082-415 353</p>
                    </div>
                </a>

                <a href = "mailto:support@florascan.com">
                    <div class = "dld_footer_section_1_left_information dld_footer_section_1_left_information_last">
                        <span class = "material-symbols-outlined">mail</span>
                        <p class = "dld_footer_section_1_left_information_email">support@florascan.com</p>
                    </div>
                </a>

                <p></p>

                <p class = "dld_footer_heading">Youtube Video</p>

                <a href = "https://www.youtube.com/watch?v=zDBzVGz05xk">
                    <div class = "dld_footer_section_1_left_information dld_footer_section_1_left_information_last">
                        <p class = "dld_footer_section_1_left_information_email">Link</p>
                    </div>
                </a>
            </div>

            <div class = "dld_footer_divider"></div>

            <div class = "dld_footer_section_1_center">
                <h1 class = "dld_footer_heading">Navigation</h1>
                <div class = "dld_footer_section_1_center_row">
                    <div class = "dld_footer_section_1_center_column">
                        <a href = "explore.html">Families</a>
                        <a href = "genera.html">Genera</a>
                        <a href = "species.html">Species</a>
                        <a href = "profile_ash.html">Profile ASH</a>
                        <a href = "profile_czy.html">Profile CZY</a>
                        <a href = "profile_dld.html">Profile DLD</a>
                        <a href = "profile_nic.html">Profile NIC</a>
                        <a href = "profile_ttl.html">Profile TTL</a>
                        <a href = "login.html">Log In</a>
                        <a href = "register.html">Register</a>
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <a href = "index.html" class = "dld_footer_section_1_center_navigation_link_1">Home</a>
                        <a href = "identify.html">Identify</a>
                        <a href = "explore.html">Explore</a>
                        <a href = "contributions.html">Contributions</a>
                        <a href = "enquiry.html">Enquiry</a>
                        <a href = "profile_czy.html">Profiles</a>
                        <a href = "login.html">Account</a>
                        <a href = "enhancements.html">Enhancements</a>
                    </div>
                </div>
            </div>

            <div class = "dld_footer_divider"></div>

            <div class = "dld_section_1_footer_right">
                <h1 class = "dld_footer_heading">Acknowledgement</h1>
                <div class = "dld_footer_section_1_center_column">
                    <a target="_blank" href = "https://identify.plantnet.org/k-world-flora/species/Alstonia%20angustifolia%20Wall.%20ex%20A.DC./data" class = "dld_footer_section_1_center_navigation_link_1">Alstonia Angustifolia</a>
                    <a target="_blank" href = "https://identify.plantnet.org/k-world-flora/species/Alstonia%20scholaris%20(L.)%20R.Br./data">Alstonia Scholaris</a>
                    <a target="_blank" href = "https://identify.plantnet.org/k-world-flora/species/Alstonia%20macrophylla%20Wall.%20ex%20G.Don/data">Alstonia Macrophylla</a>
                    <a target="_blank" href = "https://identify.plantnet.org/k-world-flora/species/Hoya%20campanulata%20Blume/data">Hoya Campanulata</a>
                </div>
            </div>
        </div>

        <div class = "dld_footer_section_2">
            <p class = "dld_footer_section_2_copyright">Copyright © 2023 <a href = "index.html">FLORASCAN. </a>All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
