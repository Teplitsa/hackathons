<?php
/**
 * The Header for our theme.
 */
?><!doctype html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset'); ?>">    
	<meta name="viewport" content="width=device-width" >
	<link rel="profile" href="http://gmpg.org/xfn/11">
		
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<?php wp_head(); ?>
	<!--Microsoft -->
    <meta http-equiv="cleartype" content="on">
		
</head>
<?php flush(); ?>

<body id="top" <?php body_class('style-paged padded'); ?>>
<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header" role="banner"><div class="inner">
		
	<div class="frame">
		
		<div class="bit-6">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"  class="site-title" rel="home"></a>
			</div>
		</div>
		
		<div class="bit-2">&nbsp;</div>
	</div>
		
	</div></header>
	
	<nav id="site-navigation" class="main-navigation" role="navigation"><div class="inner">
		<?php 
			wp_nav_menu(array(
				'theme_location'  => 'primary',
				//'menu'          => , 
				'container'       => false,				
				'menu_class'      => 'gmenu',
				'menu_id'         => 'global-menu',
				'echo'            => true,                
				'depth'           => 0, 
			));
		?>
	</div></nav><!-- #site-navigation -->

	<div id="content" class="site-content">