<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Ashley Jong">
    <meta name = "description" content = "Login">
    <title>FLORASCAN - Login</title>
    <?php include_once("dld_head.php"); ?>
</head>

<body class="ash_body_2">
    <?php include_once("dld_background.php"); ?>
    <?php include_once("dld_top_navigation_bar.php"); ?>

    <div class="ash_section_1">
        <div class="ash_page_header">
            <p class = "ash_title_header">Account</p>
            <p id = "login_point">Unlock the botanical world with your green credentials.</p>
        </div>
    </div>

    <div class = "ash_login_thing">
        <div class="ash_wrapper">
            <span class="ash_bg_animate"></span>
    
            <div class="ash_form_box login">
                <h2>Log In</h2>
                <form action="#">
                    <div class="ash_input_box">
                        <input type="text" required>
                        <label>Username</label>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="ash_input_box">
                        <input type="password" required>
                        <label>Password</label>
                        <i class='bx bxs-lock-alt' ></i>
                    </div>
                    <button type="submit" class="ash_btn">Log In</button>
                    <div class="ash_logreg_link">
                        <p>Don't have an account? <a href="register.html#register_point" class="ash_register_link">Sign Up</a></p>
                    </div>
                </form>
            </div>
    
            <div class="ash_info_text login">
                <h2>Welcome Back!</h2>
                <!-- <p>Lorem ipsum dolor sit amet.</p> -->
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
                <p class = "dld_section_1_footer_right_acknowledgement">
                    None
                </p>
            </div>
        </div>

        <div class = "dld_footer_section_2">
            <p class = "dld_footer_section_2_copyright">Copyright © 2023 <a href = "index.html">FLORASCAN. </a>All rights reserved.</p>
        </div>
    </footer>
</body>
</html>