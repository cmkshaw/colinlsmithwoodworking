jQuery(function($){
	$(document).ready(function(){
		
		$(".fitvids").fitVids();
		
		$("#menu-toggle").click(function(e){
			e.preventDefault();
			$('#site-navigation').slideToggle(500);
		});
		
	});
});