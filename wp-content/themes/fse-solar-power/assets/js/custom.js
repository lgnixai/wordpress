// Main Slider Js
jQuery(document).ready(function(){
  var owl = jQuery('.owl-carousel');
    owl.owlCarousel({
    margin: 20,
    nav: false,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots: false,
    navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });
});