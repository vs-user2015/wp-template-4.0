<?php get_header(); ?>
	<h1>Hello World</h1>
	<?php if(have_posts()) : while(have_posts()) : the_post() ; ?>
	<div class="blog-post">
		<div class="blog-header">
			<?php 	
				if(has_post_thumbnail()){
					the_post_thumbnail();
				}else{
					echo "<img alt='vitalstorm default thumbnail' src='" . get_bloginfo("stylesheet_directory") . "/images/default-thumbnail.png'>";
				}
					 
			?>
		</div>
		<div class="content-copy"> 
			<h3><a href="<?php the_permalink() ; ?>"><?php echo the_title() ; ?></a></h3>
			<p class="blog-author"> by <?php the_author() ; ?> on <?php echo get_the_date() ; ?></p>
			<div class="the_excerpt"><?php echo the_excerpt() ; ?></div> 
		</div>
	</div>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
