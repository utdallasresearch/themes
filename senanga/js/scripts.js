
/** Senanga Theme module */
var senanga = (function($, undefined){

  var animate_participating_class_in = 'zoomIn';
  var animate_participating_class_out = 'zoomOut';
  var animate_lines_class_in = 'fadeIn';
  var animate_lines_class_out = 'fadeOut';
  var $participating_image;
  var $participating_image_lines;

  /**
   * Animate the Participating Institutions
   * @param  {string} direction up or down
   */
  var animateParticipating = function(direction) {
    if (direction === 'down') {
      $participating_image.removeClass(animate_participating_class_out).addClass(animate_participating_class_in);
      $participating_image_lines.removeClass(animate_lines_class_out).addClass(animate_lines_class_in);
    } else {
      $participating_image.removeClass(animate_participating_class_in).addClass(animate_participating_class_out);
      $participating_image_lines.removeClass(animate_lines_class_in).addClass(animate_lines_class_out);
    }
  }

  /**
   * Register waypoints
   */
  var registerWaypoints = function() {
    var participating_waypoint = $('.participating-wrapper').waypoint({
      offset: '50%',
      handler: animateParticipating,
    });
  }

  /**
   * Activate the slider carousels
   */
  var activateCarousel = function() {
    $('.carousel').carousel({
      interval: 5000 //changes the speed
    });
  }

  /**
   * Initialize the theme
   */
  var init = function() {
    $participating_image = $('.participating-image');
    $participating_image_lines = $('.participating-image-lines');
    // $participating_image.css('opacity',0);
    // $participating_image_lines.css('opacity',0);
    activateCarousel();
    registerWaypoints();
  }

  return {
    init: init,
  };

})(jQuery);

// On Page Load
$(document).ready(function() {
  senanga.init();
});