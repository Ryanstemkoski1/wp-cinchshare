<?php
   /**
    * Template Name: Career
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
    <section class="max-w-max-content mx-auto grid md:grid-cols-2 items-center gap-4 lg:gap-32 px-3 pt-32 lg:pt-44">
      <div>
        <?php if(get_field('career_section1_title',$post->ID)) { ?>
          <h1 class="text-3xl lg:text-5xl mb-6 font-bold"><?php echo get_field('career_section1_title',$post->ID); ?></h1>
        <?php } ?>
      </div>
      <div>
        <?php if(get_field('career_section1_image',$post->ID)) { ?>
          <img class="w-full" src="<?php echo get_field('career_section1_image',$post->ID); ?>" alt="">
        <?php } ?>
      </div>
    </section>

    <section class="max-w-max-content mx-auto px-3 pt-16 lg:pt-24">
      <div class="grid md:grid-cols-2 gap-4 lg:gap-28 pb-16">
        <div>
          <?php if(get_field('career_section2_title',$post->ID)) { ?>
            <h2 class="text-3xl lg:text-5xl font-bold mb-4 "><?php echo get_field('career_section2_title',$post->ID); ?></h2>
          <?php } ?>
          <?php if(get_field('career_section2_content',$post->ID)) { ?>
            <p><?php echo get_field('career_section2_content',$post->ID); ?></p>
          <?php } ?>
        </div>
        <div class=" p-5 bg-[#ECF8F9] rounded-lg flex items-center">
          <?php if(get_field('career_section2_heading',$post->ID)) { ?>
            <p class="text-2xl lg:text-3xl font-bold text-secondary-dark "><?php echo get_field('career_section2_heading',$post->ID); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="w-full">
        <?php if(get_field('career_section2_sub_heading',$post->ID)) { ?>
          <h3 class="text-xl lg:text-3xl mb-4 font-bold"><?php echo get_field('career_section2_sub_heading',$post->ID); ?></h3>
        <?php } ?>
        <?php if(get_field('career_section2_text',$post->ID)) { ?>
          <p><?php echo get_field('career_section2_text',$post->ID); ?></p>
        <?php } ?>
      </div>
    </section>

    <section class="max-w-max-content mx-auto px-3 pt-16 lg:pt-24">
      <div class="w-full text-center pb-8">
        <?php if(get_field('career_section3_title',$post->ID)) { ?>
          <h2 class="text-xl lg:text-3xl pb-3 font-bold text-primary "><?php echo get_field('career_section3_title',$post->ID); ?></h2>
        <?php } ?>
        <?php if(get_field('career_section3_content',$post->ID)) { ?>
          <p><?php echo get_field('career_section3_content',$post->ID); ?></p>
        <?php } ?>
      </div>
      <div>
          <div class = "pb-4">
            <p class = "text-white font-bold bg-primary rounded-md w-fit px-4 py-2 md:py-3">Customer Experience</p>
          </div>
          <?php 
            if( have_rows('customer_experience') ):
              while( have_rows('customer_experience') ): the_row();
          ?>
              <?php if(get_sub_field('customer_experience_item',$post->ID)){
                while(the_repeater_field('customer_experience_item', $post->ID) ) { ?>
                  <div class = "border border-[#3333335e] rounded-md px-4 py-2 my-6">
                    <a class ="flex items-center justify-between" href="<?php echo get_sub_field('customer_experience_link',$post->ID); ?>">
                    <?php echo get_sub_field('customer_experience_job_title',$post->ID); ?>
                    <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 15.5L8 8.5L0.999999 1.5" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    </a>
                  </div>
                <?php }} 
              ?>
            <?php endwhile; ?>
          <?php endif; ?>
      </div>
      <div>
          <div class = "py-4">
            <p class = "text-white font-bold bg-primary rounded-md w-fit px-4 py-2 md:py-3">Engineering</p>
          </div>
          <?php 
            if( have_rows('engineering') ):
              while( have_rows('engineering') ): the_row();
          ?>
              <?php if(get_sub_field('engineering_item',$post->ID)){
                while(the_repeater_field('engineering_item', $post->ID) ) { ?>
                  <div class = "border border-[#3333335e] rounded-md px-4 py-2 my-6">
                    <a class ="flex items-center justify-between" href="<?php echo get_sub_field('engineering_link',$post->ID); ?>">
                    <?php echo get_sub_field('engineering_job_title',$post->ID); ?>
                    <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 15.5L8 8.5L0.999999 1.5" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    </a>
                  </div>
                <?php }} 
              ?>
            <?php endwhile; ?>
          <?php endif; ?>
      </div>
      <div>
        <div class = "py-4">
          <p class = "text-white font-bold bg-primary rounded-md w-fit px-4 py-2 md:py-3">IT</p>
        </div>
        <?php 
            if( have_rows('it') ):
              while( have_rows('it') ): the_row();
          ?>
              <?php if(get_sub_field('it_item',$post->ID)){
                while(the_repeater_field('it_item', $post->ID) ) { ?>
                  <div class = "border border-[#3333335e] rounded-md px-4 py-2 my-6">
                    <a class ="flex items-center justify-between" href="<?php echo get_sub_field('it_link',$post->ID); ?>">
                      <?php echo get_sub_field('it_job_title',$post->ID); ?>
                      <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 15.5L8 8.5L0.999999 1.5" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                      </svg>
                    </a>
                  </div>
                <?php }} 
              ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
    <section class ="w-40 h-20"></section>
    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
  </main>
<?php get_footer();?>