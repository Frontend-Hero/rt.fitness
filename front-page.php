<?php /** Template Name: Home */
get_header(); ?>
		
    <div id="main-area">

        <?php get_template_part('partials/services'); ?>

        <?php get_template_part('partials/about-intro'); ?>

        <?php get_template_part('partials/testimonials'); ?>

        <?php get_template_part('partials/faq'); ?>

        <?php get_template_part('partials/quick-contact'); ?>
        
        <!--<div class="grid">
            <div class="grid-span-9">
            <?php while(have_posts()): the_post(); ?> 

                <div <?php post_class(); ?>>

                    <?php /* if(has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                            <?php // the_post_thumbnail(); ?> 
                        </div>
                    </a>
                    <?php endif; */ ?>

                    <div class="content-area excerpt">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="tags">
                            <?php echo get_the_tag_list('',' ',''); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?> 
            </div>

            <?php // get_sidebar(); ?>

        </div>-->
        <!-- / grid -->

    </div>
    <!-- / main area -->
	
<?php get_footer(); ?>