/*


  ===================================
  Name: Rubicon | 2012 Annual Report
  Designed by: Curran Connors
  Framework: jQuery 
  Javascript for rubicon pages
  ====================================
  
  


================J S - M E N U==================== 
   ===== 1: Preload Images 
   ===== 2: Inner Page Animation
   ===== 3: Downloads
   ===== 4: Tables 
   ===== 5: Light Box
   ===== 6: Fixed Scroll 

   


*/



// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

/*Begin jQuery*/
	$(document).ready(function() {

		

	
		
		/* =================================[3: Downloads]================================= */
		
		$('#download-toggle').click(function() {  			
					
		
			$('#show-downloads').stop().slideDown('slow')
    			
				
			
        });
		
		
		$("#show-downloads > .container > .close-downloads").click(function(){
  	
			$('#show-downloads').stop().slideUp('slow');
		
		});
		
		
		
				
	
	
	
/* =================================[4: Tables ]================================= */
	
	$('#financial-highlights td:nth-child(2)').addClass('darkblue').css({
		
		'text-align' : 'right'
	
	}),
	
	$('#financial-highlights td:nth-child(3), td:nth-child(4)').css({
		
		'text-align' : 'right'
		
	})
	
	$('#financial-highlights tr').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')});
	
	$('#corporate-table tr:nth-child(1), #corporate-table tr:nth-child(6) ').addClass('darkblue')
	
	$('#corporate-table tr:nth-child(6) td').css({'padding-top' : '15px'});
	
	
	

	
	
	
	/*=========================[5: Light box]===================================*/
	
	
	$('#about').click(function() {
		
		$('#president-box').fadeIn('fast');
		$('#overlay').fadeIn('fast');
		
		
    });
	
	 $("#president-box .close").click(function(){
  	
		$('#president-box, #overlay').fadeOut('fast');
		
		});
		
		
		
		
	
	
		
	});/*end of jQuery*/