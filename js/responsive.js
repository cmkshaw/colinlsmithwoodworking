jQuery(function($){
	$(document).ready(function(){
		
		$(".fitvids").fitVids();
		
		$("#menu-toggle").click(function(){
			$('#site-navigation').slideToggle();
		});
		
	});
});