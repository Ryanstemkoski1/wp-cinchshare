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
})