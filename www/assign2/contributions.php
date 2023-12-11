<!DOCTYPE html>
<html lang = "en">

<head>
	<meta name = "author" content = "Ashley Jong">
	<meta name = "description" content = "Contributions">
	<title>FLORASCAN - Contributions</title>
	<?php include_once("head.php"); ?>
</head>

<body class = "ash_body">
	<?php include_once("dld_background_dots.php"); ?>
	<?php include_once("dld_top_navigation_bar.php"); ?>
	<?php
		$hostname = "127.0.0.1";
		$user = "root";
		$password = "";
		$database = "florascan_database";
		
		$conn = mysqli_connect($hostname, $user, $password);
		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		if (!mysqli_select_db($conn, $database)) {
			$sql = "CREATE DATABASE $database";
		}

		// Check if table exists
		$tableName = "user_comments";
		$tableCheck = mysqli_query($conn, "SHOW TABLES LIKE '$tableName'");
	
		if (mysqli_num_rows($tableCheck) == 0) {
			// Table doesn't exist, so create it
			$sql = "CREATE TABLE user_comments (
				id INT AUTO_INCREMENT PRIMARY KEY, 
				comment VARCHAR(255) NOT NULL
			)";
	
			mysqli_query($conn, $sql);
		} 
	?>

	<div class = "ash_section_1">
		<div class = "ash_page_header">
			<h1 class = "ash_title_header">Contributions</h1>
			<p>Trees are poems that the earth writes upon the sky.</p>
		</div>
	</div>


	<div class = "ash_big_container">
		<!-- flip-card-container -->
		<!-- Avocado -->
		<div class = "ash_flip_card_container">
			<div class = "ash_flip_card">

				<div class = "ash_card_front">
					<figure class = "ash_figure">
						<div class = "ash_img_bg"></div>
						<img class = "ash_plant_post_img" src = "styles/images/ash/ash_avocado.jpg" alt = "avocado">
						<figcaption class = "ash_plant_name">Avocado</figcaption>
					</figure>
				</div>

				<div class = "ash_card_back">
					<div class = "ash_box">
						<a href = "#avocadomoreinfo" class = "ash_moreinfo_button">More info</a>
						<hr>
						<hr>
						<a href = "#avocadocomment" class = "ash_moreinfo_button">Comment</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Chinaberry -->
		<div class = "ash_flip_card_container">
			<div class = "ash_flip_card">

				<div class = "ash_card_front">
					<figure class = "ash_figure">
						<div class = "ash_img_bg"></div>
						<img class = "ash_plant_post_img" src = "styles/images/ash/ash_chinaberry.jpg" alt = "chinaberry">
						<figcaption class = "ash_plant_name">Chinaberry</figcaption>
					</figure>
				</div>

				<div class = "ash_card_back">
					<div class = "ash_box">
						<a href = "#chinaberrymoreinfo" class = "ash_moreinfo_button">More info</a>
						<hr>
						<hr>
						<a href = "#chinaberrycomment" class = "ash_moreinfo_button">Comment</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Cocoplum -->
		<div class = "ash_flip_card_container">
			<div class = "ash_flip_card">

				<div class = "ash_card_front">
					<figure class = "ash_figure">
						<div class = "ash_img_bg"></div>
						<img class = "ash_plant_post_img" src = "styles/images/ash/ash_cocoplum.jpg" alt = "cocoplum">
						<figcaption class = "ash_plant_name">Cocoplum</figcaption>
					</figure>
				</div>

				<div class = "ash_card_back">
					<div class = "ash_box">
						<a href = "#cocoplummoreinfo" class = "ash_moreinfo_button">More info</a>
						<hr>
						<hr>
						<a href = "#cocoplumcomment" class = "ash_moreinfo_button">Comment</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Nutmeg -->
		<div class = "ash_flip_card_container">
			<div class = "ash_flip_card">

				<div class = "ash_card_front">
					<figure class = "ash_figure">
						<div class = "ash_img_bg"></div>
						<img class = "ash_plant_post_img" src = "styles/images/ash/ash_nutmeg.jpg" alt = "nutmeg">
						<figcaption class = "ash_plant_name">Nutmeg</figcaption>
					</figure>
				</div>

				<div class = "ash_card_back">
					<div class = "ash_box">
						<a href = "#nutmegmoreinfo" class = "ash_moreinfo_button">More info</a>
						<hr>
						<hr>
						<a href = "#nutmegcomment" class = "ash_moreinfo_button">Comment</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Japanese Persimmon -->
		<div class = "ash_flip_card_container">
			<div class = "ash_flip_card">

				<div class = "ash_card_front">
					<figure class = "ash_figure">
						<div class = "ash_img_bg"></div>
						<img class = "ash_plant_post_img" src = "styles/images/ash/ash_japanesepersimmon.jpg"
							alt = "japanese persimmon">
						<figcaption class = "ash_plant_name">Japanese Persimmon</figcaption>
					</figure>
				</div>

				<div class = "ash_card_back">
					<div class = "ash_box">
						<a href = "#japanesepersimmonmoreinfo" class = "ash_moreinfo_button">More info</a>
						<hr>
						<hr>
						<a href = "#japanesepersimmoncomment" class = "ash_moreinfo_button">Comment</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Velvet Apple -->
		<div class = "ash_flip_card_container">
			<div class = "ash_flip_card">

				<div class = "ash_card_front">
					<figure class = "ash_figure">
						<div class = "ash_img_bg"></div>
						<img class = "ash_plant_post_img" src = "styles/images/ash/ash_velvetapple.jpg" alt = "velvet apple">
						<figcaption class = "ash_plant_name">Velvet Apple</figcaption>
					</figure>
				</div>

				<div class = "ash_card_back">
					<div class = "ash_box">
						<a href = "#velvetapplemoreinfo" class = "ash_moreinfo_button">More info</a>
						<hr>
						<hr>
						<a href = "#velvetapplecomment" class = "ash_moreinfo_button">Comment</a>
					</div>
				</div>
			</div>
		</div>

		<!-- /flip-card-container -->
	</div>

	<div class = "ash_box">
		<div class = "ash_modal_container" id = "avocadomoreinfo">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Avocado</h1>
				<h2 class = "ash_modal_title2">Persea americana</h2>
				<p class = "ash_modal_text">The avocado (Persea americana) is a medium-sized, evergreen tree in the laurel
					family (Lauraceae). It is native to the Americas and was first domesticated in Mesoamerica more than
					5,000 years ago.</p>
				<a href = "#ash_contribution" class = "ash_link_2"></a>
			</div>
		</div>
	</div>

	<div class = "ash_box">
		<div class = "ash_modal_container" id = "avocadocomment">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Comments</h1>
				<!-- Display the comments -->
				<div class = "ash_commentss">
					<?php
						mysqli_select_db($conn, $database);
						$sql = "SELECT * FROM user_comments ORDER BY id DESC";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							while ($res = mysqli_fetch_assoc($result)) {
								echo '<div class = "ash_comment_small_box">' . htmlspecialchars($res['comment'], ENT_QUOTES, 'UTF-8') . "</div>\n";
							}
						} else {
							// No records found
							echo "<div class = 'ash_no_comment'>No comments</div>";
						}
					?>
				</div>

				<div class = "ash_comment_box">
					<form method = "post" action = "submit_comment.php">
					  <textarea name = "ash_comment_boxx" cols = "10" rows = "3" placeholder = "Leave a comment here"></textarea>
					  <input type = "submit" class = "ash_submit_btn" value = "Post Comment">
					</form>
				</div>
				<a href = "#ash_contribution" class = "ash_link_2"></a>

				
			</div>
		</div>
	</div>

	<div class = "ash_box">
		<div class = "ash_modal_container" id = "chinaberrymoreinfo">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Chinaberry</h1>
				<h2 class = "ash_modal_title2">Melia azedarach</h2>
				<p class = "ash_modal_text">Melia azedarach, commonly known as the chinaberry tree, pride of India,
					bead-tree, Cape lilac, syringa berrytree, Persian lilac, Indian lilac, or white cedar, is a species
					of deciduous tree in the mahogany family, Meliaceae, that is native to Indomalaya and Australasia.
				</p>
				<a href = "#ash_contribution" class = "ash_link_2"></a>
			</div>
		</div>
	</div>

	<div class = "ash_box">
		<div class = "ash_modal_container" id = "chinaberrycomment">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Comments</h1>
				<div class = "ash_comment_box">
					<form>
					  <textarea name = "ash_comment_boxx" cols = "30" rows = "3">Add a comment</textarea>
					  <input type = "submit" value = "Post">
					</form>
				</div>
				<a href = "#ash_contribution" class = "ash_link_2"></a>
			</div>
		</div>
	</div>

	
	<div class = "ash_box">
		<div class = "ash_modal_container" id = "cocoplummoreinfo">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Cocoplum</h1>
				<h2 class = "ash_modal_title2">Chrysobalanus icaco</h2>
				<p class = "ash_modal_text">Chrysobalanus icaco, the cocoplum, paradise plum, abajeru or icaco, is a
					low shrub or bushy tree found near sea beaches and inland throughout tropical Africa, tropical
					Americas and the Caribbean, and in southern Florida and the Bahamas.</p>
				<a href = "#ash_contribution" class = "ash_link_2"></a>
			</div>
		</div>
	</div>

	<div class = "ash_box">
		<div class = "ash_modal_container" id = "cocoplumcomment">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Comments</h1>
				<div class = "ash_comment_box">
					<form>
					  <textarea name = "ash_comment_boxx" cols = "30" rows = "3">Add a comment</textarea>
					  <input type = "submit" value = "Post">
					</form>
				</div>
				<a href = "#ash_contribution" class = "ash_link_2"></a>
			</div>
		</div>
	</div>

	<div class = "ash_box">
		<div class = "ash_modal_container" id = "nutmegmoreinfo">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Nutmeg</h1>
				<h2 class = "ash_modal_title2">Myristica fragrans houtt</h2>
				<p class = "ash_modal_text">Myristica fragrans is an evergreen tree indigenous to the Maluku Islands
					of Indonesia. It is important as the main source of the spices nutmeg and mace. It is widely
					grown across the tropics including Guangdong and Yunnan in China, Taiwan, Indonesia, Malaysia,
					Grenada in the Caribbean, Kerala in India, Sri Lanka and South America.</p>
				<a href = "#ash_contribution" class = "ash_link_2"></a>
			</div>
		</div>
	</div>

	<div class = "ash_box">
		<div class = "ash_modal_container" id = "nutmegcomment">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Comments</h1>
				<div class = "ash_comment_box">
					<form>
					  <textarea name = "ash_comment_boxx" cols = "30" rows = "3">Add a comment</textarea>
					  <input type = "submit" value = "Post">
					</form>
				</div>
				<a href = "#ash_contribution" class = "ash_link_2"></a>
			</div>
		</div>
	</div>

	<div class = "ash_box">
		<div class = "ash_modal_container" id = "japanesepersimmonmoreinfo">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Japanese Persimmon</h1>
				<h2 class = "ash_modal_title2">Diospyros kaki</h2>
				<p class = "ash_modal_text">Diospyros kaki, the Oriental persimmon, Chinese persimmon, Japanese
					persimmon or kaki persimmon, is the most widely cultivated species of the genus Diospyros.
					Although its first botanical description was not published until 1780, D. kaki is among the
					oldest cultivated plants, having been in use in China for more than 2000 years.</p>
				<a href = "#ash_contribution" class = "ash_link_2"></a>
			</div>
		</div>
	</div>

	<div class = "ash_box">
		<div class = "ash_modal_container" id = "japanesepersimmoncomment">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Comments</h1>
				<div class = "ash_comment_box">
					<form>
					  <textarea name = "ash_comment_boxx" cols = "30" rows = "3">Add a comment</textarea>
					  <input type = "submit" value = "Post">
					</form>
				</div>
				<a href = "#ash_contribution" class = "ash_link_2"></a>
			</div>
		</div>
	</div>

	<div class = "ash_box">
		<div class = "ash_modal_container" id = "velvetapplemoreinfo">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Velvet Apple</h1>
				<h2 class = "ash_modal_title2">Diospyros blancoi</h2>
				<p class = "ash_modal_text">Diospyros blancoi, (synonym Diospyros discolor), commonly known as velvet
					apple, velvet persimmon, kamagong, or mabolo tree, is a tree of the genus Diospyros of ebony
					trees and persimmons. It produces edible fruit with a fine, velvety, reddish-brown fur-like
					covering. The fruit has a soft, creamy, pink flesh, with a taste and aroma comparable to
					peaches. It is widely distributed and native to the Philippines, but it is also native to
					eastern and southern Taiwan. It has also been introduced to other parts of Southeast Asia, the
					Pacific Islands, South Asia, the Caribbean, Florida, and other tropical regions.
				</p>
				<a href = "#ash_contribution" class = "ash_link_2"></a>
			</div>
		</div>
	</div>

	<div class = "ash_box">
		<div class = "ash_modal_container" id = "velvetapplecomment">
			<div class = "ash_modal">
				<h1 class = "ash_modal_title">Comments</h1>
				<div class = "ash_comment_box">
					<form>
					  <textarea name = "ash_comment_boxx" cols = "30" rows = "3">Add a comment</textarea>
					  <input type = "submit" value = "Post">
					</form>
				</div>
				<a href = "#ash_contribution" class = "ash_link_2"></a>
			</div>
		</div>
	</div>

	<footer>
		<div class = "dld_footer_section_1">
			<?php include_once("dld_footer_section_1.php"); ?>

			<div class = "dld_section_1_footer_right">
				<h1 class = "dld_footer_heading">Acknowledgement</h1>
				<div class = "dld_footer_section_1_center_row">
                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Avocado</h1>
                        <a target = "_blank" href = "https://static01.nyt.com/images/2022/02/16/business/15Avocados-print/15Avocado-01-superJumbo.jpg" class = "dld_footer_section_1_center_navigation_link_1">Image</a>
                        <a target = "_blank" href = "https://en.wikipedia.org/wiki/Avocado">Info</a>
						<p></p>
                        
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Chinaberry</h1>
                        <a target = "_blank" href = "https://i.pinimg.com/736x/50/ca/de/50cade20013bc8d3d08e28f972e11c85.jpg">Image</a>
                        <a target = "_blank" href = "https://en.wikipedia.org/wiki/Melia_azedarach">Info</a>
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Cocoplum</h1>
                        <a target = "_blank" href = "https://images.saymedia-content.com/.image/t_share/MTc0OTQzMDQ4NDAzMzMwOTE4/florida-landscape-choice-the-cocoplum.jpg">Image</a>
                        <a target = "_blank" href = " https://en.wikipedia.org/wiki/Chrysobalanus_icaco">Info</a>
                    </div>

                </div>

				<div class = "dld_footer_section_1_center_row">
					<div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Japanese Persimmon</h1>
                        <a target = "_blank" href = "https://www.vdberk.com/media/cache/tree_large/media/34590/diospyros-kaki.jpg">Image</a>
                        <a target = "_blank" href = "https://en.wikipedia.org/wiki/Persimmon">Info</a>
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Nutmeg</h1>
                        <a target = "_blank" href = "https://images.meesho.com/images/products/250383408/uvofh_512.webp">Image</a>
                        <a target = "_blank" href = "https://en.wikipedia.org/wiki/Nutmeg">Info</a>
                    </div>

                    <div class = "dld_footer_section_1_center_column">
                        <h1 class = "dld_heading">Velvet Apple</h1>
                        <a target = "_blank" href = "https://lh4.googleusercontent.com/-SO3IlpJzy5o/TWnWAjkwL_I/AAAAAAAAADM/fwAZsS27jjg/s1600/Gabb.bmp">Image</a>
                        <a target = "_blank" href = "https://en.wikipedia.org/wiki/Diospyros_blancoi">Info</a>
                    </div>
                </div>
			</div>
		</div>

		<?php include_once("dld_footer_section_2.php"); ?>
	</footer>
</body>

</html>