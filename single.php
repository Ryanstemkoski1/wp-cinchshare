<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cinchshare
 */

get_header();
?>

	<main id="primary">
		<div class = "w-40 h-[150px]"></div>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span>' . esc_html__( 'Previous:', 'cinchshare' ) . '</span> <span>%title</span>',
			// 		'next_text' => '<span>' . esc_html__( 'Next:', 'cinchshare' ) . '</span> <span>%title</span>',
			// 	)
			// );

			// If comments are open or we have at least one comment, load up the comment template.
		endwhile; // End of the loop.
		?>
	<div class = "w-40 h-40"></div>
	<?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
	</main><!-- #main -->

<?php
get_footer();
