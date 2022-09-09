<?php

  // Ajax started//

  add_action( 'wp_ajax_get_ajaxLoadMore', 'get_ajaxLoadMore' );
  add_action( 'wp_ajax_get_ajaxSearch', 'get_ajaxSearch' );



  function get_ajaxLoadMore() {
    $page = $_POST['page'];
    $cat = $_POST['cat'];

    
    $args = array(
      "posts_per_page" => 1,
      "orderby"        => "date",
      "order"          => "DESC",
      'post_status'      => 'publish',
      'category_name'  => $cat,
      'paged' => $page,
      );

    $wp_query = new WP_Query( $args );
    $totalPost = $wp_query->found_posts; 

    echo '<div totalPosts="'.$totalPost.'" catName = "'.$cat.'" class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" currentPage = "'.$page.'">';
    if ( $wp_query->have_posts() ) :
      while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
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
    <?php
      endwhile;
    endif;
    echo '</div>';
    exit();
  }
  

  function get_ajaxSearch() {
    $key = $_POST['key'];
    $cat = $_POST['cat'];

    $arr = array(
      'post_type' => 'post',
      'post_status' => 'publish', 
      'posts_per_page' => 5,
      'order' => 'ASC',
      'orderby' => 'post_title',
      'category_name'  => $cat,
      'search_prod_title' => $key,
    );

    add_filter( 'posts_search', 'post_search_add', 1, 2 );
    $wp_query = new WP_Query($arr);
    remove_filter( 'posts_search', 'post_search_add', 1, 2 );

    if ( $wp_query->have_posts() ) :
      while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <div class = "w-full px-4 py-4 border-b hover:bg-[#f4f4f4]">
          <a href="<?php the_permalink();?>">
            <div class ="flex  items-center justify-between">
              <div class = "w-16 h-16 rounded-md">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <img class="h-full w-full rounded-md object-cover" alt="" src="<?php echo $image[0]; ?>">
                <?php endif; ?>
              </div>
              <div>
                <p class = "line-clamp-2 w-[270px] text-[14px] font-bold"><?php echo get_the_title($post->ID); ?></p>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; else : ?>
      <p class = "px-2 py-6 text-center"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; 
    die();
  }