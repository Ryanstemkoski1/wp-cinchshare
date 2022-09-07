<?php
  /**
  * Template Name: Learning Center
  * Template Post Type: post, page
  *
  * @package WordPress
  * @since 1.0
  */
?>

<?php 
  get_header();
  if(have_posts()) { 
   the_post();
  }
?>  

  <main id="site-content" role="main">
    <section class = "w-40 h-screen"></section>
  </main>
<?php get_footer();?>