<?php get_header(); ?>
		
    <div id="main-area">

        <?php // get_template_part('partials/quick-contact'); ?>

        <div class="wrapper">
        
            <div class="grid">
                <div class="grid-span-12">
                <?php while(have_posts()): the_post(); ?> 

                    <div <?php post_class(); ?>>

                        <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                                <?php the_post_thumbnail(); ?> 
                            </div>
                        </a>
                        <?php endif; ?>

                        <div class="content-area excerpt">
                            <h1><?php the_title(); ?></h1>
                            <div class="entry">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?> 
                </div>

                <?php // get_sidebar(); ?>

            </div>
            <!-- / grid -->

        </div>
        <!-- / Wrapper -->

    </div>
    <!-- / main area -->
	
<?php get_footer(); ?>