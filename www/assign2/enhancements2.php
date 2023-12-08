<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Edison Ho">
    <meta name = "description" content = "Enhancements">
    <title>FLORASCAN - Enhancement 2</title>
    <?php include_once("head.php"); ?>
</head>
<body class = "dld_body">
    <?php include_once("dld_background_dots.php"); ?>
    <?php include_once("dld_top_navigation_bar.php"); ?>

    <nav class = "dld_header_bar">
        <div class = "ash_page_header">
            <p class = "ash_title_header">Enhancements</p>
            <p>A page that lists out all the enhancements.</p>
        </div>
        <ul>
            <li><a href = "enhancements.php">Enhancement 1</a></li>
            <li><a href = "enhancements2.php" class = "czy_active">Enhancement 2</a></li>
        </ul>
    </nav>

    <div class = "dld_enhancements_big_box">
        <div class = "dld_row">
            <div class = "dld_column_img">
                <img src = "styles/images/czy/enhancement_2/view_user_page.png" alt = "pic">
            </div>

            <div class = "dld_column">
                <div class = "dld_enhancements_description">
                    <h2>View user page</h2>
                    <p>
                        The view_user.php file is a PHP script that serves as an admin dashboard. 
                        It is responsible for displaying user accounts, allowing the admin to search 
                        for specific users, sort the user list and perform actions such as editing 
                        or deleting user accounts.
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target = "_blank" href = "index.php">Home</a>
                        </div>
                    </div>

                    <div class = "dld_buttons_column">
                        <h3>Source :</h3>

                        <div class = "dld_flex_container">
                            <a target = "_blank" href = "https://www.w3schools.com/css/css_navbar.asp">Source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class = "dld_row">
            <div class = "dld_column_img">
                <img src = "styles/images/czy/gifs/admin_create_delete_user.gif" alt = "gif">
            </div>

            <div class = "dld_column">
                <div class = "dld_enhancements_description">
                    <h2>Create user page</h2>
                    <p>
                        The create_user.php file is a PHP script that provides an interface for creating new 
                        user accounts. It includes a form where an admin can enter a username, email and 
                        password for the new account. The form data is sent to create_user_process.php 
                        for processing.
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target = "_blank" href = "index.php">Home</a>
                            <a target = "_blank" href = "identify.php">Identify</a>  
                        </div>
                    </div>

                    <div class = "dld_buttons_column">
                        <h3>Source :</h3>

                        <div class = "dld_flex_container">
                            <a target = "_blank" href = "https://www.geeksforgeeks.org/how-to-add-google-map-inside-html-page-without-using-api-key/">Source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class = "dld_row">
            <div class = "dld_column_img">
                <img src = "styles/images/czy/gifs/admin_edit_user.gif" alt = "gif">
            </div>

            <div class = "dld_column">
                <div class = "dld_enhancements_description">
                    <h2>Edit user page</h2>
                    <p>
                        The edit_user.php file is a PHP script designed to facilitate the editing of user account details. 
                        It connects to a MySQL database to retrieve the details of a specific user based on an ID passed 
                        through the URL. The script populates an HTML form with the user's current information, 
                        allowing an admin to update the username, email, and password. Upon submission, the form 
                        data is sent to edit_user_process.php for updating the database.
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "index.php">Home</a>
                            <a target="_blank" href = "identify.php">Identify</a>  
                            <a target="_blank" href = "enquiry.php">Enquiry</a>  
                        </div>
                    </div>

                    <div class = "dld_buttons_column">
                        <h3>Source :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "https://codepen.io/SitePoint/pen/MyPVdK?editors=1100">Carousel</a>
                            <a target="_blank" href = "https://codepen.io/avkuznetsov54/pen/wQqjmW">Slideshow</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class = "dld_row">
            <div class = "dld_column_img">
                <img src = "styles/images/czy/gifs/admin_searchbar.gif" alt = "gif">
            </div>

            <div class = "dld_column">
                <div class = "dld_enhancements_description">
                    <h2>User account page search bar</h2>
                    <p>
                        The search bar in view_user.php is part of a form that allows the admin to search 
                        for user accounts. It uses a GET method to submit the search term to the same page. 
                        The search input field has an autocomplete attribute set to "off" to prevent 
                        automatic suggestions by the browser, and it references a datalist with the 
                        ID autocomplete. This datalist is populated with options generated by a PHP 
                        script that queries the userdetails table in the database, providing suggestions 
                        for user IDs, usernames, emails, and passwords. When the form is submitted, the 
                        search term is processed by the PHP script, which modifies the SQL query to filter 
                        the user accounts displayed in the table based on the search criteria.
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "species.php">Explore</a>
                            <a target="_blank" href = "identify.php">Identify</a>  
                            <a target="_blank" href = "contributions.php">Contributions</a>  
                        </div>
                    </div>

                    <div class = "dld_buttons_column">
                        <h3>Source :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "https://codepen.io/peiche/pen/kQwYVJ?editors=1100">Source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dld_row">
            <div class="dld_column_img">
                <img src = "styles/images/czy/gifs/admin_searchbar.gif" alt="gif">
            </div>

            <div class="dld_column">
                <div class="dld_enhancements_description">
                    <h2>On hover animation</h2>
                    <p>
                        Hover animations are often applied to various elements such as buttons, links, images and text. To implement hover animations, CSS property (:hover and transition) is primarily used. When the user hovers over an element, the CSS rules within the (:hover) block take effect, causing changes in appearance or behavior. Transitions are essential to creating smooth and gradual changes during hover. CSS properties like transition allows the control of duration and easing of these changes. 
                    </p>

                    <p>
                        Hover animations include color changes, background modifications and transition effects.
                    </p>

                    <p>
                        Hover animations can provide visual feedback and enhance the interactivity of a website, making it more engaging for users. These animations are static and rely on user interaction; once the user moves the cursor away, the element reverts to its original state.
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "index.php">Home</a>
                            <a target="_blank" href = "identify.php">Identify</a>
                            <a target="_blank" href = "species.php">Explore</a>
                            <a target="_blank" href = "contributions.php">Contributions</a>  
                            <a target="_blank" href = "enquiry.php">Enquiry</a>
                            <a target="_blank" href = "profile_dld.php">Profiles</a>
                            <a target="_blank" href = "login_verification.php">Account</a>
                        </div>
                    </div>

                    <div class = "dld_buttons_column">
                        <h3>Source :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "https://codepen.io/peiche/pen/kQwYVJ?editors=1100">Source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dld_row">
            <div class="dld_column_img">
                <img src = "styles/images/czy/gifs/registration_login.gif" alt = "pic">
            </div>

            <div class="dld_column">
                <div class="dld_enhancements_description">
                    <h2>Search bar</h2>
                    <p>
                        The search bar is usually designed using PHP input elements, such as &lt;input type="text"&gt;, and often includes a submit button (&lt;input type="submit"&gt;) or a search icon. CSS styles are applied to define the appearance, positioning and layout of the search bar within the webpage.
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "explore.php">Explore</a>
                        </div>
                    </div>

                    <div class = "dld_buttons_column">
                        <h3>Source :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "https://www.geeksforgeeks.org/create-a-search-bar-using-html-and-css/">Source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <div class = "dld_footer_section_1">
            <?php include_once("dld_footer_section_1.php"); ?>

            <div class = "dld_section_1_footer_right">
                <h1 class = "dld_footer_heading">Acknowledgement</h1>

                <!-- <div class = "dld_footer_section_1_center_row">
                    <div class = "dld_footer_section_1_center_column">
                        <a href = "index.php" class = "dld_footer_section_1_center_navigation_link_1">Home</a>
                        <a href = "contributions.php">Contributions</a>
                        <a href = "login.php">Accounts</a>
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <a href = "identify.php">Identify</a>
                        <a href = "enquiry.php">Enquiry</a>
                        <a href = "enhancements.php">Enhancements</a>
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <a href = "explore.php">Explore</a>
                        <a href = "profile_ash.php">Profiles</a>
                    </div>
                </div> -->
                <p>None</p>
            </div>
        </div>

        <?php include_once("dld_footer_section_2.php"); ?>
    </footer>
</body>
</html>