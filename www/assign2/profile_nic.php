<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Nicholas Sik">
    <meta name = "description" content = "NIC">
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
            <li><a href = "profile_dld.php">Daniel</a></li>
            <li><a href = "profile_czy.php">Edison</a></li>
            <li><a href = "profile_nic.php" class = "czy_active">Nicholas</a></li>
            <li><a href = "profile_ttl.php">Tzy Lynn</a></li>
        </ul>
    </nav>

    <div class = "czy_container">
        <img src = "styles/images/czy/Profile/nic.jpg" alt="Nicholas" class = "czy_profile_pic">
        <div class = "czy_profile_description">
            <p class = "czy_member_name">Nicholas Sik Jia Le</p>
            <p class = "czy_member_course">Course: Bachelor of Computer Science</p>
            <p class = "czy_student_id">Student ID: 102786645</p>
            <br>
            <br>
            <p class = "czy_title">Biographic Overview</p>
            <p class = "czy_about_me">
                My name is Nicholas Sik Jia Le. My hometown is Sibu, Sarawak. At Swinburne University of Technology Sarawak, 
                I am pursuing Bachelor of Computer Science degree. My goal is to become a programmer.
            </p>    
            <br>

            <p class = "czy_title">Personal Details</p>
            <table class = "czy_profile_table">
                <tr class = "demographic">
                    <th>Demographic Information</th>
                    <td>
                        Male, 20 years old
                    </td>
                </tr>

                <tr class = "hometown">
                    <th>Hometown</th>
                    <td>Sibu</td>
                </tr>

                <tr class = "achievement">
                    <th>Achievements</th>
                    <td>Joining clubs, playing sports and community involvement.</td>
                </tr>

                <tr class = "interests">
                    <th>Interests</th>
                    <td>Exercise</td>
                </tr>                    
            </table>
        </div>
    </div>

    <footer>
        <div class = "dld_footer_section_1">
            <?php include_once("dld_footer.php"); ?>

            <div class = "dld_section_1_footer_right">
                <h1 class = "dld_footer_heading">Email</h1>
                <p><a href="mailto:102786645@students.swinburne.edu.my">102786645@students.swinburne.edu.my</a></p>
            </div>
        </div>

        <?php include_once("dld_footer_2.php"); ?>
    </footer>
</body>
</html>