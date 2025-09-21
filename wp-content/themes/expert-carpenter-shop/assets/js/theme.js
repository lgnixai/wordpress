// Menu Functions
function woodworking_workshop_openNav() {
  jQuery(".sidenav").addClass('show');
}

function woodworking_workshop_closeNav() {
  jQuery(".sidenav").removeClass('show');
}

/////////////////////// Focus handling ///////////////////////
(function(window, document) {
  function woodworking_workshop_handleMobileMenuNavigation() {
    document.addEventListener('keydown', function(e) {
      if (window.innerWidth > 991) return;
      const nav = document.querySelector('.sidenav.show');
      if (!nav) return;
      const focusableElements = Array.from(nav.querySelectorAll(
        'a, button, [tabindex="0"], input, [tabindex]:not([tabindex="-1"])'
      )).filter(el => el.offsetParent !== null);

      if (focusableElements.length === 0) return;

      const firstElement = focusableElements[0];
      const lastElement = focusableElements[focusableElements.length - 1];
      const activeElement = document.activeElement;

      if (e.key === 'Tab') {
        if (!e.shiftKey && activeElement === lastElement) {
          e.preventDefault();
          firstElement.focus();
        } 
        else if (e.shiftKey && activeElement === firstElement) {
          e.preventDefault();
          lastElement.focus();
        }
        else if (!nav.contains(activeElement)) {
          e.preventDefault();
          firstElement.focus();
        }
        return;
      }

      if (e.key === 'Tab' && e.shiftKey) {
        const activeElement = document.activeElement;

        if (activeElement.closest('.dropdown-menu')) {
          e.preventDefault();
          
          //current submenu
          const currentSubmenu = activeElement.closest('.dropdown-menu');
          const submenuItems = Array.from(currentSubmenu.querySelectorAll('a, button, [tabindex="0"]'))
            .filter(el => el.offsetParent !== null);
          const currentIndex = submenuItems.indexOf(activeElement);
          if (currentIndex > 0) {
            submenuItems[currentIndex - 1].focus();
          } else {
            const parentDropdown = currentSubmenu.closest('.dropdown, .page_item_has_children');
            if (parentDropdown) {
              // Find all focusable elements in parent
              const allFocusable = Array.from(parentDropdown.querySelectorAll('a, button, [tabindex="0"]'))
                .filter(el => el.offsetParent !== null);
              
              // Filter to only direct children of parentDropdown
              const parentItems = allFocusable.filter(el => el.parentElement === parentDropdown);
              
              if (parentItems.length > 0) {
                parentItems[0].focus();
              }
            }
          }
        }
      }
    });
  }

  document.addEventListener('DOMContentLoaded', function() {
    woodworking_workshop_handleMobileMenuNavigation();

    document.addEventListener('focusin', function(e) {
      if (window.innerWidth > 991) return;
      
      const focusedItem = e.target;
      const submenu = focusedItem.closest('.dropdown-menu');
      if (submenu) {
        submenu.style.display = 'block';
        submenu.classList.add('show');
      }
    });
  });
})(window, document);

/////////////////////// end ///////////////////////


jQuery(function($) {
  "use strict";

  /////////////////////// Menu events binding ///////////////////////

  $(document).ready(function () {
    /*--- adding dropdown class to menu -----*/
    $("ul.sub-menu,ul.children").parent().addClass("dropdown");
    $("ul.sub-menu,ul.children").addClass("dropdown-menu");
    $("ul#menuid li.dropdown a,ul.children li.dropdown a").addClass("dropdown-toggle");
    $("ul.sub-menu li a,ul.children li a").removeClass("dropdown-toggle");
    $('nav li.dropdown > a, .page_item_has_children a').append('<span class="caret"></span>');
    $('a.dropdown-toggle').attr('data-toggle', 'dropdown');

    /*-- Mobile menu --*/
    if ($('#site-navigation').length) {
        $('#site-navigation .menu li.dropdown,li.page_item_has_children').append(function () {
            return '<i class="fas fa-caret-down abc" aria-hd="true"></i>';
        });
        $('#site-navigation .menu li.dropdown .fas,li.page_item_has_children .fas').on('click', function () {
            $(this).parent('li').children('ul').slideToggle().toggleClass('show');
        });
    }

    /*-- tooltip --*/
    $('[data-toggle="tooltip"]').tooltip();

    /*-- Button Up --*/
    var btnUp = $('<div/>', { 'class': 'btntoTop' });
    btnUp.appendTo('body');
    $(document).on('click', '.btntoTop', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 700);
    });

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 200)
            $('.btntoTop').addClass('active');
        else
            $('.btntoTop').removeClass('active');
    });

    /*-- Reload page when width is between 320 and 768px and only from desktop */
    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
    $(window).on('resize', function () {
        var win = $(this); //this = window
        if (win.width() > 320 && win.width() < 991 && isMobile == false && !$("body").hasClass("elementor-editor-active")) {
            location.reload();
        }
    });
    });

    woodworking_workshop_search_focus();

  /////////////////////// end ///////////////////////

});

var btn = jQuery('#scrolltop');

jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 300) {
    btn.addClass('scroll');
  } else {
    btn.removeClass('scroll');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});

window.addEventListener('load', (event) => {
    jQuery(".loading").delay(2000).fadeOut("slow");
});

//sticy header js

jQuery(window).scroll(function () {
    var sticky = jQuery('.sticky-header'),
    scroll = jQuery(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed-header');
    else sticky.removeClass('fixed-header');
});


// search
function woodworking_workshop_search_focus() {

  /* First and last elements in the menu */
  var woodworking_workshop_search_firstTab = jQuery('.inner_searchbox input[type="search"]');
  var woodworking_workshop_search_lastTab  = jQuery('button.search-close'); /* Cancel button will always be last */

  jQuery(".open-search").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').addClass("search-focus");
    woodworking_workshop_search_firstTab.focus();
  });

  jQuery("button.search-close").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').removeClass("search-focus");
    jQuery(".open-search").focus();
  });

  /* Redirect last tab to first input */
  woodworking_workshop_search_lastTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('search-focus'))
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      woodworking_workshop_search_firstTab.focus();
    }
  });

  /* Redirect first shift+tab to last input*/
  woodworking_workshop_search_firstTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('search-focus'))
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      woodworking_workshop_search_lastTab.focus();
    }
  });

  /* Allow escape key to close menu */
  jQuery('.inner_searchbox').on('keyup', function(e){
    if (jQuery('body').hasClass('search-focus'))
    if (e.keyCode === 27 ) {
      jQuery('body').removeClass('search-focus');
      woodworking_workshop_search_lastTab.focus();
    };
  });
}
//sticy header js

jQuery(window).scroll(function () {
  var sticky = jQuery('.sticky-header'),
  scroll = jQuery(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed-header');
  else sticky.removeClass('fixed-header');
});