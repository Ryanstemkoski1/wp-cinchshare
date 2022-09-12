<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cinchshare
 */

get_header();
?>

	<main id="primary">
		<div class = "w-40 h-[150px]"></div>

    <section class = "hidden md:flex pr-4 xl:pr-0  max-w-max-content m-auto flex justify-end">
			<div class = "relative flex border rounded-md w-fit items-center py-2 px-4 post_search downloads_search min-w-[400px]" >
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
          <svg width="67" height="60" viewBox="0 0 67 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.6009 41.0305C20.750
            4 40.9536 20.9174 40.9157 21.0858 40.9203C21.2543 40.9249 21.4189 40.9718 21.5639 41.0566C24.361 42.6644 27.5385 43.5098 30.7729 43.5067C33.9212 43.5004 37.0154 42.699 39.7634 41.1783C42.5113 39.6576 44.822 37.4679 46.4763 34.8164C46.5086 34.7634 46.5295 34.7046 46.5385 34.6433C46.5476 34.5821 46.5443 34.5196 46.5287 34.4597C46.513 34.3998 46.4854 34.3436 46.4475 34.2943C46.4096 34.2451 46.362 34.2038 46.3078 34.173L43.7974 32.731C42.8483 32.1764 41.749 31.9263 40.6505 32.0148C39.5521 32.1034 38.5082 32.5263 37.6623 33.2256C35.9938 34.6414 33.9218 35.5085 31.7333 35.707C29.5449 35.9054 27.3483 35.4254 25.4477 34.3332C23.547 33.2411 22.0365 31.591 21.1253 29.6115C20.2141 27.6319 19.9473 25.4209 20.3618 23.2845C20.7131 21.474 21.5405 19.7871 22.7604 18.3939C23.9803 17.0007 25.5494 15.9504 27.31 15.349C29.0707 14.7476 30.9603 14.6163 32.7886 14.9683C34.6169 15.3203 36.3192 16.1432 37.7238 17.354C38.5418 18.0394 39.5553 18.4554 40.6232 18.5441C41.6912 18.6329 42.7604 18.3899 43.6824 17.849L46.3021 16.3412C46.3561 16.3101 46.4034 16.2686 46.441 16.2192C46.4787 16.1698 46.506 16.1136 46.5215 16.0536C46.537 15.9937 46.5404 15.9313 46.5313 15.8701C46.5223 15.8088 46.5009 15.75 46.4687 15.697C45.1983 13.6485 43.5315 11.8688 41.5639 10.4602C39.5963 9.05157 37.3667 8.04182 35.0035 7.48898C32.6403 6.93614 30.1903 6.85112 27.7938 7.23881C25.3974 7.6265 23.1019 8.47925 21.0395 9.74803C18.9771 11.0168 17.1883 12.6766 15.7761 14.632C14.3639 16.5874 13.3562 18.7998 12.8107 21.142C12.2652 23.4843 12.1926 25.9101 12.5974 28.2802C13.0022 30.6502 13.8763 32.9177 15.1694 34.9522C15.2594 35.0964 15.3094 35.2614 15.3147 35.4308C15.3199 35.6001 15.2802 35.7679 15.1993 35.9173L10.0554 45.5545C10.0076 45.6441 9.9901 45.7465 10.0054 45.8467C10.0206 45.947 10.0677 46.0397 10.1401 46.1114C10.2124 46.1831 10.3063 46.23 10.4076 46.2451C10.5088 46.2603 10.6122 46.2429 10.7028 46.1957L20.6009 41.0305Z" fill="#2BD4D9"/>
            <path d="M63 44.3281V51.4392C63 52.3822 62.6254 53.2866 61.9586 53.9534C61.2918 54.6202 60.3874 54.9948 59.4444 54.9948H34.5556C33.6126 54.9948 32.7082 54.6202 32.0414 53.9534C31.3746 53.2866 31 52.3822 31 51.4392V44.3281" stroke="#5433ED" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M38.1113 35.4453L47.0002 44.3342L55.8891 35.4453" stroke="#5433ED" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M47 44.3333V23" stroke="#5433ED" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <h1 class = "pl-4 text-3xl md:text-4xl lg:text-5xl font-bold">
						Downloads
          </h1>
        </div>
        <p class ="text-center font-bold text-xl pt-8 md:text-2xl lg:text-3xl" >
				</p>
      </div>
    </section>

    <section class = "my-12 md:my-28">
      <?php
        $args = array(
          'post_type' => 'downloads',
          "posts_per_page" => 1,
          "orderby"        => "date",
          "order"          => "DESC",
          'post_status'      => 'publish',
          'paged' => 1,
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
                  <img class="h-full w-full object-cover rounded-2xl bg-white" alt="" src="<?php echo $image[0]; ?>">
                <?php endif; ?>
              </div>
            </div>
            <div class="w-full lg:w-5/12 ">
              <div class="flex items-center">
                <p class="text-secondary font-bold text-sm md:text-base uppercase">
                  <?php 
                    if(get_the_category($post->ID)) {
                      $category_detail=get_the_category($post->ID);
                      echo $category_detail[0]->cat_name;
                    } else {
                      echo "downloads";
                    }
                  ?>
                </p>
              </div>
              <p class="mt-4 lg:mt-6 text-xl md:text-2xl lg:text-3xl font-bold line-clamp-2"><?php echo get_the_title($post->ID); ?></p>
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
              <a href="">
                <button type="button" class="false bg-primary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-32 lg:w-44 mt-4 lg:mt-6">Download</button>
              </a>
            </div>
          </div>
        <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, There is no post on our site.' ); ?></p>
      <?php endif; ?>
    </section>

    <section>
      <div class = "max-w-max-content m-auto px-2">
        <p class="font-bold text-xl md:text-2xl lg:text-3xl pl-4">Recent Posts</p>
        <div class ="s_download_body pb-6 mt-8">
          <?php 
            $i =1; 
            $args = array(
              'post_type' => 'downloads',
              "posts_per_page" => 9,
              "orderby"        => "date",
              "order"          => "DESC",
              'post_status'      => 'publish',
              'paged' => 1,
            ); 

            $wp_query = new WP_Query( $args );
            $totalPost = $wp_query->found_posts; 
            echo '<div totalPosts="'.$totalPost.'" class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" postName = "downloads" currentPage = "1">';
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
                        <p class="text-secondary font-bold text-sm uppercase py-2">
                          <?php 
                            if(get_the_category($post->ID)) {
                              $category_detail=get_the_category($post->ID);
                              echo $category_detail[0]->cat_name;
                            } else {
                              echo "downloads";
                            }
                          ?>
                        </p>
                      </div>
                      <p class="font-bold text-md lg:text-xl break-words md:min-h-[48px] lg:min-h-[50px] line-clamp-2"><?php echo get_the_title($post->ID); ?></p>
                      <a href="<?php echo get_field('post_download_file', $post->ID); ?> ">
                        <button type="button" class="false bg-primary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-32 lg:w-44 mb-4 lg:mb-6">Download</button>
                      </a>
                    </div>
                  </div>
                </div>
              <?php $i++;  endwhile; else : ?>
              <p><?php esc_html_e( 'Sorry, There is no post on our site.' ); ?></p>
            <?php endif; ?>
            </div>
        </div>
        <?php 
          if($totalPost > 9) {
            ?>
            <div class="flex justify-center py-10">
              <button type="button" class="download_road_more hover:bg-primary hover:text-white text-primary border border-primary px-3 py-2 rounded-lg w-32 lg:w-44">Read More</button>
              <div class ="loader hidden"></div>
            </div>
          <?php }
        ?>
      </div>
    </section>
    <section class = "w-40 h-20"></section>
    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
	</main><!-- #main -->

<?php
get_footer();
