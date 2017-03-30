/* TOGGLE FOR MOBILE MENU */
$(document).ready( function(){
	$('.menu_toggle').click(function() {
		$('.menu').slideToggle(0,'linear');
	});
	$('.mobile_menu_icon').click(function() {
		$('.sitenav').slideToggle(0,'linear');
	});
	$('.services_menu_icon').click(function() {
		$('.services_subnav').slideToggle(0,'linear');
	});
	$('.quote_toggle').click(function() {
		$('.quote').slideToggle(0,'linear');
		$('.quote_toggle').slideToggle(0,'linear');
	});
	$('.quote_header').click(function() {
		$('.quote').slideToggle(0,'linear');
		$('.quote_toggle').slideToggle(0,'linear');
	});
/*
	$('.browse_button_more').click(function() {
		$('.browse_more').slideToggle(0,'linear');
		$('.browse_button_more').slideToggle(0,'linear');
		$('.browse_button_less').slideToggle(0,'linear');
	});
	
	$('.browse_button_less').click(function() {
		$('.browse_more').slideToggle(0,'linear');
		$('.browse_button_more').slideToggle(0,'linear');
		$('.browse_button_less').slideToggle(0,'linear');
	});
*/
});



