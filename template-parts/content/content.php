<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cinchshare
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div>
				<?php
				cinchshare_posted_on();
				cinchshare_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

	<?php cinchshare_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span> "%s"</span>', 'cinchshare' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . esc_html__( 'Pages:', 'cinchshare' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer>
		<?php cinchshare_entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
