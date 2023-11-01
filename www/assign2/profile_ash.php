<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Ashley Jong">
    <meta name = "description" content = "ASH">
    <title>FLORASCAN - Profiles</title>
    <?php include_once("dld_head.php"); ?>
</head>

<body class = "czy_profile_body">
    <?php include_once("dld_background.php"); ?>
    <?php include_once("dld_top_navigation_bar.php"); ?>

    <nav class = "czy_navigation_fool_profile">
        <?php include_once("czy_navigation_fool_profiles.php"); ?>

        <ul>
            <li><a href = "profile_ash.php" class = "czy_active">Ashley</a></li>
            <li><a href = "profile_dld.php">Daniel</a></li>
            <li><a href = "profile_czy.php">Edison</a></li>
            <li><a href = "profile_nic.php">Nicholas</a></li>
            <li><a href = "profile_ttl.php">Tzy Lynn</a></li>
        </ul>
    </nav>

    <div class = "czy_container">
        <img src = "styles/images/ash/ash.jpg" alt="Ashley" class = "czy_profile_pic">
        <div class = "czy_profile_description">
            <p class = "czy_member_name">Ashley Jong</p>
            <p class = "czy_member_course">Course: Bachelor of Computer Science</p>
            <p class = "czy_student_id">Student ID: 102780087</p>
            <br>
            <br>
            <p class = "czy_title">Biographic Overview</p>
            <p class = "czy_about_me">Name? Ashley. What am I doing? First-year CS degree student. Fun fact? Loves, pursues, or desires to obtain pain of itself because it is pain, but circumstances occur where toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise except to obtain some advantage? But those who find fault choose to enjoy pleasure, one who avoids a pain that produces no blinded by desire, that they cannot foresee blame belongs to those who fail in their duty through weakness of will is the same as saying through shrinking from toil and pain. That's the lorem ipsum translation btw :D</p>
            <br>

            <p class = "czy_title">Personal Details</p>
            <table class = "czy_profile_table">
                <tr class = "demographic">
                    <th>Demographic Information</th>
                    <td>
                        Female, 2023 - 2004 = im kinda bad at maths
                    </td>
                </tr>

                <tr class = "hometown">
                    <th>Hometown</th>
                    <td>Sarawak, Malaysia</td>
                </tr>

                <tr class = "achievement">
                    <th>Achievements</th>
                    <td>Still slaying after 19 years and waking up 5 minutes before class but somehow still managed to arrive on time</td>
                </tr>

                <tr class = "interests">
                    <th>Interests</th>
                    <td>Squinting my eyes counting px even though we use vw and sleeping (i really need it)</td>
                </tr>                    
            </table>
        </div>
    </div>

    <footer>
        <div class = "dld_footer_section_1">
            <?php include_once("dld_footer.php"); ?>

            <div class = "dld_section_1_footer_right">
                <h1 class = "dld_footer_heading">Email</h1>
                <p><a href="mailto:102780087@students.swinburne.edu.my">102780087@students.swinburne.edu.my</a></p>
            </div>
        </div>

        <?php include_once("dld_footer_2.php"); ?>
    </footer>
</body>
</html>