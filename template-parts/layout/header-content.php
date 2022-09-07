<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cinchshare
 */

?>

<header id="masthead" class = "absolute w-full z-50">
	<div class="c_header">
		<nav class = "flex justify-between items-center  max-w-max-content mx-auto px-6 xl:px-0">
			<div class = "py-4">
				<?php the_custom_logo(); ?>
			</div>

			<?php
				if(is_page_template('templates/template-learningcenter.php') || is_page_template('templates/template-downloads.php')) {
					wp_nav_menu(
						array(
							'menu_class' => 'items-center mx-7 hidden xl:flex site-menu',        
							'menu'        => 'Learning Center',
						)
					);
				} else {
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_class' => 'nav nav-tabs items-center mx-7 hidden xl:flex site-menu',        
							'menu_id'        => 'primary-menu',
						)
					);
				}
			?>
			<div class="hidden xl:flex -mr-4  -mb-1.5">
				<a class="mx-2 btn_filled_primary !py-2 !px-9" href = "https://www.cinchshare.com/login">
					Login
				</a>
				<div class="flex flex-col items-center justify-center mx-2">
					<a class = "mx-2 btn_filled_secondary !py-2 !px-7" href = "https://www.cinchshare.com/signup">
							Sign Up
					</a>
					<a class="text-secondary text-xs mt-1 " href = "https://www.cinchshare.com/signup">
						14-day free trial
					</a>
				</div>
			</div>
			<div class="xl:hidden">
				<button class="w-6 text-primary">
					<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="30px" height="30px"><path d="M 3 8 A 2.0002 2.0002 0 1 0 3 12 L 47 12 A 2.0002 2.0002 0 1 0 47 8 L 3 8 z M 3 23 A 2.0002 2.0002 0 1 0 3 27 L 47 27 A 2.0002 2.0002 0 1 0 47 23 L 3 23 z M 3 38 A 2.0002 2.0002 0 1 0 3 42 L 47 42 A 2.0002 2.0002 0 1 0 47 38 L 3 38 z"></path></svg>
				</button>
			</div>
		</nav>
	</div>
	<div class = "c_header_sticky">
	</div>
</header><!-- #masthead -->
