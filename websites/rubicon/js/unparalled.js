// JavaScript Document

$('h2.blue, .page-img,  .content-right').css('display', 'block');

	var currPage=0;
	
	
	$('.page-title, .page-img,  .content-right').cycle({
		
		fx: 'fade',
		cleartype:  false,
        speed: 200, 
        timeout: 0
	
	}); 
	
	$('#opportunity').click(function() {
		
		$('.page-title, .page-img, .content-right').cycle(0, 'fade')	
		
		$(this).addClass(' active');
		
		$('#leadership').removeClass('active');
        $('#innovation').removeClass(' active');
        
		
    });
	$('#leadership').click(function() {
		
		$('.page-title, .page-img, .content-right').cycle(1, 'fade')	
	
		
		$(this).addClass(' active');
		
		$('#opportunity').removeClass(' active');
        $('#innovation').removeClass(' active');
    });
	$('#innovation').click(function() {
		
		$('.page-title, .page-img, .content-right').cycle(2, 'fade')
			
		$(this).addClass(' active');
		
		$('#opportunity').removeClass(' active');
        $('#leadership').removeClass(' active');
    });
	
	
	
		
		
		var hash = window.location.hash.replace('content-', '');
    
		$(hash).click();
		