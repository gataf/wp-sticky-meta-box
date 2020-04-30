jQuery(document).ready(function($) {
	
		if($(window).width() >= 850){
			
			num = '';
			if ( $('#postbox-container-1').length ) 
				num = $('#postbox-container-1').outerHeight();
			
			var submitDiv = $('#submitdiv'),
				submitHeight = $(submitDiv).outerHeight(),
				postBody = $('#post-body-content').outerHeight(),
				postBody2 = $('#postbox-container-2').outerHeight(),
				sideBar = $('#postbox-container-1').outerHeight();
			
			var bodyHeight = postBody + postBody2;
			
			$(window).bind('scroll', function () {
			
				var offset = $(window).scrollTop();
				
				if ( bodyHeight >= sideBar ) {
				
					if ( offset > num ) {
				        $(submitDiv).css({
				        	'position' 	   : 'fixed',
				        	'top' 		   : '50px',
				        	'margin-right' : '15px',
				        	'z-index' 	   : 10000
				        });
				    } else {
				    	$(submitDiv).css({
				        	'position'     : 'relative',
				        	'top' 		   : 0,
				        	'margin-right' : 0
				        });
				    }
				    
				}
			    
			});
		
		}
	
});