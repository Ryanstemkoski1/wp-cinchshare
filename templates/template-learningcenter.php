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
    <section class ="w-40 h-[150px]"></section>

    <section class = "hidden md:flex max-w-max-content m-auto pr-4 xl:pr-0 flex justify-end">
      <div class = "relative flex border rounded-md w-fit items-center py-2 px-4 learning_center_search min-w-[400px]" >
        <input type="text" placeholder = "Search something" class="w-full focus:outline-none">
        <svg width="16" height="16" class ="icon_search" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_4825_48695)">
          <path d="M10.5691 0C4.74145 0 0 4.74145 0 10.5691C0 16.3971 4.74145 21.1382 10.5691 21.1382C16.3971 21.1382 21.1382 16.3971 21.1382 10.5691C21.1382 4.74145 16.3971 0 10.5691 0ZM10.5691 19.187C5.81723 19.187 1.95122 15.321 1.95122 10.5691C1.95122 5.81728 5.81723 1.95122 10.5691 1.95122C15.321 1.95122 19.187 5.81723 19.187 10.5691C19.187 15.321 15.321 19.187 10.5691 19.187Z" fill="#5433ED"/>
          <path d="M23.7142 22.3325L18.1207 16.739C17.7396 16.3578 17.1223 16.3578 16.7412 16.739C16.36 17.1198 16.36 17.7377 16.7412 18.1185L22.3347 23.712C22.5252 23.9026 22.7747 23.9978 23.0244 23.9978C23.2739 23.9978 23.5236 23.9026 23.7142 23.712C24.0954 23.3312 24.0954 22.7133 23.7142 22.3325Z" fill="#5433ED"/>
          </g>
          <defs>
          <clipPath id="clip0_4825_48695">
          <rect width="24" height="24" fill="white"/>
          </clipPath>
          </defs>
        </svg>
        <svg width="16" class ="icon_clear cursor-pointer rotate-45 hidden" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.5834 6.91602H9.08335V0.416016H6.91669V6.91602H0.416687V9.08268H6.91669V15.5827H9.08335V9.08268H15.5834V6.91602Z" fill="#5433ED"/>
        </svg>
        <div class = "loader_search hidden"></div>
        <div class = "absolute z-50 w-full search_results hidden">

        </div>
      </div>
    </section>

    <section class ="pt-10">
      <div class = "max-w-max-content m-auto px-4">
        <div class ="flex flex-wrap items-center justify-center">
          <svg class = "w-[30px] md:w-[38px] lg:w-[41px]" width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.1964 32.9463C10.3356 32.8719 10.4909 32.8352 10.6476 32.8396C10.8043 32.8441 10.9575 32.8895 11.0924 32.9717C13.6948 34.5282 16.6512 35.3466 19.6605 35.3437C22.5896 35.3376 25.4685 34.5617 28.0251 33.0894C30.5818 31.6172 32.7317 29.4972 34.2709 26.9303C34.3009 26.8789 34.3204 26.8219 34.3288 26.7626C34.3371 26.7033 34.3341 26.6429 34.3196 26.5849C34.305 26.5269 34.2793 26.4724 34.244 26.4248C34.2088 26.3771 34.1645 26.3372 34.1141 26.3073L31.7784 24.9112C30.8953 24.3743 29.8726 24.1321 28.8506 24.2179C27.8286 24.3036 26.8574 24.7131 26.0703 25.3901C24.5179 26.7608 22.5902 27.6003 20.554 27.7924C18.5179 27.9845 16.4742 27.5198 14.7058 26.4625C12.9375 25.4051 11.5321 23.8076 10.6843 21.8911C9.8365 19.9746 9.58836 17.834 9.97399 15.7657C10.3009 14.0128 11.0706 12.3797 12.2056 11.0309C13.3406 9.68208 14.8005 8.6653 16.4386 8.08306C18.0767 7.50081 19.8348 7.37367 21.5358 7.71444C23.2369 8.05522 24.8207 8.85188 26.1275 10.0241C26.8886 10.6877 27.8315 11.0905 28.8251 11.1764C29.8188 11.2623 30.8136 11.027 31.6714 10.5033L34.1088 9.04364C34.159 9.01347 34.203 8.97332 34.238 8.92551C34.2731 8.87771 34.2984 8.82321 34.3129 8.76518C34.3273 8.70715 34.3305 8.64674 34.322 8.58747C34.3136 8.5282 34.2938 8.47124 34.2638 8.41991C33.0818 6.4367 31.531 4.7137 29.7003 3.34996C27.8697 1.98621 25.7952 1.00863 23.5966 0.4734C21.3979 -0.0618268 19.1184 -0.144136 16.8887 0.2312C14.659 0.606536 12.5234 1.43212 10.6045 2.66048C8.68567 3.88885 7.02136 5.49577 5.70745 7.38886C4.39355 9.28195 3.45595 11.4239 2.94841 13.6915C2.44087 15.9591 2.37337 18.3077 2.75 20.6022C3.12664 22.8968 3.93987 25.092 5.14294 27.0617C5.22668 27.2013 5.27327 27.361 5.27815 27.525C5.28304 27.689 5.2461 27.8514 5.17083 27.996L0.38496 37.3262C0.340463 37.413 0.324165 37.5121 0.338358 37.6091C0.352552 37.7062 0.396348 37.796 0.463689 37.8654C0.53103 37.9348 0.618394 37.9802 0.712585 37.9948C0.806777 38.0095 0.902994 37.9927 0.987254 37.9469L10.1964 32.9463Z" fill="#2BD4D9"/>
            <path d="M40.1681 24.821L29.446 21.038C29.3024 20.9873 29.1456 20.9873 29.002 21.038L18.2799 24.821C18.0134 24.9151 17.835 25.1669 17.8346 25.4496C17.8342 25.7323 18.0121 25.9845 18.2784 26.0792L29.0005 29.8909C29.0728 29.9166 29.1484 29.9295 29.224 29.9295C29.2996 29.9295 29.3752 29.9166 29.4475 29.8909L40.1695 26.0792C40.4359 25.9845 40.6137 25.7323 40.6133 25.4496C40.613 25.1669 40.4346 24.9151 40.1681 24.821Z" fill="#5433ED"/>
            <path d="M39.0104 33.7273V27.9062L37.6757 28.3807V33.7273C37.2737 33.9587 37.0028 34.3922 37.0028 34.8894C37.0028 35.3865 37.2737 35.8201 37.6757 36.0515V39.3311C37.6757 39.6997 37.9745 39.9985 38.3431 39.9985C38.7116 39.9985 39.0104 39.6997 39.0104 39.3311V36.0516C39.4124 35.8202 39.6833 35.3866 39.6833 34.8895C39.6833 34.3923 39.4125 33.9587 39.0104 33.7273Z" fill="#5433ED"/>
            <path d="M29.2239 31.2624C28.9948 31.2624 28.7692 31.2235 28.5533 31.1468L22.5257 29.0039V33.4983C22.5257 34.2168 23.2752 34.8244 24.7535 35.3041C26.0419 35.7223 27.6296 35.9527 29.2239 35.9527C30.8183 35.9527 32.4059 35.7223 33.6944 35.3041C35.1726 34.8244 35.9221 34.2168 35.9221 33.4983V29.0039L29.8946 31.1468C29.6786 31.2235 29.453 31.2624 29.2239 31.2624Z" fill="#5433ED"/>
          </svg>
          <h1 class = "pl-4 text-3xl md:text-4xl lg:text-5xl font-bold">
            <?php  
              if(get_field('learningcenter_title',$post->ID)) { 
                echo get_field('learningcenter_title',$post->ID); 
              } else {
                the_title(); 
              }  ?>
          </h1>
        </div>
        <p class ="text-center font-bold text-xl pt-8 md:text-2xl lg:text-3xl" ><?php echo get_field('learningcenter_content',$post->ID); ?></p>
      </div>
    </section>

    <section class = "my-12 md:my-28">
      <?php
      $args = array(
        "posts_per_page" => 1,
        "orderby"        => "date",
        "order"          => "DESC",
        'post_status'      => 'publish',
        );      
        
      $wp_query = new WP_Query( $args );

      if ( $wp_query->have_posts() ) :
        while ( $wp_query->have_posts() ) : $wp_query->the_post();
        ?>
          <div class="max-w-[1300px] flex flex-col lg:flex-row items-center w-full mx-auto px-4">
            <div class="relative w-full lg:w-7/12 lg:pr-10 mb-10 lg:mb-0">
              <img class="w-full" alt="" src="/wp-content/uploads/learning-center_bg_Vector.svg">
              <div class = "py-4 absolute top-0 bottom-0 left-0 right-0 m-auto w-11/12 h-full md:w-10/12">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <img class="h-full w-full object-cover rounded-2xl" alt="" src="<?php echo $image[0]; ?>">
                <?php endif; ?>
              </div>
            </div>
            <div class="w-full lg:w-5/12 ">
              <div class="flex items-center">
                <p class="text-secondary font-bold text-sm md:text-base uppercase">
                  <?php 
                    $category_detail=get_the_category($post->ID);
                    echo $category_detail[0]->cat_name;
                  ?>
                </p>
              </div>
              <a href="<?php the_permalink();?>" class="mt-3">
                <p class="mt-4 lg:mt-6 text-xl md:text-2xl lg:text-3xl font-bold"><?php echo get_the_title($post->ID); ?></p>
              </a>
              <div class="mt-6">
                <p>
                  <?php if(get_the_excerpt($post->ID)) {
                    echo get_the_excerpt($post->ID);
                  } else {
                    echo wp_trim_words( strip_tags(get_the_content()), 30, '...' );
                  }
                  ?>
                </p>
              </div>  
              <div class ="flex flex-wrap items-center justify-between pt-6">
                <div class="flex flex-wrap items-center">
                  <?php $author_id=$post->post_author; ?>
                  <img src="<?php echo get_avatar_url( $author_id ); ?> " class="h-6 w-6 rounded-full" alt="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" />
                  <p class = "font-bold text-sm md:text-base ml-2">
                    <?php 
                      $first = get_the_author_meta( 'user_firstname' , $author_id );
                      if(!empty($first)) {
                        the_author_meta( 'user_firstname' , $author_id );
                        echo " ";
                        the_author_meta( 'user_lastname' , $author_id );
                      } else {
                        the_author_meta( 'user_nicename' , $author_id );
                      }
                    ?> 
                  </p>
                </div>
                <div class="flex text-secondary font-bold text-sm md:text-base"><?php echo do_shortcode('[post-views]'); ?> &nbsp;  min read</div>
              </div>
            </div>
          </div>
        <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, There is no post on our site.' ); ?></p>
      <?php endif; ?>
    </section>

    <section>
      <div class = "max-w-max-content m-auto px-2">
        <p class="font-bold text-xl md:text-2xl lg:text-3xl pl-4">Recent Posts</p>
        <div class ="s_post_body pb-6 mt-8">
          <?php 
            $i =1; 
            $args = array(
            "posts_per_page" => 6,
            "orderby"        => "date",
            "order"          => "DESC",
            'post_status'      => 'publish',
            'paged' => 1,
            );

            $wp_query = new WP_Query( $args );
            $totalPost = $wp_query->found_posts;  
            echo '<div totalPosts="'.$totalPost.'" catName = "" class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" currentPage = "1">';
            if ( $wp_query->have_posts() ) :
              while ( $wp_query->have_posts() ) : $wp_query->the_post();
              ?>
                <div class="w-full p-4">
                  <div class="rounded-3xl overflow-hidden hover:shadow-custom-2">
                    <div class="aspect-[4/3] relative ">
                      <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <img class="h-full w-full object-cover" alt="" src="<?php echo $image[0]; ?>">
                      <?php endif; ?>
                    </div>
                    <div class="flex flex-col py-6 px-3 lg:p-4 ">
                      <div class="flex items-center pb-2">
                        <p class="text-secondary font-bold text-sm">
                          <?php 
                            $category_detail=get_the_category($post->ID);
                            echo $category_detail[0]->cat_name;
                          ?>
                        </p>
                      </div>
                      <a href="<?php the_permalink();?>" class="mt-3">
                        <p class="font-bold text-md lg:text-xl break-words md:min-h-[48px] lg:min-h-[50px] line-clamp-2"><?php echo get_the_title($post->ID); ?></p>
                      </a>
                      <div class ="flex flex-wrap items-center justify-between pt-6">
                        <div class="flex flex-wrap items-center">
                          <?php $author_id=$post->post_author; ?>
                          <img src="<?php echo get_avatar_url( $author_id ); ?> " class="h-6 w-6 rounded-full" alt="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" />
                          <p class = "font-bold text-sm md:text-base ml-2">
                            <?php 
                              $first = get_the_author_meta( 'user_firstname' , $author_id );
                              if(!empty($first)) {
                                the_author_meta( 'user_firstname' , $author_id );
                                echo " ";
                                the_author_meta( 'user_lastname' , $author_id );
                              } else {
                                the_author_meta( 'user_nicename' , $author_id );
                              }
                            ?> 
                          </p>
                        </div>
                        <div class="flex text-secondary font-bold text-sm md:text-base"><?php echo do_shortcode('[post-views]'); ?> &nbsp;  min read</div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php $i++;  endwhile; else : ?>
              <p><?php esc_html_e( 'Sorry, There is no post on our site.' ); ?></p>
            <?php endif; ?>
            </div>
        </div>
        <?php 
          if($totalPost > 6) {
            ?>
            <div class="flex justify-center py-10">
              <button type="button" class="post_road_more hover:bg-primary hover:text-white text-primary border border-primary px-3 py-2 rounded-lg w-32 lg:w-44">Read More</button>
              <div class ="loader hidden"></div>
            </div>
          <?php }
        ?>
      </div>
    </section>

    <section class = "w-40 h-20"></section>
    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
  </main>
<?php get_footer();?>