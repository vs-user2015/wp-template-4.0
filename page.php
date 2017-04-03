<?php get_header(); ?>
<?php get_template_part("template-part/interior-page-header") ;?>
		<section id="content">
			<div class="container">
				<div class="section-wrapper-home-page">
					<div>
						<div id="copy_interior">
							<?php if(have_posts()): while(have_posts()) : the_post() ; ?>
							<?php the_content() ; ?>
							<?php endwhile ; endif ; ?>						
						</div>
					</div>
					<?php get_sidebar() ; ?>
					<div class="clear"></div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
