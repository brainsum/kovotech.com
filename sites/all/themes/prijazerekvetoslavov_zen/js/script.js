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
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    // Place your code here.

  }
};


  //slick.js slideshows
  Drupal.behaviors.slideshow = {
    attach: function (context, settings) {

      $('.slickered .view-content').slick({
        infinite: true,
        arrows: false,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        lazyLoad: 'ondemand',
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 600
      });      

      //align vertical center images
        var imageHeight, wrapperHeight, overlap, container = $('.views-field-field-slider-image .field-content');

        function centerImage(){
           imageHeight = container.find('img').height();
           wrapperHeight = container.height();
           overlap = (wrapperHeight - imageHeight)/2;
           container.find('img').css('margin-top', overlap);
        }

        $(window).bind("load resize", centerImage);

    }
  }


})(jQuery, Drupal, this, this.document);
