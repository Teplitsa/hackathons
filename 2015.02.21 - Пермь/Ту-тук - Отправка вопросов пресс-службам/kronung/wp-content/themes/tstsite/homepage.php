<?php
/**
 * Template Name: Homepage
 * The Template for homepage
 * 
 */

get_header(); ?>
	
<section class="home-section home-blocks" style="display:none;"><div class="inner">
		
	<div class="frame">
	<?php echo do_shortcode('[la_banner type="homeblock" num="3" format="home_textblock" format_args="bit-4" orderby="menu_order" order="ASC"]');?>
	</div><!-- .frame -->
	

</div></section><!-- .home-section -->

<section class="home-section callout"><div class="inner">

	<?php the_content();?>

</div></section>

<?php get_footer(); ?>