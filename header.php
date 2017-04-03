<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html itemscope itemtype="http://schema.org/LocalBusiness" <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<link href="https://fonts.googleapis.com/css?family=Assistant:400,600,700,800" rel="stylesheet">

		<?php wp_head(); ?>
	</head>
	<body>
		<div id="mobile_header_wrapper">
			<div class="container">
				<div id="schedule_now_mobile">
					<img src="<?php echo get_template_directory_uri(); ?>/images/mobile-menu.png">
				</div>
				<div id="header_logo">
					<a href="<?php echo home_url() ; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/current-electric-logo.png" title="current electrical"></a>
				</div>
				<div id="call_now">
					<a href="tel:15099282522">
						<img src="<?php echo get_template_directory_uri() ; ?>/images/call-now-mobile.png">
					</a>
				</div>
			</div>	
		</div>
		<div id="pop_bg">
			<div id="pop_up_main_div">
				<p>SCHEDULE SERVICE | <a href="tel:15099282522" id="mobile_tel">509-928-2522</a></p>
				<div id="close_popup_div">
					<p>X</p>
				</div>
				<div id="form_area">
					<div class="form_width">
						<form id="form366" name="form366" class="wufoo topLabel page form-body" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" validate action="https://vitalstorm.wufoo.com/forms/qlxdf0w1xyrb97/#public">
							<div id="top_input">
								<input id="Field3" name="Field3" type="text" class="field text medium" value="" maxlength="255" placeholder="NAME*" tabindex="1" onkeyup="" required />
								<input id="Field7" name="Field7" type="text" class="field text medium" value="" maxlength="255" placeholder="PHONE*"tabindex="2" onkeyup=""       required />
								<input id="Field8" name="Field8" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3" placeholder="EMAIL*" required />
								<input id="Field17" name="Field17" type="address" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3" placeholder="ADDRESS*" required />
								<input id="Field9" name="Field9" type="text" class="field text medium" value="" maxlength="255" tabindex="4" onkeyup="" placeholder="SERVICE NEEDED*" required />
								<input id="submitForm" name="saveForm" type="submit" placeholder="Name">
							</div>
							<li class="hide">
								<label for="comment">Do Not Fill This Out</label>
								<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
								<input type="hidden" id="idstamp" name="idstamp" value="F7TuUnP2BItTOe5jrBiXPhjjJQu60PKkLeKBZs8Rho0=" />
							</li>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="mobile_navigation">
			<div id="hey">
				<div class="close-mobile-navigation"><img alt="close menu" src="<?php echo get_template_directory_uri() ; ?>/images/close_off_canvas_dark.png"><span>Close Menu</span></div>
				<?php wp_nav_menu(array("theme_location" => "mobile-menu","container" => false,"menu_id" => "mobile_menu")) ; ?>
			</div>
		</div>
		<header>
			<div id="header_wrapper">
				<div class="container">
					<div id="call_now">
						<a href="tel:15099282522">
							<img src="<?php echo get_template_directory_uri(); ?>/images/call-now.png">
							<span>509-928-2522</span>
						</a>
					</div>
					<div id="header_logo">
						<a href="<?php echo home_url() ; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/current-electric-logo.png" title="current electrical"></a>
					</div>
					<div id="schedule_now">
						<p>SCHEDULE SERVICE</p>
					</div>
					<div class="clear"></div>
				</div>	
				<nav>
					<div id="header_nav">
						<div class="container">
							<?php wp_nav_menu(array("theme_location" => "primary","container_id" => "main_nav")) ;?>
						</div>
					</div>
				</nav>
			</div>
		</header>	