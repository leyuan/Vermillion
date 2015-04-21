$(".suite-clickable").click(function(event) {
	console.log( 'clicked' );
	// Scroll to suite-intro section
	 $('html, body').animate({
		scrollTop: $("#suite-section").offset().top
	}, 1000);
});