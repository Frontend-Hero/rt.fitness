<?php get_header(); ?>
		
    <div id="main-area">
        <div class="wrapper wrapper-with-thumb">
            
            <div class="grid">
                <div class="grid-span-9">

                <div id="unit-feed">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2160812257965794"
                         crossorigin="anonymous"></script>
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-format="fluid"
                         data-ad-layout-key="-gw-3+1f-3d+2z"
                         data-ad-client="ca-pub-2160812257965794"
                         data-ad-slot="4086617847"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

                <?php 
                $home_args = array(
                    'posts_per_page' => 3,
                    'category_name' => 'tutorial',
                );
                $home_loop = new WP_Query($home_args);

                    while($home_loop->have_posts()): $home_loop->the_post(); ?> 

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

                <?php get_sidebar(); ?>

            </div>
            <!-- / grid -->

        </div>
        <!-- / wrapper -->

    </div>
    <!-- / main area -->
	
    
<?php get_footer(); ?>
