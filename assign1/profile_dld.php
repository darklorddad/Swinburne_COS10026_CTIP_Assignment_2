<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Daniel Tiong">
    <meta name = "description" content = "DLD">
    <title>FLORASCAN - Profiles</title>
    <?php include_once("dld_head.php"); ?>
</head>

<body class = "czy_profile_body">
    <?php include_once("dld_background.php"); ?>
    <?php include_once("dld_top_navigation_bar.php"); ?>

    <nav class = "czy_navigation_fool_profile">
        <?php include_once("czy_navigation_fool_profiles.php"); ?>

        <ul>
            <li><a href = "profile_ash.php">Ashley</a></li>
            <li><a href = "profile_dld.php" class = "czy_active">Daniel</a></li>
            <li><a href = "profile_czy.php">Edison</a></li>
            <li><a href = "profile_nic.php">Nicholas</a></li>
            <li><a href = "profile_ttl.php">Tzy Lynn</a></li>
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
            <?php include_once("dld_footer.php"); ?>

            <div class = "dld_section_1_footer_right">
                <h1 class = "dld_footer_heading">E-mail</h1>
                <p><a href="mailto:102777801@students.swinburne.edu.my">102777801@students.swinburne.edu.my</a></p>
            </div>
        </div>

        <?php include_once("dld_footer_2.php"); ?>
    </footer>
</body>
</html>