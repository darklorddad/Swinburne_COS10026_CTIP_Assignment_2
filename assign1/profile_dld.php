<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "styles/styles.css">
    <meta name = "author" content = "Daniel Tiong">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,500,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <title>FLORASCAN - Profiles</title>
</head>

<body class = "czy_profile_body">

    <?php include_once("dld_background.php"); ?>

    <?php include_once("dld_top_navigation_bar.php"); ?>

    <nav class = "czy_navigation_fool_profile">
        <div class = "ash_page_header">
            <p class = "ash_title_header">Profile</p>
            <p>Passionate plant enthusiasts cultivating a greener world, one leaf at a time, on a digital canvas.</p>
        </div>

        <ul>
            <li><a href = "profile_ash.html">Ashley</a></li>
            <li><a href = "profile_dld.html" class = "czy_active">Daniel</a></li>
            <li><a href = "profile_czy.html">Edison</a></li>
            <li><a href = "profile_nic.html">Nicholas</a></li>
            <li><a href = "profile_ttl.html">Tzy Lynn</a></li>
        </ul>
    </nav>

    <div class = "czy_container">
        <img src = "styles/images/dld/dld_profile.jpg" alt="Edison" class = "czy_profile_pic">
        <div class = "czy_profile_description">
            <p class = "czy_member_name">Daniel Tiong</p>
            <p class = "czy_member_course">Course: Bachelor of Computer Science</p>
            <p class = "czy_student_id">Student ID: 102777801</p>
            <br>
            <br>
            <p class = "czy_title">Biographic Overview</p>
            <p class = "czy_about_me">
                Crazy? I was crazy once. They locked me in a room. A rubber room. A rubber room with rats. And rats make me crazy.
                Crazy? I was crazy once. They locked me in a room. A rubber room. A rubber room with rats. And rats make me crazy.
                Crazy? I was crazy once. They locked me in a room. A rubber room. A rubber room with rats. And rats make me crazy.
            </p>    
            <br>

            <p class = "czy_title">Personal Details</p>
            <table class = "czy_profile_table">
                <tr class = "demographic">
                    <th>Demographic Information</th>
                    <td>Gender binary 1, 2023 - 19 = ?</td>
                </tr>

                <tr class = "hometown">
                    <th>Hometown</th>
                    <td>Sarawak, Malaysia</td>
                </tr>

                <tr class = "achievement">
                    <th>Achievements</th>
                    <td>The completion of COS10026 Computing Technology Inquiry Project - Assignment 1</td>
                </tr>

                <tr class = "interests">
                    <th>Interests</th>
                    <td>Visual Studio Code, Github and Microsoft Word</td>
                </tr>                    
            </table>
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
                <h1 class = "dld_footer_heading">E-mail</h1>
                <p><a href="mailto:102777801@students.swinburne.edu.my">102777801@students.swinburne.edu.my</a></p>
            </div>
        </div>

        <div class = "dld_footer_section_2">
            <p class = "dld_footer_section_2_copyright">Copyright © 2023 <a href = "index.html">FLORASCAN. </a>All rights reserved.</p>
        </div>
    </footer>
</body>
</html>