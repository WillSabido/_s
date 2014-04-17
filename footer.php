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

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info">
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'felejo' ), 'felejo', '<a href="http://webisabihosting.com/" rel="designer">Webi Sabi</a>' ); ?>
			<p class="credits twocol pull-right">
				<?php echo 'Web development and hosting by <a href="http://webisabihosting.co.uk" target="_blank">WebiSabi</a>'; ?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div><!-- #wrap -->
</body>
</html>