// JavaScript Function

/*========================================

	[< Fixed Div Function Version: 0.1 >]

========================================*/
		
	$(document).ready(function() {
		
	
	
		function fixDiv(){
			
			var $catch = $('#president, #unparalleld-page'); 
			
			
			if($('body').hasClass('shareholder')){
				
				
				
				if ($(window).scrollTop() > 50) 
  		
					  $catch.css({'position': 'fixed', 'top': '105px'}); 
  				else
   				
				 	$catch.css({'position': 'relative', 'top': 'auto'});
				
				
				
			}
			else if($('body').hasClass('interior-page')) { 
			
				
					
				if ($(window).scrollTop() > 55) 
  		
					  $catch.css({'position': 'fixed', 'top': '112px'}); 
  				else
   				
				 	$catch.css({'position': 'relative', 'top': 'auto'});
				
			}
			
		}
		
						
						
		$(window).scroll(fixDiv);
				
		fixDiv();
	
	
	
			
	
		
    });