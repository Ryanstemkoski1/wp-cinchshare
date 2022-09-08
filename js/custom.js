$(document).ready(function () {
  /**
   * Accordion Faq
   */
  $('.faq-accordion li').click(function () {
    let index = $(this).attr('index')
    $.each($('.faq-accordion li'), function () {
      let itemIndex = $(this).attr('index')
      if (itemIndex != index) {
        $(this).find('.faq_body').removeClass('active');
        $(this).find('svg').removeClass('faqIcon');
      }
    })
    $(this).find('.faq_body').toggleClass('active');
    $(this).find('svg').toggleClass('faqIcon');
  })

  /**
   * Video thumbnail
   */
  $('.video_thumb').click(function () {
    $(this).addClass("hidding")
    $('.video_cont').addClass('active')
  })
  /**
   * Video control
   */
  $('.button_content button').click(function () {
    let btnName = $(this).attr('data')

    if ($(this).hasClass('text-secondary')) {
      $.each($('.button_content button'), function () {
        if ($(this).hasClass('bg-secondary')) {
          $(this).removeClass('bg-secondary text-white').addClass("text-secondary bg-white")
        }
      })

      $.each($('.text_content>div'), function () {
        let contName = $(this).attr('data')

        if (contName == btnName) {
          $(this).addClass('active')
        } else {
          $(this).removeClass('active')
        }
      })

      $.each($('.media_content>div'), function () {
        let mediaName = $(this).attr('data')

        if (mediaName == btnName) {
          $(this).addClass('active')
        } else {
          $(this).removeClass('active')
        }
        $(this).find("video").trigger('play')
      })
    }
    $(this).addClass('bg-secondary text-white').removeClass("text-secondary bg-white")
  })

  /**
   * Features slide
   */

  let slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = $(".mySlides");
    if (slides.length) {
      let dots = $(".dots>div");
      if (n > slides.length) { slideIndex = slides.length }
      if (n < 1) { slideIndex = 1 }
      for (i = 0; i < slides.length; i++) {
        if (!slides[i].classList.contains('hidden')) {
          slides[i].classList.add('hidden')
        }
      }
      for (i = 0; i < dots.length; i++) {
        if (!dots[i].classList.contains('opacity-20')) {
          dots[i].classList.add('opacity-20')
        }
      }
      slides[slideIndex - 1].classList.remove('hidden')
      dots[slideIndex - 1].classList.remove('opacity-20')
      if (slideIndex == slides.length) {
        $('.cin-feature-btn>button.next').removeClass('bg-secondary text-white').addClass('bg-white text-secondary')
        $('.cin-feature-btn>button.next svg path').addClass('svgsecondColor')
      } else if (slideIndex == 1) {
        $('.cin-feature-btn>button.prev').removeClass('bg-secondary text-white').addClass('bg-white text-secondary')
        $('.cin-feature-btn>button.prev svg path').addClass('svgsecondColor')
      } else {
        $('.cin-feature-btn>button').removeClass('bg-white text-secondary').addClass('bg-secondary text-white')
        $('.cin-feature-btn>button svg path').removeClass('svgsecondColor')
      }
    }
  }

  $('.dots > div').click(function () {
    let num = $(this).attr('index')
    currentSlide(parseInt(num))
  })

  $('.cin-feature-btn>button').click(function () {
    let cn = $(this).attr('class')
    if (cn.includes('prev')) {
      plusSlides(-1)
    } else if (cn.includes('next')) {
      plusSlides(1)
    }
  })

  /**
   * Review Slides
   */
  let reviewIndex = 1;
  reviewSlides(reviewIndex);

  // Next/previous controls
  function plusReview(n) {
    reviewSlides(reviewIndex += n);
  }

  function reviewSlides(n) {
    let i;
    let slides = $(".reviewSlides");
    if (slides.length) {
      if (n > slides.length) { reviewIndex = slides.length }
      if (n < 1) { reviewIndex = 1 }
      for (i = 0; i < slides.length; i++) {
        if (!slides[i].classList.contains('hidden')) {
          slides[i].classList.add('hidden')
        }
      }
      slides[reviewIndex - 1].classList.remove('hidden')
      if (reviewIndex == slides.length) {
        $('.cin-review-btn>button.next').addClass('reviewNav')
      } else if (reviewIndex == 1) {
        $('.cin-review-btn>button.prev').addClass('reviewNav')
      } else {
        $('.cin-review-btn>button').removeClass('reviewNav')
      }
    }
  }

  $('.cin-review-btn>button').click(function () {
    let cn = $(this).attr('class')
    if (cn.includes('prev')) {
      plusReview(-1)
    } else if (cn.includes('next')) {
      plusReview(1)
    }
  })

  /**
   * Direct Sales Section 7
   */

  $('.s-direct_toggle  .content_button button').click(function () {
    let btnName = $(this).attr('index')

    if ($(this).hasClass('text-secondary')) {
      $.each($('.s-direct_toggle .content_button button'), function () {
        $(this).removeClass('bg-secondary text-white').addClass("text-secondary bg-white")
        if ($(this).attr('index') == btnName) {
          $(this).addClass('bg-secondary text-white').removeClass("text-secondary bg-white")
        }
      })

      $.each($('.s-direct_toggle .content_text'), function () {
        let contName = $(this).attr('index')

        if (contName == btnName) {
          $(this).removeClass('hidden')
        } else {
          $(this).addClass('hidden')
        }
      })
    }


  })

  /**
   * Direct Sales top sellers
   */

  $('.t-seller_buttons button').click(function () {
    let btnName = $(this).attr('index')

    if (!$(this).hasClass('bg-secondary')) {
      $.each($('.t-seller_buttons button'), function () {
        $(this).removeClass('bg-secondary')
      })

      $.each($('.t-seller_contents>div'), function () {
        let contName = $(this).attr('index')

        if (contName == btnName) {
          $(this).removeClass('hidden')
        } else {
          $(this).addClass('hidden')
        }
      })

      $(this).addClass('bg-secondary')
    }
  })

  /**
   * Direct Sales 
   */

  $('.f_unbeatable_button>div').click(function () {
    let btnName = $(this).attr('index')

    if ($(this).hasClass('opacity-60')) {
      $.each($('.f_unbeatable_button>div'), function () {
        if (!$(this).hasClass('opacity-60')) {
          $(this).addClass('opacity-60')
        }
      })

      $.each($('.f_unbeatable_content > div'), function () {
        let contName = $(this).attr('index')

        if (btnName === contName) {
          $(this).removeClass('hidden')
        } else {
          $(this).addClass('hidden')
        }

        $(this).find("video").get(0).play()
      })
    }

    $(this).removeClass('opacity-60')
  })

  /**
   * Pricing 
   */

  $('.s_price_btns>div').click(function () {
    $('.s_price_btns button').toggleClass('move')
    if ($('.s_price_btns button').hasClass('move')) {
      $('.s_price_btns button').text('Annually')
    } else {
      $('.s_price_btns button').text('Monthly')
    }

    $('.package_year').toggleClass('hidden')
    $('.package_month').toggleClass('hidden')
    $('.info_month').toggleClass('hidden')
    $('.info_year').toggleClass('hidden')
  })

  /**
   * Pricing Accordion
   */

  $('.cin-accordion li>div').click(function () {
    let btnName = $(this).attr('index')

    $.each($('.cin-accordion li'), function () {
      let contName = $(this).children().attr('index')
      if (contName != btnName) {
        $(this).find('.accordion_body').addClass('hidden');
        $(this).find('.minus').addClass('hidden');
        $(this).find('.plus').removeClass('hidden');
      }
    })

    $(this).find('.accordion_body').toggleClass('hidden');
    $(this).find('.minus').toggleClass('hidden');
    $(this).find('.plus').toggleClass('hidden');
  })

  /**
   * Privacy Side bar
   */

  $('.privacy_sidebar li').click(function () {
    let btnName = $(this).attr('index')

    if (!$(this).hasClass('bg-secondary')) {

      $.each($('.privacy_sidebar li'), function () {
        $(this).removeClass('bg-secondary bg-opacity-5')
      })

      $.each($('.privacy_right_content>div'), function () {
        let contName = $(this).attr('index')

        if (contName === btnName) {
          $(this).removeClass('hidden')
        } else {
          $(this).addClass('hidden')
        }
      })
    }

    $(this).addClass('bg-secondary bg-opacity-5')
  })

  /**
   * Ajax Road More Button
   */

  $('.post_road_more').click(function () {
    let page = $('.s_post_body').children().last().attr('currentPage')

    $(this).addClass('hidden')
    $('.loader').removeClass('hidden')

    jQuery.ajax({
      type: "post",
      dataType: "html",
      url: my_ajax_object.ajax_url,
      data: {
        action: "get_ajaxLoadMore",
        page: parseInt(page) + 1,
      },
      success: function (response) {
        console.log(response);
        $('.s_post_body').append(response)

        $('.loader').addClass('hidden')
        // loadMoreAjax();
      }
    });
  })

  function loadMoreAjax() {
    let page = parseInt($('.s_post_body').children().last().attr('currentPage'))
    let totalPosts = parseInt($('.s_post_body').children().last().attr('totalPosts'))

    if ((totalPosts - page * 6) > 0) {
      $('.post_road_more').removeClass('hidden')
    } else {
      $('.post_road_more').addClass('hidden')
    }

  }
})

/**
 * Sticky Header
 */

var scrollIng = false;
jQuery(window).scroll(function () {
  if (jQuery(document).scrollTop() > 170) {
    if (!scrollIng) {
      syncContainer(false)
    }
    jQuery('.c_header_sticky').fadeIn('fast');
    scrollIng = true;
  } else {
    if (scrollIng) {
      syncContainer(true)
    }
    jQuery('.c_header_sticky').fadeOut('fast');
    scrollIng = false;
  }
});

jQuery(function () {
  syncContainer(false)
});

function syncContainer(towardParent) {
  var $parent = jQuery(".c_header");
  var $child = jQuery(".c_header_sticky");
  if (towardParent) {
    $parent.html($child.children().clone())
  } else {
    $child.html($parent.children().clone())
  }
}