/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($) {
  // Hamburger menu
  Drupal.behaviors.hamburger = {
    attach: function () {
      $('#mobile-menu').hide();
      $('#hamburger').click(function () {
          $('#mobile-menu').slideToggle();
          $(this).toggleClass('open');
      });
    }
  };

// Views Slideshow height

$(document).ready(function () {
    $('.views-slideshow-cycle-main-frame-row img').each(function () {
        var img_height = $(this).height();
        if (img_height !== 0) {
            $('.views-slideshow-cycle-main-frame').height(img_height + 50);
            return false;
        }
    });
});

$(window).load(function () {
    $('.views-slideshow-cycle-main-frame-row img').each(function () {
        var img_height = $(this).height();
        if (img_height !== 0) {
            $('.views-slideshow-cycle-main-frame').height(img_height + 50);
            return false;
        }
    });
});

$(window).resize(function () {
    $('.views-slideshow-cycle-main-frame-row img').each(function () {
        var img_height = $(this).height();
        if (img_height !== 0) {
            $('.views-slideshow-cycle-main-frame').height(img_height + 50);
            return false;
        }
    });
});

}(jQuery));
