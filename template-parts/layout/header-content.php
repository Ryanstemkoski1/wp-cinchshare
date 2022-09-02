<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cinchshare
 */

?>

<header id="masthead">
	<nav class = "flex justify-between items-center  max-w-max-content mx-auto px-6 xl:px-0">
		<div class = "py-4">
			<?php the_custom_logo(); ?>
		</div>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class' => 'nav nav-tabs items-center mx-7 hidden xl:flex site-menu',        
					'menu_id'        => 'primary-menu',
				)
			);
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
	</nav>
</header><!-- #masthead -->
