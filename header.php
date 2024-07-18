<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <title><?php wp_title(); ?></title>
    
    <meta charset="UTF-8">
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div id="header-hero">
	
        <header id="primary-header">
            <div class="wrapper">
                <div class="grid">			
                    <a class="logo grid-span-3" href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/rt-fitness-logo.svg">
                    </a>
                    <div id="nav-wrapper">
                        <?php 
                        get_template_part('partials/nav', 'contact');
                        get_template_part('partials/nav', 'primary'); ?>
                    </div>
                    
                    <!--
                    <div id="hamburger" class="hamburger hamburger--slider js-hamburger">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </header>

    <?php 
    if(is_home()): 
        get_template_part('partials/hero');
    endif; ?>

    <?php if(has_post_thumbnail()): ?>
        <div class="wrapper">
        <div id="featured-image">
            <?php the_post_thumbnail(); ?> 
        </div>
        </div>
    <?php endif; ?>

    </div>