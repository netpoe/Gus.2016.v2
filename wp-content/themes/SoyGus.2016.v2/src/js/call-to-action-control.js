(function() {
  'use strict';
  $(document).ready(function() {
    
		$('.btn-call-to-action').click(function(e){
			e.preventDefault();

			$(this).text('yo@soygus.com'); 
		});

  });

}).call(this);