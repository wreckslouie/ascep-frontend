<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<div class="row">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<?php if( of_get_option('footer_social') ) sparkling_social_icons(); ?>
					<nav role="navigation" class="col-md-6">
						<?php sparkling_footer_links(); ?>
					</nav>
					<div class="copyright col-md-6">
						<?php echo of_get_option( 'custom_footer_text', 'sparkling' ); ?>
						
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

	<script src="<?php bloginfo('template_directory'); ?>/inc/js/custom/jquery.min.js"></script>
<?php wp_footer(); ?>

	<!-- Scripts -->
	<script src="<?php bloginfo('template_directory'); ?>/inc/js/custom/skel.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/inc/js/custom/jquery.scrollgress.min.js"></script>
	<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/inc/js/custom/ie/respond.min.js"></script><![endif]-->
	<script src="<?php bloginfo('template_directory'); ?>/inc/js/custom/main.js"></script>
</body>
</html>