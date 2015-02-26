<?php
/**
 * Template Name: Homepage
 * The Template for homepage
 * 
 */

get_header(); ?>

<section class="home-section news-grid" style="margin-top:30px;"><div class="inner">
	<h3 class="grid-title">Новые исполнители</h3>
	
	<div class="frame">
		<?php echo do_shortcode('[frl_query q="post_type=singer+posts_per_page=8" format="content-embed"]'); ?>
	</div>
	
</div></section><!-- .frame .page-body -->

<section class="home-section news-grid"><div class="inner">
	<h3 class="grid-title">Новые мероприятия</h3>
	
	<div class="frame">
		<?php echo do_shortcode('[frl_query q="post_type=event+posts_per_page=8" format="content-embed"]'); ?>
	</div>
	
</div></section><!-- .frame .page-body -->

<?php get_footer(); ?>