<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <title><?php wp_title(); ?></title>
    
    <meta charset="UTF-8">
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/x-icon">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<header id="primary-header">
		<div class="wrapper">
			<div class="grid">
				<h1 class="grid-span-6">
					<a class="logo" href="<?php echo home_url(); ?>">
						<?php bloginfo('name'); ?>
					</a>
				</h1>
				<div id="hamburger" class="hamburger hamburger--slider js-hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
			</div>
			
		</div>
	</header>
	
	<div id="nav-primary-wrapper">
	<?php 
	$args = array
	(
		'menu' 			  => 3,
		'container' 	  => 'nav',
		'container_id'	  => 'nav-primary',
		'container_class' => 'grid-span-9 wrapper'
	);
	wp_nav_menu( $args ); ?>
	</div>
	
	