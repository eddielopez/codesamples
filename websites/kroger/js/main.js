/*
*
* Framework: Jquery
* Notes: Custom jQuery for Kroger
* Author : Eddie Lopez
*   1. Tooltip
*   2. Homepage animation
* */
$(document).ready(function() {

	$(document).on("click", "a.tooltip", function(){
		
		var current_story = $(this).attr('rel');
		var current_story_id = $('.story').attr('id');
		var new_story_id = ('sustainability-story-' + current_story);
		
		$('.story').attr('id', new_story_id)
		

		

		$('<span class="story-tooltip"></span>')
		.css('z-index', '100')
		.fadeIn('fast')
		.appendTo('.story')
	   
	    
	    
	    /*pull and fill in content from JSON Object*/
		$('.story h4').html(stories_data.tooltips[current_story].Title); 
		$('.story p').html(stories_data.tooltips[current_story].Content);
		$('.story-logo').css("background", "url("+ stories_data.tooltips[current_story].LogoURL + ")"); 
		$('.story-infograph').css("background", "url("+ stories_data.tooltips[current_story].InfoGraphURL + ")"); 
		
		$('.story').fadeIn('fast', function(){

            $('.left-col').css('opacity', '0.1');
        });
		
		close_story();
		

	});// end of tooltip


    $(window).load(function(){


            $('.fade-1').fadeIn(700);
            $('.fade').each(function(){
                $(this).delay(700*Math.random()).fadeIn(700)*Math.random();
                $('.fade-2').delay(1000).fadeIn(900);
                $('.fade-3').delay(1100).fadeIn(900);
                $('.fade-4').delay(1200).fadeIn(900);
            });

    })//end of homepage animation

    //make div clickable
    $(".sustainability-story").click(function(){
        window.location=$(this).find("a").attr("href");
        return false;
    });


});

function close_story(){


    $(".close, body").click(function(){
        $(".story").fadeOut('fast', function(){$('.left-col').css('opacity', '1')});
    });

}
