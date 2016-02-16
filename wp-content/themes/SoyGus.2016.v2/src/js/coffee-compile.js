(function() {
  'use strict';
  $(document).ready(function() {
    var scrollToController;
    scrollToController = new ScrollMagic.Controller();
    scrollToController.scrollTo(function(newpos) { 
      TweenMax.to(window, 0.5, {
        scrollTo: {
          y: newpos
        }
      });
    });
    $(document).on('click', 'a[href^=#]', function(e) {
      var current, id;
      $('a[href^=#]').parent().removeClass('current-menu-item');
      id = $(this).attr('href');
      current = 'a[href^=' + id + ']';
      $(current).parent().addClass('current-menu-item');
      if ($(id).length > 0 && !id.match(/nav/g) && !id.match(/carousel/g)) {
        e.preventDefault();
        scrollToController.scrollTo(id);
      }
    });
  });

}).call(this);
