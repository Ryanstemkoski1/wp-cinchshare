<section class="relative hs1_container relative flex items-end xl:items-center justify-between">
  <img class="transition-opacity opacity-100 w-full relative block" src="/wp-content/uploads/hh_bg.png" alt="">
  <div class="flex absolute w-full justify-end items-center">
      <?php if(get_field('hero_image',$post->ID)) { ?>
        <img class="transition-opacity opacity-100 z-10 " src="<?php echo get_field('hero_image',$post->ID); ?>" alt="">
      <?php } ?>
  </div>
  <div class="absolute top-0 z-20 w-full">
    <div class="max-w-max-content mx-auto w-full">
      <div class="md:max-w-[51%] mx-auto xl:mx-0 mt-14 xl:mt-56 2xl:mt-68 flex flex-col items-center xl:items-start px-6 xl:px-0">
        <?php if(get_field('hero_title',$post->ID)) { ?>
          <h1 class="text-3xl lg:text-[2.875rem] leading-none mt-2 font-bold text-primary text-center xl:text-start">
            <?php echo get_field('hero_title',$post->ID); ?>
          </h1>
        <?php } ?>
        <div class="text-base lg:text-base mt-4 text-center xl:text-left xl:pr-16">
          <?php if(get_field('hero_content',$post->ID)) { ?>
              <p><?php echo get_field('hero_content',$post->ID); ?></p>
          <?php } ?>
        </div>
        <?php 
           if( have_rows('hero_button') ):
            while( have_rows('hero_button') ): the_row();
        ?>
          <a href = "<?php echo get_sub_field('hero_button_link',$post->ID); ?>" type="button" class="text-center false bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-9 w-40"><?php echo get_sub_field('hero_button_text',$post->ID); ?></a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>