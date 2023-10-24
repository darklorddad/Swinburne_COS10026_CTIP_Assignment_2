<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Tan Tzy Lynn">
    <meta name = "description" content = "TTL">
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
            <li><a href = "profile_nic.php">Nicholas</a></li>
            <li><a href = "profile_ttl.php" class = "czy_active">Tzy Lynn</a></li>
        </ul>
    </nav>

    <div class = "czy_container">
        <img src = "styles/images/czy/Profile/ttl.png" alt="Tan Tzy Lynn" class = "czy_profile_pic">
        <div class = "czy_profile_description">
            <p class = "czy_member_name">Tan Tzy Lynn</p>
            <p class = "czy_member_course">Course: Bachelor of Computer Science</p>
            <p class = "czy_student_id">Student ID: 102779328</p>
            <br>
            <br>
            <p class = "czy_title">Biographic Overview</p>
            <p class = "czy_about_me">
                I’m currently a first-year degree student studying Bachelor of Computer Science at Swinburne University of Technology Sarawak. 
                As a member involved in website project, I've delved into the complexities of web development, 
                merging theoretical concepts from the unit with practical application. 
            </p>    
            <br>

            <p class = "czy_title">Personal Details</p>
            <table class = "czy_profile_table">
                <tr class = "demographic">
                    <th>Demographic Information</th>
                    <td>
                        Female, 19 years old
                    </td>
                </tr>

                <tr class = "hometown">
                    <th>Hometown</th>
                    <td>Kuching, Sarawak, Malaysia</td>
                </tr>

                <tr class = "achievement">
                    <th>Achievements</th>
                    <td>Accumulated an impressive collection of unread books, showcasing dedication to literary procrastination</td>
                </tr>

                <tr class = "interests">
                    <th>Interests</th>
                    <td>Sleeping, reading & games</td>
                </tr>                    
            </table>
        </div>
    </div>

    <footer>
        <div class = "dld_footer_section_1">
            <?php include_once("dld_footer.php"); ?>

            <div class = "dld_section_1_footer_right">
                <h1 class = "dld_footer_heading">E-mail</h1>
                <p><a href="mailto:102779328@students.swinburne.edu.my">102779328@students.swinburne.edu.my</a></p>
            </div>
        </div>

        <?php include_once("dld_footer_2.php"); ?>
    </footer>
</body>
</html>