<section class = "max-w-max-content w-full mx-auto flex flex-col items-center px-6 xl:px-0 mt-20 lg:mt-52">
  <div class = "flex flex-col items-center w-full">
    <?php if(get_field('section_robust_tool_title',$post->ID)) { ?>
      <h2 class = "mt-8 text-3xl xl:text-[2.875rem] font-bold text-center"><?php echo get_field('section_robust_tool_title',$post->ID); ?></h2>
    <?php } ?>

    <div class = "robust_carousel w-full relative">
      <?php if(get_field('section_robust_tool_item',$post->ID)){
        while(the_repeater_field('section_robust_tool_item', $post->ID) ) { ?>
          <div class="mySlides flex items-center lg:flex-row-reverse flex-col-reverse w-full mt-8 hidden">
            <div class="relative lg:aspect-[16/10.7] lg:w-1/2 lg:pl-4">
              <img class="w-full hidden lg:block" src="/wp-content/uploads/ft_bg.svg" alt="">
              <div class="block lg:absolute top-0 z-20 py-6 lg:py-10 xl:py-16 lg:ml-20 lg:w-3/4 h-full flex-flex-col bg-primary lg:bg-transparent bg-opacity-5 rounded-3xl lg:rounded-none px-6 xp:px-0 lg:px-2">
                <div style="min-height: 15rem;">
                <?php if(get_sub_field('section_robust_tool_heading',$post->ID)) { ?>
                  <p class="text-xl lg:text-2xl font-bold"><?php echo get_sub_field('section_robust_tool_heading',$post->ID); ?></p>
                <?php } ?>
                <?php if(get_sub_field('section_robust_tool_content',$post->ID)) { ?>
                  <p class="text-sm lg:text-base font-semibold mt-4"><?php echo get_sub_field('section_robust_tool_content',$post->ID); ?></p>
                <?php } ?>
                </div>

              </div>
            </div>
            <div class="relative lg:aspect-[16/11.5] lg:w-3/5 self-stretch mb-6 lg:mb-0">
              <div class="lg:absolute 22lg:-right-[12%] w-full lg:w-[100%] aspect-[16/11.5] rounded-[1.5rem] overflow-hidden shadow-custom" style="max-height: 453px;">
                <div class="w-full h-full min-h-full bg-white">
                  <?php if(get_sub_field('section_robust_tool_image',$post->ID)) { ?>
                    <img class="transition-opacity duration-[0.7s] opacity-100 w-full h-full" src="<?php echo get_sub_field('section_robust_tool_image',$post->ID); ?>" alt="">
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>  
        <?php ;  }} 
      ?>
      <div class="flex z-50 justify-between w-full pl-[55px] lg:pl-0 lg:max-w-[300px] xl:max-w-[420px] right-8 absolute bottom-[40px] lg:bottom-[80px]">
        <div class="flex items-center dots">
          <?php if(get_field('section_robust_tool_item',$post->ID)){
            $i = 1;
            while(the_repeater_field('section_robust_tool_item', $post->ID) ) { ?>
              <div class="w-3 h-3 rounded-full bg-secondary mx-1 opacity-20 cursor-pointer" index = "<?php echo $i; ?>"></div>
            <?php ; $i ++;  }} 
          ?>
        </div>
        <div class="grid grid-cols-2 items-center gap-3 cin-feature-btn">
          <button class="prev w-10 xl:w-12 h-10 xl:h-12 pr-1 pb-0.5 text-3xl rounded-full bg-secondary text-white border-2 border-secondary flex items-center justify-center relative">
            <svg class="absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);" width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.4479 8.97659C18.0002 8.97659 18.4479 8.52888 18.4479 7.97659C18.4479 7.42431 18.0002 6.97659 17.4479 6.97659L17.4479 8.97659ZM0.740829 7.26949C0.350306 7.66001 0.350306 8.29318 0.74083 8.6837L7.10479 15.0477C7.49532 15.4382 8.12848 15.4382 8.51901 15.0477C8.90953 14.6571 8.90953 14.024 8.51901 13.6334L2.86215 7.97659L8.519 2.31974C8.90953 1.92922 8.90953 1.29605 8.519 0.905526C8.12848 0.515002 7.49531 0.515002 7.10479 0.905526L0.740829 7.26949ZM17.4479 6.97659L1.44794 6.97659L1.44794 8.97659L17.4479 8.97659L17.4479 6.97659Z" fill="white"/>
            </svg>
          </button>
          <button class="next w-10 xl:w-12 h-10 xl:h-12 pl-1 pb-0.5 text-3xl rounded-full bg-secondary text-white border-2 border-secondary flex items-center justify-center relative">
            <svg class="absolute" style="left: 50%; top: 50%; transform: translate(-50%, -50%);" width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.448 6.97659C0.895713 6.97659 0.447998 7.42431 0.447998 7.97659C0.447998 8.52888 0.895713 8.97659 1.448 8.97659V6.97659ZM18.1551 8.6837C18.5456 8.29318 18.5456 7.66001 18.1551 7.26949L11.7911 0.905525C11.4006 0.515001 10.7675 0.515001 10.3769 0.905525C9.98641 1.29605 9.98641 1.92921 10.3769 2.31974L16.0338 7.97659L10.3769 13.6334C9.98641 14.024 9.98641 14.6571 10.3769 15.0477C10.7675 15.4382 11.4006 15.4382 11.7911 15.0477L18.1551 8.6837ZM1.448 8.97659H17.448V6.97659H1.448V8.97659Z" fill="white"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>