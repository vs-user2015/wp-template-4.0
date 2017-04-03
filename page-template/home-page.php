<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Blank Theme
 */

get_header(); ?>
<div id="mobile_layout">
	<div id="our_services_box_mobile">
		<div class="container">
			<div class="trust trust_one">
				<a href="<?php echo home_url();?>/repair-code-compliance/">
					<h2>REPAIRS</h2>
					<p>GO TO OUR REPAIR SERVICES</p>
				</a>
			</div>
			<div class="trust trust_two">
				<a href="<?php echo home_url();?>/lighting/">
					<h2>LIGHTING</h2>
					<p>GO TO OUR LIGHTING SERVICES</p>
				</a>
			</div>
			<div class="trust trust_three">
				<a href="<?php echo home_url();?>/commercial-services/">
					<h2>COMMERICAL</h2>
					<p>GO TO OUR COMMERCIAL SERVICES</p>
				</a>
			</div>
			<div id="schedule_service_mobile">
				<p>SCHEDULE SERVICES</p>
			</div>
		</div>
	</div>

	<div id="service_area_mobile">
		<div class="container">
			<div id="service_area_list">
				<p class="title">OUR SERVICE AREA INCLUDES:</p>
				<div id="location_list">
					<ul>
						<li><a href="<?php echo home_url() ; ?>/spokane-valley/">Spokane Valley</a></li>
						<li><a href="<?php echo home_url() ; ?>/spokane/">Spokane</a></li>
						<li><a href="<?php echo home_url() ; ?>/liberty-lake/">Liberty Lake</a></li>
						<li><a href="<?php echo home_url() ; ?>/millwood/">Millwood</a></li>
						<li><a href="<?php echo home_url() ; ?>/veradale/">Veradale</a></li>
					</ul>
					<ul>
						<li><a href="<?php echo home_url() ; ?>/wandermere/">Wandermere</a></li>
						<li><a href="<?php echo home_url() ; ?>/otis-orchards/">Otis Orchards</a></li>
						<li><a href="<?php echo home_url() ; ?>/airway-heights/">Airway Heights</a></li>
						<li><a href="<?php echo home_url() ; ?>/country-homes/">Country Homes</a></li>
						<li><a href="<?php echo home_url() ; ?>/green-bluff/">Green Bluff</a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div id="offers_area_mobile">
		<div class="container">
			<div id="current_offers_mobile">
				<p class="title">CURRENTLY</p>
				<p class="text">OFFERING</p>
			</diV>
		</div>
		<div id="email_offer_mobile">
			<div class="container">
				<div id="form_subscription_wrapper">
					<img alt="coupon" id="coupon" src="<?php echo get_template_directory_uri(); ?>/images/coupon.png" title="coupon">
					<p>For even more savings, join our mailing list!</p>
					<div id="mobile-form-wrapper">
						<?php get_template_part("template-part/form-subscription") ;?>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<section class="USP_content_mobile">
		<div class="container">
			<div id="USP_header">
				<h2>WHAT SETS US APART</h2>
			</div>
		</div>
		<div id="USP">
			<div class="container">
				<div class="USP_Reason">
					<img class="USP_img" src="<?php echo get_template_directory_uri(); ?>/images/reason-1.png">
					<p>FAMILY OWNED <br> & OPPERATED</p>
				</div>
				<div class="USP_Reason">
					<img class="USP_img" src="<?php echo get_template_directory_uri(); ?>/images/reason-2.png">
					<p>CUSTOMER <br> COURTESY CALLS</p>
				</div>
				<div class="USP_Reason">
					<img class="USP_img" src="<?php echo get_template_directory_uri(); ?>/images/reason-3.png">
					<p>STRAIGHTFORWARD <br> PRICING</p>
				</div>
			</div>
		</div>
	</section>			

	<div id="testimonial_mobile">
		<div class="container">
			<div>
				<h3>HERE'S WHAT OTHERS ARE SAYING</h3>
			</div>
			<div id="reviews_box">
				<div class="review">
					<img id="review_stars" src="<?php echo get_template_directory_uri(); ?>/images/stars.png">
					<p class="quotes">
						"I just could not be happier with the service we received from CEI. From the moment they picked up the phone they were the epitome of professionalism."		
					</p>
					<p class="reviewer">-B. Pace</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- MOBILE END -->		
<div id="slider_area">
	<div class="container">
		<div id="sliding_banner">
			<div class="toggle-slide right">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-arrow-left.png" class="slider_arrow">
			</div>
			<div id="slider_viewport">
				<div id="slider_images">
					<img class="rotating-image" src="<?php echo get_template_directory_uri(); ?>/images/slider-1.jpg">
					<img class="rotating-image" src="<?php echo get_template_directory_uri(); ?>/images/slider-2.jpg">
					<img class="rotating-image" src="<?php echo get_template_directory_uri(); ?>/images/slider-3.jpg">
				</div>
			</div>
			<div class="toggle-slide left">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-arrow-right.png" class="slider_arrow">
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>	

<div id="our_services_box">
	<div class="container">
		<div class="trust trust_one">
			<a href="<?php echo home_url();?>/repair-code-compliance/">
				<h2>REPAIRS</h2>
				<p>GO TO OUR REPAIR SERVICES</p>
			</a>
		</div>
		<div class="trust trust_two">
			<a href="<?php echo home_url();?>/lighting/">
				<h2>LIGHTING</h2>
				<p>GO TO OUR LIGHTING SERVICES</p>
			</a>
		</div>
		<div class="trust trust_three">
			<a href="<?php echo home_url();?>/commercial-services/">
				<h2>COMMERICAL</h2>
				<p>GO TO OUR COMMERCIAL SERVICES</p>
			</a>
		</div>
	</div>
</div>

<section class="content">
	<div class="container">
		<div id="section-wrapper-home-page">
			<div>
				<div class="copy">
					<h1>ABOUT CURRENT ELECTRICAL, INC.</h1>
					<p style="text-align: center; line-height: 185%;">Current Electrical has been helping our neighbors in the greater Spokane area (and surrounding communities) since 2002. We provide a wide array of professional electrical and lighting services encompassing residential, commercial and industrial fields. Our team is made up of industry professionals and master electricians who have the skill and experience to complete any job. We’re driven to provide superior service, design and functionality regardless of project scope or complexity. From small electrical repairs to whole-home remodeling jobs, we are Spokane’s first, best source for electrical and lighting solutions. </p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="service_area">
		<div class="container">
			<div id="regional_map">
				<div id="service_area_state">
					<img src="<?php echo get_template_directory_uri(); ?>/images/service-area-state.png">
				</div>
				<div id="service_area_list">
					<p class="title">OUR SERVICE AREA INCLUDES:</p>
					<div id="location_list">
						<ul>
							<li><a href="<?php echo home_url() ; ?>/spokane-valley/">Spokane Valley</a></li>
							<li><a href="<?php echo home_url() ; ?>/spokane/">Spokane</a></li>
							<li><a href="<?php echo home_url() ; ?>/liberty-lake/">Liberty Lake</a></li>
							<li><a href="<?php echo home_url() ; ?>/millwood/">Millwood</a></li>
							<li><a href="<?php echo home_url() ; ?>/veradale/">Veradale</a></li>
						</ul>
						<ul>
							<li><a href="<?php echo home_url() ; ?>/wandermere/">Wandermere</a></li>
							<li><a href="<?php echo home_url() ; ?>/otis-orchards/">Otis Orchards</a></li>
							<li><a href="<?php echo home_url() ; ?>/airway-heights/">Airway Heights</a></li>
							<li><a href="<?php echo home_url() ; ?>/country-homes/">Country Homes</a></li>
							<li><a href="<?php echo home_url() ; ?>/green-bluff/">Green Bluff</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="offers_area">
		<div class="container">
			<div id="current_offers">
				<p class="title">CURRENTLY</p>
				<p class="text">OFFERING</p>
			</diV>
			<div id="email_offer">
				<div id="form_subscription_wrapper">
					<img alt="coupon" id="coupon" src="<?php echo get_template_directory_uri() ; ?>/images/coupon.png" title="coupon">
					<p>For even more savings, <br> join our mailing list!</p>
					<?php get_template_part("template-part/form-subscription") ;?>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>	
	
	<section id="USP_content">
		<div class="container">
			<div id="USP_header">
				<h2>WHAT SETS US APART</h2>
			</div>
		</div>
		<div id="USP">
			<div class="container">
				<div class="USP_Reason">
					<img class="USP_img" src="<?php echo get_template_directory_uri(); ?>/images/reason-1.png">
					<p>FAMILY OWNED <br> & OPPERATED</p>
				</div>
				<div class="USP_Reason">
					<img class="USP_img" src="<?php echo get_template_directory_uri(); ?>/images/reason-2.png">
					<p>CUSTOMER <br> COURTESY CALLS</p>
				</div>
				<div class="USP_Reason">
					<img class="USP_img" src="<?php echo get_template_directory_uri(); ?>/images/reason-3.png">
					<p>STRAIGHTFORWARD <br> PRICING</p>
				</div>
			</div>
		</div>
		<div id="USP_copy">
			<div class="container">
				<div class="copy">
					<p style="text-align: center; line-height: 185%;">Our professional staff is committed to making every service call a positive experience for our customers. This is why we are committed to punctual service and upfront pricing, so there’s no unreasonable window for service - and no surprises on billing. Current Electrical understands that your time is valuable and strives to be punctual and prepared on every scheduled appointment. We also guarantee no hidden fees, hourly rates or amended amounts; just a straightforward assessment of the job with a price you can count on.</p>
				</div>
			</div>
		</div>
	</section>

	<div id="testimonial">
		<div class="container">
			<div>
				<h3>HERE'S WHAT OTHERS ARE SAYING</h3>
			</div>
			<div id="reviews_box">
				<div class="review">
					<img id="review_stars" src="<?php echo get_template_directory_uri(); ?>/images/stars.png">
					<p class="quotes">
						"I just could not be happier with the service we received from CEI. From the moment they picked up the phone they were the epitome of professionalism."		
					</p>
					<p class="reviewer">- B. Pace</p>
				</div>

				<div class="review">
					<img id="review_stars" src="<?php echo get_template_directory_uri(); ?>/images/stars.png">
					<p class="quotes">
						"5 Stars! "
					</p>
					<p class="reviewer">– R Clubine </p>
				</div>

				<div class="review">
					<img id="review_stars" src="<?php echo get_template_directory_uri(); ?>/images/stars.png">
					<p class="quotes">
						"If you are in need of an outstanding electrician to show up to your home, call CEI! These guys are FANTASTIC! They don't gouge you on cost."
					</p>
					<p class="reviewer">– S Ram </p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();
 	