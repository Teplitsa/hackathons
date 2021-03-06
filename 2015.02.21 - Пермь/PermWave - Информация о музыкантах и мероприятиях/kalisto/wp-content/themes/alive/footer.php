<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package alv
 */

$cc_link = '<a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Creative Commons СС-BY-SA 3.0</a>';
$tst = __("Teplitsa of social technologies", 'svet');

$banner = get_template_directory_uri().'/img/te-st-logo-10x50';

?>
	</div><!-- #content -->
	
	<div id="partners-line">
		<h3><?php _e('Our partners', 'alv');?></h3>
		<!-- partners -->
	</div>
	
	<div id="bottombar" class="widget-area">		
		<div class="frame">
			<div class="bit lg-3"><?php alv_site_brnading();?></div>					
			<div class="bit lg-3 lg-offset-3"><?php dynamic_sidebar( 'footer_1-sidebar' );?></div>
			<div class="bit lg-3"><?php dynamic_sidebar( 'footer_2-sidebar' );?></div>			
		</div>	
	</div>
	
	
	<footer id="colophon" class="site-footer" role="contentinfo">		
		<div class="frame">
			<div class="bit md-6">
				<div class="copy"><a href="<?php home_url();?>"><?php bloginfo('name');?></a>. <?php printf(__('All materials of the site are avaliabe under license %s.', 'alv'), $cc_link);?>
				</div>
			</div>
			
			<div class="bit md-6">
				<div class="te-st-bn">
					<span class="support">Сайт сделан <br>при поддержке</span>
					<a title="<?php echo $tst;?>" href="http://te-st.ru/">
						<img alt="<?php echo $tst;?>" src="<?php echo $banner;?>.svg" onerror="this.onerror=null;this.src=<?php echo $banner;?>.png;">
					</a>
				</div>
			</div>		
		</div>		
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
