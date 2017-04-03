		<footer>
			<div id="footer_bottom">
				<div class="container">
					<?php wp_nav_menu(array("theme_location" => "service-footer","container_id" => "footer_nav")) ;?>
					<!--<div id="footer_nav">
						<ul>
							<li><a href="index.php">ABOUT US</a></li>
							<li><a href="index.php">ELECTRICAL SERVICES</a></li>
							<li><a href="index.php">COMMERCIAL SERVICES</a></li>
							<li><a href="index.php">GENERATORS</a></li>
							<li><a href="index.php">CONTACT US</a></li>
						</ul>
					</div>-->
					<div id="social_media">
						<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png">
					</div>
					<div id="footer_address">
						<p>Current Electrical</p>
						<p>14921 E Trent</p>
						<p>Spokane Valley, WA</p>
						<p id="phone_text"><a href="tel:15099282522">(509) 928-2522</a></p>
						<p id="footer_license">CURRENTI934D6</p>
					</div>
				</div>
			</div>
			<div id="footer_badges">
				<div class="container">
					<div id="badge_logos">
						<img src="<?php echo get_template_directory_uri(); ?>/images/tech-seal.png">
						<p>2016 All Rights Reserved. Current Electical. Marketing for home services by Vitalstorm.</p>
					</div>
				</div>
			</div>
		</footer>	
		<?php wp_footer() ;?>		
	</body>	
</html>			