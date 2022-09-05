<?php
   /**
    * Template Name: Features
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
    <section class="bg-top bg-no-repeat bg-cover fs1_container relative">
      <img class="absolute" src="/wp-content/uploads/Features_Section1_bg.svg" style="z-index: -1; width: 100%;">
      <div class="pt-28 lg:pt-32 max-w-screen-2xl mx-auto flex flex-col items-center px-3">
        <h1 class="text-3xl lg:text-5xl font-bold text-center xl:text-left">Get more done<span class="text-primary"> in a click</span></h1>
        <p class="text-base lg:text-lg mt-8 font-semibold text-center xl:text-left">Like waving a magic wand for your business' social media</p>
        <button type="button" class="false bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-8 px-8">Start your free trial</button>
        <img class="mt-12 lg:mt-24" src="https://wp.cinchshare.com/wp-content/uploads/2022/07/fe_1.png" style="max-width: 1172px; width: 100%;">
      </div>
    </section>
  </main>
<?php get_footer();?>