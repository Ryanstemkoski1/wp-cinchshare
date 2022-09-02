<?php
   /**
    * Template Name: Home
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
  <section class="hs1_container relative flex items-end xl:items-center justify-between">
    <img class="transition-opacity duration-[0.7s] opacity-100 w-full relative block" src="/wp-content/uploads/hh_bg.svg" alt="">
    <div class="flex absolute w-full justify-end items-center">
      <img class="transition-opacity duration-[0.7s] opacity-100 z-10 mt-16" src="https://wp.cinchshare.com/wp-content/uploads/2022/07/mb_1.svg" alt="">
    </div>
    <div class="absolute top-0 z-20 w-full">
      <div class="max-w-max-content mx-auto w-full">
        <div class="md:max-w-[51%] mx-auto xl:mx-0 mt-28 xl:mt-52 2xl:mt-80 flex flex-col items-center xl:items-start px-6 xl:px-0">
          <h1 class="text-3xl lg:text-[2.875rem] leading-none mt-2 font-bold text-primary text-center xl:text-start">The easiest and fastest social media scheduling app</h1>
          <div class="text-base lg:text-base mt-4 text-center xl:text-left xl:pr-16">
            <p>Spend more time on the things that matter and less on scheduling posts and Facebook parties with the easiest, fastest social media scheduling tool in the game.</p>
          </div>
          <button type="button" class="false bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-9 w-40">Free Trial</button>
        </div>
      </div>
    </div>
  </section>
  <section class ="w-40 h-screen">

  </section>
</main>
<?php get_footer();?>