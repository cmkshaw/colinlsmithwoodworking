jQuery(function($){



	$(document).ready(function(){	
		$('#masthead').data('size','big');
	}); // end doc ready

	$(window).scroll(function(){
	    if($(document).scrollTop() > 0)
	    {
	        if($('#masthead').data('size') == 'big')
	        {
	            $('#masthead').data('size','small');
	            // $('#masthead').stop().animate({
	            //     height:'150px'
	            // },600);
	            $('#masthead').css("opacity", "0.9");
	        }
	    }
	    else
	    {
	        if($('#masthead').data('size') == 'small')
	        {
	            $('#masthead').data('size','big');
	            // $('#masthead').stop().animate({
	            //     height:'180px'
	            // },600);
	            $('#masthead').css("opacity", "1");

	        }  
	    }
	});
}); // end function