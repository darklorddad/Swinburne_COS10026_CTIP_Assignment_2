<?php     
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $account_text = "Account";
    if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "000001") {
        $account_text = "Admin Dashboard";
    }
    echo '
        <nav class = "dld_top_navigation_bar">
            <ul>
                <li class="dld_top_navigation_bar_item_first">
                    <a href="index.php" class="dld_top_navigation_bar_link">
                        <span class="dld_top_navigation_bar_icon">
                            <span class="material-symbols-outlined">home</span>
                        </span>
                        <span class="dld_top_navigation_bar_text">
                            Home
                        </span>
                    </a>
                </li>

                <li>
                    <a href = "identify.php">
                        <span class = "dld_top_navigation_bar_icon">
                            <span class = "material-symbols-outlined">search</span>
                        </span>
                        <span class = "dld_top_navigation_bar_text">
                            Identify
                        </span>
                    </a>
                </li>

                <li>
                    <a href = "explore.php">
                        <span class = "dld_top_navigation_bar_icon">
                            <span class = "material-symbols-outlined">explore</span>
                        </span>
                        <span class = "dld_top_navigation_bar_text">
                            Explore
                        </span>
                    </a>
                </li>

                <li>
                    <a href = "contributions.php">
                        <span class = "dld_top_navigation_bar_icon dld_top_navigation_bar_set">
                            <span class = "material-symbols-outlined">groups</span>
                        </span>
                        <span class = "dld_top_navigation_bar_text">
                            Contributions
                        </span>
                    </a>
                </li>

                <li><a href = "index.php"><p>FLORASCAN</p></a></li>

                <li>
                    <a href = "enquiry.php">
                        <span class = "dld_top_navigation_bar_icon">
                            <span class = "material-symbols-outlined">forward_to_inbox</span>
                        </span>
                        <span class = "dld_top_navigation_bar_text">
                            Enquiry
                        </span>
                    </a>
                </li>

                <li>
                    <a href = "profile_ash.php">
                        <span class = "dld_top_navigation_bar_icon">
                            <span class = "material-symbols-outlined">badge</span>
                        </span>
                        <span class = "dld_top_navigation_bar_text">
                            Profiles
                        </span>
                    </a>
                </li>

                <li>
                    <a href = "login_verification.php">
                        <span class = "dld_top_navigation_bar_icon">
                            <span class = "material-symbols-outlined">account_circle</span>
                        </span>
                        <span class = "dld_top_navigation_bar_text">
                            ' . $account_text . '
                        </span>
                    </a>
                </li>

                <li class = "dld_top_navigation_bar_item_last">
                    <a href = "enhancements.php">
                        <span class = "dld_top_navigation_bar_icon">
                            <span class = "material-symbols-outlined">hotel_class</span>
                        </span>
                        <span class = "dld_top_navigation_bar_text">
                            Enhancements
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
'; ?>