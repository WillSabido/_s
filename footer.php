<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package felejo
 */
?>

	</div><!-- #content -->
<div id="footer-widgets" class="row row-centered">
<div class="col-xs-12 col-centered" style="margin: 0 auto;">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : ?>
	<div><p>Content not found</p></div><!-- END widget full column -->
<?php endif; ?>
</div><!-- END widget row -->
</div><!-- END # footer-widgets row -->
	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info">
			<p class="credits twocol pull-left"><?php echo '&copy;' . date('Y') . '&nbsp;' . get_bloginfo ( 'name' ); ?> All rights reserved.</p>
			<p class="credits twocol pull-right">
				<?php echo 'Web development and hosting by <a href="http://webisabihosting.co.uk" target="_blank" rel="designer">WebiSabi</a>'; ?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</div><!-- #wrap -->
</html>