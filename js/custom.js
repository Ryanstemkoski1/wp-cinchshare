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
})  