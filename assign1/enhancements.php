<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name = "author" content = "Edison Ho">
    <meta name = "description" content = "Enhancements">
    <title>FLORASCAN - Enhancements</title>
    <?php include_once("dld_head.php"); ?>
</head>
<body class = "dld_body">
    <?php include_once("dld_background.php"); ?>
    <?php include_once("dld_top_navigation_bar.php"); ?>

    <div class="ash_section_1">
		<div class="ash_page_header">
			<p class = "ash_title_header">Enhancements</p>
			<p>A page that lists out all the enhancements for FLORASCAN</p>
		</div>
	</div>

    <div class = "dld_enhancements_big_box">

        <div class="dld_row">
            <div class="dld_column_img">
                <img src = "styles/images/czy/gifs/side-nav-sticky.gif" alt="gif">
            </div>

            <div class="dld_column">
                <div class="dld_enhancements_description">
                    <h2>Top Navigation Bar / Side Navigation Bar</h2>
                    <p>
                        The navigation bar is usually constructed as a list of links. HTML unordered lists (&lt;ul&gt;) are used to structure the navigation items. Each list item (&lt;li&gt;) contains a link (&lt;a&gt;) to a specific page or section of the website. CSS styles are employed to enhance the appearance, positioning, and layout of the navigation bar. Hover can be applied to create interactive effects like color changes or underlines when users hover over on navigation items.
                    </p>

                    <p>
                        The navigation bar also has the CSS property (position: sticky;).
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "index.html">Mainpage</a>
                            <a target="_blank" href = "identify.html">Identify</a>  
                            <a target="_blank" href = "explore.html">Explore</a>  
                            <a target="_blank" href = "contributions.html">Contributions</a>
                            <a target="_blank" href = "enquiry.html">Enquiry</a>  
                            <a target="_blank" href = "profile_dld.html">Profiles</a>  
                            <a target="_blank" href = "login.html">Account</a>  
                        </div>
                    </div>

                    <div class = "dld_buttons_column">
                        <h3>Source :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "https://www.w3schools.com/css/css_navbar.asp">Source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dld_row">
            <div class="dld_column_img">
                <img src = "styles/images/czy/gifs/maps.gif" alt="gif">
            </div>

            <div class="dld_column">
                <div class="dld_enhancements_description">
                    <h2>Maps / Youtube</h2>
                    <p>An embeded Google Map is used to display the location of the plant as well as an embeded videa linked to an external video link allowing the user to play it while remaining on the current page. To implement this into the site the element (&lt;iframe&gt;) is used.</p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "index.html">Mainpage</a>
                            <a target="_blank" href = "identify.html">Identify</a>  
                        </div>
                    </div>

                    <div class = "dld_buttons_column">
                        <h3>Source :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "https://www.geeksforgeeks.org/how-to-add-google-map-inside-html-page-without-using-api-key/">Source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dld_row">
            <div class="dld_column_img">
                <img src = "styles/images/czy/gifs/carousel.gif" alt="gif">
            </div>

            <div class="dld_column">
                <div class="dld_enhancements_description">
                    <h2>Carousel / Slideshow</h2>
                    <p>
                        The carousel consists of a container element that holds multiple content panels or slides. Each slide is designed to be fully visible one at a time, while the others are hidden. Users can navigate through the content by manually clicking or using CSS-based navigation controls. 
                    </p>

                    <p>
                        HTML properties like input and label, and CSS properties like (overflow: hidden) help control the visibility and positioning of slides, creating a sliding effect. And with the absence of JavaScript means that the transition between slides automatically relies on CSS properties such as keyframes.
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "index.html">Mainpage</a>
                            <a target="_blank" href = "identify.html">Identify</a>  
                            <a target="_blank" href = "enquiry.html">Enquiry</a>  
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
    
        <div class="dld_row">
            <div class="dld_column_img">
                <img src = "styles/images/czy/gifs/modal-box.gif" alt="gif">
            </div>

            <div class="dld_column">
                <div class="dld_enhancements_description">
                    <h2>Modal boxes / Popup</h2>
                    <p>
                        A modal box is essentially a hidden or initially hidden container within a web page. It can be triggered to display by using CSS-based methods, such as pseudo-class selectors like (:target). When a trigger element (e.g., a button or link) is clicked or interacted with, the modal box becomes visible through CSS. The modal box typically contains content, which can range from text and images to forms or additional user interface elements. Users can close the modal box by clicking on a designated "close" button or an overlay element.
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "species.html">Explore</a>
                            <a target="_blank" href = "identify.html">Identify</a>  
                            <a target="_blank" href = "contributions.html">Contributions</a>  
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
                <img src = "styles/images/czy/gifs/flip-card.gif" alt="gif">
            </div>

            <div class="dld_column">
                <div class="dld_enhancements_description">
                    <h2>On Hover Animations</h2>
                    <p>
                        Hover animations are often applied to various elements such as buttons, links, images, and text. To implement hover animations, CSS property (:hover and transition) is primarily used. When the user hovers over an element, the CSS rules within the (:hover) block take effect, causing changes in appearance or behavior. Transitions are essential to creating smooth and gradual changes during hover. CSS properties like transition allows the control of duration and easing of these changes. 
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
                            <a target="_blank" href = "index.html">Mainpage</a>
                            <a target="_blank" href = "identify.html">Identify</a>
                            <a target="_blank" href = "species.html">Explore</a>
                            <a target="_blank" href = "contributions.html">Contributions</a>  
                            <a target="_blank" href = "enquiry.html">Enquiry</a>
                            <a target="_blank" href = "profile_dld.html">Profile</a>
                            <a target="_blank" href = "login.html">Account</a>
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
                <img src = "styles/images/czy/search-bar.png" alt = "pic">
            </div>

            <div class="dld_column">
                <div class="dld_enhancements_description">
                    <h2>Search Bar</h2>
                    <p>
                        The search bar is usually designed using HTML input elements, such as &lt;input type="text"&gt;, and often includes a submit button (&lt;input type="submit"&gt;) or a search icon. CSS styles are applied to define the appearance, positioning, and layout of the search bar within the webpage.
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "explore.html">Explore</a>
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

        <div class="dld_row">
            <div class="dld_column_img">
                <img src = "styles/images/czy/upload-file.png" alt="gif">
            </div>

            <div class="dld_column">
                <div class="dld_enhancements_description">
                    <h2>Upload File</h2>
                    <p>
                        The file upload element is created using HTML input elements with type="file". The input field presents a user interface that allows users to select and submit files from their local device. CSS can be used to style the file input field or the form, making it visually appealing and consistent with the website's design.
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "identify.html">Identify</a>
                        </div>
                    </div>

                    <div class = "dld_buttons_column">
                        <h3>Source :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "https://www.w3schools.com/howto/howto_html_file_upload_button.asp">Source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dld_row">
            <div class="dld_column_img">
                <img src = "styles/images/czy/gifs/anchor-link.gif" alt="gif">
            </div>

            <div class="dld_column">
                <div class="dld_enhancements_description">
                    <h2>Anchor Linking</h2>
                    <p>
                        Anchor linking is achieved using HTML elements with the id attribute and anchor tags. An anchor point within a page is created when an id is assigned to a HTML element using the format &lt;div id="section1"&gt;. To create a link that navigates to the anchor point,the element &lt;a&gt; is used. 
                    </p>

                    <p>
                        For example, &lt;a href="#section1"&gt;Go to Section 1&lt;/a&gt; or &lt;a href="example.html#section1"&gt;Go to Section 1 in example.html&lt;/a&gt;. When the anchor link is clicked, the page automatically scrolls to the corresponding anchor point of the current page or another page.
                    </p>

                    <div class = "dld_buttons_column">
                        <h3>Pages :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "index.html">Mainpage</a>
                            <a target="_blank" href = "explore.html">Explore</a>
                            <a target="_blank" href = "login.html">Account</a>
                        </div>
                    </div>

                    <div class = "dld_buttons_column">
                        <h3>Source :</h3>

                        <div class = "dld_flex_container">
                            <a target="_blank" href = "https://www.w3docs.com/snippets/html/how-to-create-an-anchor-link-to-jump-to-a-specific-part-of-a-page.html">Source</a>
                        </div>
                    </div>
                </div>
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

                <div class = "dld_footer_section_1_center_row">
                    <div class = "dld_footer_section_1_center_column">
                        <a href = "index.html" class = "dld_footer_section_1_center_navigation_link_1">Home</a>
                        <a href = "identify.html">Identify</a>
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <a href = "explore.html">Explore</a>
                        <a href = "contributions.html">Contributions</a>
                    </div>
                </div>
            </div>
        </div>

        <div class = "dld_footer_section_2">
            <p class = "dld_footer_section_2_copyright">Copyright © 2023 <a href = "index.html">FLORASCAN. </a>All rights reserved.</p>
        </div>
    </footer>
</body>
</html>