<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package felejo
 */
?>
	<div id="col-widgets" class="col-xs-12 col-md-4">
	<div id="secondary" class="widget-area" role="complementary">
	<div id="widget-wrapper">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'felejo' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'felejo' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #widget-wrapper -->
	</div><!-- #secondary -->
	</div><!-- #col-widgets" -->
