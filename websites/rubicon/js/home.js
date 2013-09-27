
/*=============== [ Home Cycle ] =============*/

$(document).ready(function() {
    
	$('#text-cycle').css('display', 'block');
	
	

	
	$('#text-cycle').cycle({
	
		fx: 'fade',
		delay: -3000,
		cleartype: false
	
	
	})
	
	
	
	
	/*=====================[Home Pulse Animation]=========================*/
	$.extend($.fn.pulse = function() {
    	
		 var minOpacity = .60;
   		
		 var fadeOutDuration = 700;
    	
		 var fadeInDuration = 700;
		 
    	$(this).attr('pulsing', 'y');

    	$(this).animate({
        	opacity: minOpacity
    	}, fadeOutDuration, function() {
        
		$(this).animate({
            
			opacity: 1
        
		}, fadeInDuration, function() {
            if ($(this).attr('pulsing') == 'y') $(this).pulse();
        })
    
	});
    
	return $(this);
});
$.extend($.fn.stopPulse = function() {
    
	$(this).attr('pulsing', '').stop(true, true).animate({
        opacity: 1
    
	});

});
    
    $("#home-wrapper").pulse();
	
	
	
	


	
});