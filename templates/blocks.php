<?php /* Template name: Blocks */
get_header(); ?>
       
	<div id="main-area">
		
		<?php while(have_posts()): the_post(); ?>
			<div <?php post_class(); ?>>

				<div class="entry">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?> 
		
	</div>
    
<?php get_footer(); ?>