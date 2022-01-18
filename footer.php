<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resonanz
 */

?>

	<footer id="colophon" class="site-footer">

		<nav id="footer-navigation" class="container footer-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-3',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav>

		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'resonanz' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'resonanz' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'resonanz' ), 'resonanz', '<a href="https://oliverberghold.de">Oliver Berghold</a>' );
				?>
		</div>-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
