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
})