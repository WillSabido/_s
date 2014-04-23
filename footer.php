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
<div id="footer-widgets" class="row">
<div class="col-lg-12 darkBody" style="float: none; margin: 0 auto;">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : ?>
	<div><h5>Content not found</h5></div>
<?php endif; ?>
</div>
</div><!-- # footer-widgets row -->
	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info">
			<p class="credits twocol pull-left"><?php echo '&copy;' . date('Y') . '&nbsp;' . get_bloginfo ( 'name' ); ?> All rights reserved.</p>
			<p class="credits twocol pull-right">
				<?php echo 'Web development and hosting by <a href="http://webisabihosting.co.uk" target="_blank">WebiSabi</a>'; ?>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'felejo' ), 'felejo', '<a href="http://webisabihosting.com/" rel="designer">Webi Sabi</a>' ); ?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div><!-- #wrap -->
</body>
</html>