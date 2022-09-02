<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cinchshare
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
		if ( ! is_front_page() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title">', '</h2>' );
		}
		?>
	</header>

	<?php cinchshare_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
