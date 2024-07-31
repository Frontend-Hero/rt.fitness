<?php /* Template Name: Well Done */
get_header(); ?>
		
    <div id="main-area" style="position: relative;">

    <?php
    // Check if 'fname' is set in the query string
    if (isset($_GET['fname'])) {
        // Sanitize the 'fname' value
        $fname = sanitize_text_field($_GET['fname']);
    }
    ?>

        <div class="wrapper">
        
            <div class="grid grid-cf">
                <div class="grid-span-12">
                <?php while(have_posts()): the_post(); ?> 

                    <div <?php post_class(); ?>>

                        <div class="content-area excerpt">
                            <h1>
                                <?php the_title();
                                if (!empty($fname) && is_string($fname)) {
                                    echo ', ' . esc_html($fname) . '!';
                                } 
                                ?>

                            </h1>
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