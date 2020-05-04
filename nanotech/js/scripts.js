
/** Nanotech Theme module */
var nanotech = (function($, undefined){

  /*
   * Focus the search box
   */
  var focusSearchbox = function() {
    $('#s').focus();
  };

  /**
   * Initialize the theme
   */
  var init = function() {
    $('#main_search_dropdown').on('shown.bs.dropdown', focusSearchbox);
  };

  return {
    init: init,
  };

})(jQuery);

// On Page Load
$(document).ready(function() {
  nanotech.init();
});