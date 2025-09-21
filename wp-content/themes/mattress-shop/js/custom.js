// Scroll to Top
window.onscroll = function() {
  const mattress_shop_button = document.querySelector('.scroll-top-box');
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mattress_shop_button.style.display = "block";
  } else {
    mattress_shop_button.style.display = "none";
  }
};

document.querySelector('.scroll-top-box a').onclick = function(event) {
  event.preventDefault();
  window.scrollTo({top: 0, behavior: 'smooth'});
};

// Banner slider
jQuery(document).ready(function () {
  var swiper = new Swiper(".mySwiper", {
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    speed: 1200,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    loop: true,
    pagination: {
      el: ".banner-swiper-pagination",
      type: "fraction",
      formatFractionCurrent: n => (n < 10 ? "0" + n : n),
      formatFractionTotal: n => (n < 10 ? "0" + n : n),
    },
    navigation: {
      nextEl: ".banner-swiper-button-next",
      prevEl: ".banner-swiper-button-prev",
    },
  });
});

// Swiper Initializer Function
jQuery(document).ready(function($) {

  function mattress_shop_initCustomSwiper(containerSelector, ulExtraClass, slideExtraClass, paginationSelector) {
    var $mattress_shop_swiperEl = $(containerSelector);

    if ($mattress_shop_swiperEl.find("ul.swiper-wrapper").length) {
      var $mattress_shop_ul = $mattress_shop_swiperEl.find("ul.swiper-wrapper");
      var $mattress_shop_slides = $mattress_shop_ul.find("li");

      // Create new swiper wrapper
      var $mattress_shop_wrapper = $("<div class='swiper-wrapper " + ulExtraClass + "'></div>");
      $mattress_shop_slides.each(function () {
        var $mattress_shop_slide = $("<div class='swiper-slide " + slideExtraClass + "'></div>");
        $mattress_shop_slide.html($(this).html());
        $mattress_shop_wrapper.append($mattress_shop_slide);
      });

      // Replace old UL with new Swiper wrapper
      $mattress_shop_ul.replaceWith($mattress_shop_wrapper);
    }

    // Initialize Swiper
    new Swiper(containerSelector, {
      breakpoints: {
        0: { slidesPerView: 1 },
        600: { slidesPerView: 2 },
        992: { slidesPerView: 3 }
      },
      speed: 1200,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      spaceBetween: 30,
      pagination: {
        el: paginationSelector,
        clickable: true,
      },
    });
  }

  // Project Slider
  mattress_shop_initCustomSwiper(".mySwiper1", "project-box", "project-inner-box", ".project-swiper-pagination");

  // News Slider
  mattress_shop_initCustomSwiper(".mySwiper2", "news-box", "news-inner-box", ".news-swiper-pagination");

});
