$(".suite-clickable").click(function(event) {
	console.log( 'clicked' );

	// de-active current label effect
	$(".suite-clickable.active").removeClass('active');

	$(this).addClass('active');

	suite = $(".suite-clickable.active>span>.suite-number")[0].innerText;
	// alert(suite);
	floor = suite.charAt(0);

	switch(floor){
		case '1':
			floor = "Main";
			break;
		case '2':
			floor = "2nd";
			break;
		case '3':
			floor = "3rd";
			break;
		case '4':
			floor = "4th";
			break;
		case '5':
			floor = "5th";
			break;
		case '6':
			floor = "6th";
			break;
		default:
			floor = "hmm...";
			break;
	}
	console.log( floor );
	// Try to get the details for clicked suite
	$.each(floorInfo, function(f_index, f_value) {
		console.log(f_index);
		// first match the floor
		if( f_index.toLowerCase() == floor.toLowerCase() ){	
			$.each(f_value, function(s_index, s_value) {
				// then match the suite
				if( s_index == suite ) {
					console.log(s_value);
					update_suite_intro(floor, suite, s_value[0]);
				}
			});
		} 
		// else {
		// 	console.log('floor not match');
		// 	console.log('floor:'+floor);
		// }
	});

 	// Scroll to suite-intro section
	$('html, body').animate({
		scrollTop: $("#suite-section").offset().top
	}, 1000);
});

var update_suite_intro = function(floor, suite_number, suite){
	console.log( "suite -> "+suite );
	$.each(suiteInfo, function(suite_name, suite_details_arr) {
		if(suite == suite_name) {
			$("#suite-type").html(suite_details_arr[0]);
			room_avai_text = "Suite  "+suite_number+" : "+"Availabele";
			$("#room-availability").html(room_avai_text);
			$("#suite-image").attr('src', suite_details_arr[2]);
			if(suite_details_arr[0] == "Suite-C2"){
				$("#loft").show('slow', function() {
					
				});
			}else {
				$("#loft").hide();
			}
		}
	});

}


