/**
 * @JS for YOURTHEME theme.
 */

(function($) {
  /**
   * Behaviors for YOURTHEME theme.
   */
  Drupal.behaviors.YOURTHEME = {
    attach: function (context) {
      var hiddenTitle;
      $(".sf-menu li > a").hover(
        // The mouse pointer enters the element.
        function() {
          //Temporarly store hidden title.
          hiddenTitle = $(this).attr('title');
          //Temporarly remove hidden title.
          $(this).attr('title','');
        },
        // The mouse pointer leaves the element.
        function() {
          // Restore the hidden title.
          $(this).attr('title',hiddenTitle);
        }
      );
    }
  };
})(jQuery);
