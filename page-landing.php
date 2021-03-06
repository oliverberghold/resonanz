<?php
/**
*
* Template Name: Landing
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package resonanz
*/

get_header('landing');
?>

	<main id="primary" class="site site--landing">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'landing' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
