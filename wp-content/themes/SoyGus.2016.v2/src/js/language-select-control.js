(function() {
  'use strict';
  $(document).ready(function() {
    
    var href = window.location.href.split('/');
    var ls = $('.language-select');
		if (href.indexOf('es') == -1) {
			ls.find('.EN').addClass('active-language');
		} else {
			ls.find('.ES').addClass('active-language');
		}

  });

}).call(this);