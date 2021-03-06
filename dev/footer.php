<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

?>

<footer id="colophon" class="site-footer">

	<?php
	if ( is_active_sidebar( 'sidebar-footer-1' ) ) {
		get_sidebar( 'footer-top' );
	}

	if ( is_active_sidebar( 'sidebar-footer-1' ) && is_active_sidebar( 'sidebar-footer-2' ) ) {
		echo '<hr />';
	}

	if ( is_active_sidebar( 'sidebar-footer-2' ) ) {
		get_sidebar( 'footer-bottom' );
	}
	?>

	<?php
	$show_copyright  = get_theme_mod( 'show_copyright', true );
	$show_theme_info = get_theme_mod( 'show_theme_info', true );

	if ( $show_copyright || $show_theme_info ) {
		?>

		<div class="site-info <?php echo ( is_active_sidebar( 'sidebar-footer-1' ) || is_active_sidebar( 'sidebar-footer-2' ) ) ? 'with-widgets' : ''; ?>">

			<?php if ( $show_copyright ) : ?>
				<div class="copyright">
					<span class="copyright-dates"><?php wprig_dynamic_copyright(); ?></span>
					<span class="copyright-message"><?php esc_html_e( 'All rights reserved.', 'wprig' ); ?></span>
				</div>
			<?php endif; ?>

			<?php if ( $show_theme_info ) : ?>
				<div class="credits">
					<?php wprig_footer_credits(); ?>
				</div>
			<?php endif; ?>

		</div><!-- .site-info -->

		<?php
	}
	?>
</footer><!-- #colophon -->

<!-- <i class="fa fa-chevron-circle-up topbutton"></i> -->
<a class="topbutton" href="#"><i class="fa fa-chevron-up"></i></a>

</div><!-- #page -->

<?php
if ( is_active_sidebar( 'widget-ad-fixed-footer' ) ) :
	$time_now = date( 'F j, Y' );
	?>
	<!-- Fixed Footer Ad -->
	<div class="adsense adsense-widget fixed-footer" data-id="<?php echo esc_attr( md5( $time_now ) ); ?>">
		<button id="dismiss-footer" aria-label="<?php esc_html_e( 'Dismiss footer', 'wprig' ); ?>">
			<i class="fa fa-times"></i>
		</button>
		<?php
			/* Print styles for adsense widgets */
			wp_print_styles( array( 'wprig-adsense' ) ); // Note: If this was already done it will be skipped.
			dynamic_sidebar( 'widget-ad-fixed-footer' );
		?>
	</div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
