jQuery(function($){

    jQuery('#bxslider-testimonials').bxSlider({
        pagerCustom: '#bx-pager-testimonials'
    });

    jQuery('#bxslider-client-logos').bxSlider({
      minSlides: 4,
      maxSlides: 4,
      slideWidth: 260,
      slideMargin: 0,
      ticker: true,
      tickerHover: true,
      speed: 148000
    });

});
