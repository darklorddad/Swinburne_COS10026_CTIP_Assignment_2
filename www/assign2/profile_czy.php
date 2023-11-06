<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Edison Ho">
    <meta name = "description" content = "CZY">
    <title>FLORASCAN - Profiles</title>
    <?php include_once("head.php"); ?>
</head>

<body class = "czy_profile_body">
    <?php include_once("dld_background_dots.php"); ?>
    <?php include_once("dld_top_navigation_bar.php"); ?>

    <nav class = "czy_navigation_fool_profile">
        <?php include_once("czy_navigation_fool_profile.php"); ?>

        <ul>
            <li><a href = "profile_ash.php">Ashley</a></li>
            <li><a href = "profile_dld.php">Daniel</a></li>
            <li><a href = "profile_czy.php" class = "czy_active">Edison</a></li>
            <li><a href = "profile_nic.php">Nicholas</a></li>
            <li><a href = "profile_ttl.php">Tzy Lynn</a></li>
        </ul>
    </nav>

    <div class = "czy_container">
        <img src = "styles/images/czy/Profile/czy.jpg" alt="Edison" class = "czy_profile_pic">
        <div class = "czy_profile_description">
            <p class = "czy_member_name">Edison Ho Hui Yang</p>
            <p class = "czy_member_course">Course: Bachelor of Computer Science</p>
            <p class = "czy_student_id">Student ID: 102779496</p>
            <br>
            <br>
            <p class = "czy_title">Biographic Overview</p>
            <p class = "czy_about_me">
                I'm currently studying in Swinburne Uhiversity of Technology Sarawak and is one of the members who worked on the website. 
                I'm taking Computer Science alongside with the enrolment of this unit. While working on the website I learned more about the amount of effort 
                and knowledge needed to successfully create a website.
            </p>    
            <br>

            <p class = "czy_title">Personal Details</p>
            <table class = "czy_profile_table">
                <tr class = "demographic">
                    <th>Demographic Information</th>
                    <td>Male, 19 years old</td>
                </tr>

                <tr class = "hometown">
                    <th>Hometown</th>
                    <td>Miri, Sarawak, Malaysia</td>
                </tr>

                <tr class = "achievement">
                    <th>Achievements</th>
                    <td>Osu [Global Ranking #183,005] [Country Ranking #2,812]</td>
                </tr>

                <tr class = "interests">
                    <th>Interests</th>
                    <td>Games, reading & music</td>
                </tr>                    
            </table>
        </div>
    </div>

    <footer>
        <div class = "dld_footer_section_1">
            <?php include_once("dld_footer_section_1.php"); ?>

            <div class = "dld_section_1_footer_right">
                <h1 class = "dld_footer_heading">Email</h1>
                <p><a href="mailto:102779496@students.swinburne.edu.my">102779496@students.swinburne.edu.my</a></p>
            </div>
        </div>

        <?php include_once("dld_footer_section_2.php"); ?>
    </footer>
</body>
</html>