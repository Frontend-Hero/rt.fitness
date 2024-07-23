<?php /* Template Name: Contact */
get_header(); ?>
		
    <div id="main-area" style="position: relative;">

    <div id="google-map"></div>

    <style type="text/css">
    #google-map {
        margin: 0 auto 0 auto;
        border: 1px solid #ccc;
        width: 100%;
        height: 100vh;
        align-self: center;
    }
    </style>

        <div class="wrapper" style="border: 5px solid red; position: absolute; top: 0;">
        
            <div class="grid">
                <div class="grid-span-12">
                <?php while(have_posts()): the_post(); ?> 

                    <div <?php post_class(); ?>>

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