<div class="overflow-hidden max-w-max-content mx-auto mt-28 mb-12 relative flex items-center flex-col lg:flex-row-reverse px-6 xl:px-0">
  <div class="w-full lg:w-[55%] mt-0 pr-6 relative">
    <img src="/wp-content/uploads/map_bg.svg" class="absolute" style="transform: scale(1.3);">
    <!-- <div class="absolute top-0 w-full h-[30%] mapTopGradient"></div>
    <div class="absolute bottom-0 w-full h-[20%] mapBottomGradient"></div> -->
    <svg viewBox="0 0 800 600" class="rsm-svg ">
      <g class="rsm-geographies "></g>
      <g transform="translate(385.2674623150487, 175.1827189705726)" class="rsm-marker ">
        <circle r="4" fill="#5433ED" stroke="#0797E866" stroke-width="8"></circle>
      </g>
      <g transform="translate(791.9197075444445, 352.4071198292332)" class="rsm-marker ">
        <circle r="4" fill="#5433ED" stroke="#0797E866" stroke-width="8"></circle>
      </g>
      <g transform="translate(72.71213147368832, 162.8302678187566)" class="rsm-marker ">
        <circle r="4" fill="#5433ED" stroke="#0797E866" stroke-width="8"></circle>
      </g>
      <g transform="translate(71.96729998738351, 157.35771995262638)" class="rsm-marker ">
        <circle r="4" fill="#5433ED" stroke="#0797E866" stroke-width="8"></circle>
      </g>
      <g transform="translate(73.44133803055553, 155.12249871031423)" class="rsm-marker ">
        <circle r="4" fill="#5433ED" stroke="#0797E866" stroke-width="8"></circle>
      </g>
      <g transform="translate(87.24498720277779, 207.49385067832606)" class="rsm-marker ">
        <circle r="4" fill="#5433ED" stroke="#0797E866" stroke-width="8"></circle>
      </g>
      <g transform="translate(73.20816472777773, 190.94652224979257)" class="rsm-marker ">
        <circle r="4" fill="#5433ED" stroke="#0797E866" stroke-width="8"></circle>
      </g>
      <g transform="translate(84.35505732499996, 203.22097194495132)" class="rsm-marker ">
        <circle r="4" fill="#5433ED" stroke="#0797E866" stroke-width="8"></circle>
      </g>
    </svg>
  </div>
  <div class="lg:w-[45%] w-full">
    <div class="max-w-xl lg:max-w-max-content mx-auto" style="margin-top: 3%;">
      <?php if(get_field('section_reviews',$post->ID)){
        while(the_repeater_field('section_reviews', $post->ID) ) { ?>
          <div style="opacity: 1;" class = "hidden reviewSlides">
            <?php if(get_sub_field('section_reviews_title',$post->ID)) { ?>
              <p class="text-2xl lg:text-[2.875rem] leading-none font-bold max-w-lg"><?php echo get_sub_field('section_reviews_title',$post->ID); ?></p>
            <?php } ?>
            <div class="flex mt-8 -mx-2">
              <img class="mx-2" src="/wp-content/uploads/Star.svg" alt="">
              <img class="mx-2" src="/wp-content/uploads/Star.svg" alt="">
              <img class="mx-2" src="/wp-content/uploads/Star.svg" alt="">
              <img class="mx-2" src="/wp-content/uploads/Star.svg" alt="">
              <img class="mx-2" src="/wp-content/uploads/Star.svg" alt="">
            </div>
            <div class="mt-8 max-w-lg font-semibold">
            <?php if(get_sub_field('section_reviews_content',$post->ID)) { ?>
              <p><?php echo get_sub_field('section_reviews_content',$post->ID); ?></p>
            <?php } ?>
            </div>
            <div class="flex mt-6">
              <?php if(get_sub_field('section_reviews_icon',$post->ID)) { ?>
                <img class="w-24 h-24 shadow-2xl rounded-full border-2 border-white object-cover mr-4" src="<?php echo get_sub_field('section_reviews_icon',$post->ID); ?>" alt="">
              <?php } ?>
              <div class="mt-4">
                <?php if(get_sub_field('section_reviews_name',$post->ID)) { ?>
                  <p class="font-bold text-lg"><?php echo get_sub_field('section_reviews_name',$post->ID); ?></p>
                <?php } ?>
                <?php if(get_sub_field('section_reviews_date',$post->ID)) { ?>
                  <p class="font-bold text-xs text-text-light mt-2"><?php echo get_sub_field('section_reviews_date',$post->ID); ?></p>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php ;  }} 
      ?>
      <div class="flex items-center -mx-2 mt-5 cin-review-btn">
        <button class="prev">
          <img class="w-10 xl:w-12 h-10 xl:h-12 mx-2" src="/wp-content/uploads/slider-left-act.svg">
        </button>
        <button class="next">
          <img class="w-10 xl:w-12 h-10 xl:h-12 mx-2" src="/wp-content/uploads/slider-right.svg">
        </button>
      </div>
    </div>
  </div>
</div>