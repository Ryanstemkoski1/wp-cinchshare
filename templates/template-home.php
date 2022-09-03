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
  <?php get_template_part( 'template-parts/content/content', 'hero' ); ?>
  <?php get_template_part( 'template-parts/content/content', 'schedule' ); ?>
  
  <section class="w-full relative flex flex-col items-center justify-center px-6 xp:px-0">
    <div class="max-w-max-content bg-gradient-to-b px-3 from-primary to-secondary w-full rounded-3xl flex flex-col items-center pt-12 pb-44">
      <?php if(get_field('home_section3_title',$post->ID)) { ?>
        <h2 class="text-3xl xl:text-5xl text-center font-bold"><?php echo get_field('home_section3_title',$post->ID); ?></h2>
      <?php } ?>
      <?php if(get_field('home_section3_content',$post->ID)) { ?>
        <p class="text-base max-w-3xl text-center text-white mt-4 xl:mt-8"><?php echo get_field('home_section3_content',$post->ID); ?></p>
      <?php } ?>
      <?php 
          if( have_rows('home_section3_button') ):
          while( have_rows('home_section3_button') ): the_row();
      ?>
        <a href = "<?php echo get_sub_field('home_section3_button_link',$post->ID); ?>" type="button" class="text-center false bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-56 mt-6 lg:mt-12"><?php echo get_sub_field('home_section3_button_text',$post->ID); ?></a>
        <?php endwhile; ?>
      <?php endif; ?>
      
    </div>
    <div class="max-w-max-content w-full relative flex justify-center -top-28">
      <img alt="" class="relative w-full object-contain" src="/wp-content/uploads/Home_Section3-bg.svg">
      <?php if(get_field('home_section3_image',$post->ID)) { 

        $value = get_field('home_section3_image',$post->ID);

        if($value['type'] =='video') { ?>
            <video src="<?php echo $value['url']; ?>" muted preload="auto" autoplay playsinline="" class="z-10 absolute w-9/12 shadow-sm" style="width: 100%; height: 100%;"></video>
          <?php } else { ?>
            <img alt="" class="z-10 absolute w-9/12 shadow-sm" src="<?php echo $value['url']; ?>">
          <?php }?>
      <?php } ?>
    </div>
  </section>
  <section class="mt-12 max-w-max-content w-full mx-auto flex flex-col items-center px-6 xl:px-0">
    <?php if(get_field('home_section4_title',$post->ID)) { ?>
      <h2 class="text-3xl xl:text-[2.875rem] font-bold text-center mb-6 xl:mb-16"><?php echo get_field('home_section4_title',$post->ID); ?></h2>
    <?php } ?>
    
    <div class="flex flex-wrap -mx-2 mb-4 xl:hidden button_content">
      <button class="border border-secondary  rounded-full  py-1 px-5 m-2 bg-secondary  text-white" data = "batch_posting">Batch Posting</button>
      <button class="border border-secondary  rounded-full  py-1 px-5 m-2 text-secondary bg-white" data = "cloud_drive">Cloud Drive</button>
      <button class="border border-secondary  rounded-full  py-1 px-5 m-2  text-secondary bg-white" data = "textclips">TextClips</button>
    </div>
    <div class="w-full flex flex-col-reverse xl:flex-row justify-between max-w-max-content mx-auto">
      <div class ="flex flex-col max-w-3xl xl:w-[45%] mx-auto xl:pr-16">
        <div class="button_content flex flex-wrap -mx-2 hidden xl:block ">
          <button class="border border-secondary  rounded-full  py-1 px-5 m-2 bg-secondary  text-white" data = "batch_posting">Batch Posting</button>
          <button class="border border-secondary  rounded-full  py-1 px-5 m-2 text-secondary bg-white" data = "cloud_drive">Cloud Drive</button>
          <button class="border border-secondary  rounded-full  py-1 px-5 m-2  text-secondary bg-white" data = "textclips">TextClips</button>
        </div>
        <div class="text_content">
          <div style="opacity: 1;" class ="hidden active" data = "batch_posting">
            <?php 
              if( have_rows('best_posting') ):
                while( have_rows('best_posting') ): the_row();
            ?>
                <p class="mt-8 lg:mt-12 text-2xl lg:text-3xl font-bold"><?php echo get_sub_field('best_posting_title',$post->ID); ?></p>
                <p class="mt-6 lg:mt-8 font-semibold leading-7"><?php echo get_sub_field('best_posting_content',$post->ID); ?></p>
                <a href = "<?php echo get_sub_field('best_posting_link',$post->ID); ?>" type="button" class="false bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-8 w-40"><?php echo get_sub_field('best_posting_button',$post->ID); ?></a>
              
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div style="opacity: 1; " class ="hidden" data ="cloud_drive">
            <?php 
              if( have_rows('cloud_drive') ):
                while( have_rows('cloud_drive') ): the_row();
            ?>
                <p class="mt-8 lg:mt-12 text-2xl lg:text-3xl font-bold"><?php echo get_sub_field('cloud_drive_title',$post->ID); ?></p>
                <p class="mt-6 lg:mt-8 font-semibold leading-7"><?php echo get_sub_field('cloud_drive_content',$post->ID); ?></p>
                <a href = "<?php echo get_sub_field('cloud_drive_link',$post->ID); ?>" type="button" class="false bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-8 w-40"><?php echo get_sub_field('cloud_drive_button',$post->ID); ?></a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div style="opacity: 1;" class = "hidden" data ="textclips">
            <?php 
              if( have_rows('textclips') ):
                while( have_rows('textclips') ): the_row();
            ?>
                <p class="mt-8 lg:mt-12 text-2xl lg:text-3xl font-bold"><?php echo get_sub_field('textclips_title',$post->ID); ?></p>
                <p class="mt-6 lg:mt-8 font-semibold leading-7"><?php echo get_sub_field('textclips_content',$post->ID); ?></p>
                <a href = "<?php echo get_sub_field('textclips_link',$post->ID); ?>" type="button" class="false bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-8 w-40"><?php echo get_sub_field('textclips_button',$post->ID); ?></a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="w-full max-w-3xl mx-auto xl:w-3/5  media_content">
        <div class="w-full hidden active" data = "batch_posting">
          <div class="flex items-center justify-center w-full" style="opacity: 1; transform: none;">
            <?php 
              if( have_rows('best_posting') ):
                while( have_rows('best_posting') ): the_row();
                
                $value = get_sub_field('best_posting_media', $post->ID);

                if($value['type'] =='video') { ?>
                  <div class="animatedVideo" style="width: 100%; height: 100%;">
                    <video src="<?php echo $value['url'];?>" muted  preload="auto" autoplay playsinline="" style="width: 100%; height: 100%;"></video>
                  </div>
               <?php } else { ?>
                  <img class="transition-opacity duration-[0.7s] opacity-100 w-full md:w-2/3 xl:w-full shadow-custom h-[426px]" src="<?php echo $value['url'];?>" alt="">
                <?php }?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>

        <div class="w-full hidden" data = "cloud_drive">
          <div class="flex items-center justify-center w-full" style="opacity: 1; transform: none;">
            <?php 
              if( have_rows('cloud_drive') ):
                while( have_rows('cloud_drive') ): the_row();
                
                $value = get_sub_field('cloud_drive_media', $post->ID);
                if($value['type'] =='video') { ?>
                  <div class="animatedVideo" style="width: 100%; height: 100%;">
                    <video src="<?php echo $value['url']; ?>" muted preload="auto" autoplay playsinline="" style="width: 100%; height: 100%;"></video>
                  </div>
               <?php } else { ?>
                  <img class="transition-opacity duration-[0.7s] opacity-100 w-full md:w-2/3 xl:w-full shadow-custom h-[426px]" src="<?php echo $value['url']; ?>" alt="">
                <?php }?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>

        <div class="w-full hidden" data = "textclips">
          <div class="flex items-center justify-center w-full" style="opacity: 1; transform: none;">
            <?php 
              if( have_rows('textclips') ):
                while( have_rows('textclips') ): the_row();
                
                $value = get_sub_field('textclips_media', $post->ID);
                if($value['type'] =='video') { ?>
                  <div class="animatedVideo" style="width: 100%; height: 100%;">
                    <video src="<?php echo $value['url']; ?>" muted preload="auto" autoplay playsinline="" style="width: 100%; height: 100%;"></video>
                  </div>
               <?php } else { ?>
                  <img class="transition-opacity duration-[0.7s] opacity-100 w-full md:w-2/3 xl:w-full shadow-custom h-[426px]" src="<?php echo $value['url']; ?>" alt="">
                <?php }?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class = "w-40 h-screen"></section>
</main>
<?php get_footer();?>