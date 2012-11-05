;(function($) {
  Drupal.behaviors.expandSearch = {
    attach: function(context) {
      var self = this;
      $(context).find('.region-header .block-search')
      .not('.expandSearch-processed').addClass('expandSearch-processed')
      .bind('click', function(e) {
        var $this = $(this),
            $content = $this.children('.content'),
            hidden = $content.width() === 0;
        if (hidden) {
          $this.addClass('open');
        }
      });
    }
  };
})(jQuery);