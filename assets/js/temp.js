$(".suite-clickable").click(function(event) {
	console.log( 'clicked' );

	 // Get the clicked section corresponding suite number
	 console.log( this );
	 console.log( this.childNodes );
	 for( var i = 0; i < this.childNodes.length; i++ ) {
	 	// console.log( this.childNodes[i] );
	 	if( "suite-number" == this.childNodes[i].className ) {
	 		console.log( this.childNodes[i].innerText );
	 		suite = this.childNodes[i].innerText;
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
	 		// Try to get the details for clicked suite
	 		$.each(suiteInfo, function(f_index, f_value) {
	 			console.log(f_index);
	 			// first match the floor
	 			if( f_index.toLowerCase() == floor.toLowerCase() ){	
	 				$.each(f_value, function(s_index, s_value) {
	 					// then match the suite
	 					if( s_index == suite ) {
	 						console.log(s_value);
	 						update_suite_intro(floor, suite, s_value);
	 					}
	 				});
	 			} else {
	 				console.log('floor not match');
	 				console.log('floor:'+floor);
	 			}
	 		});

	 	}else {
	 		// TODO - Handle some browser issue??
	 	}
	 }

 	// Scroll to suite-intro section
	$('html, body').animate({
		scrollTop: $("#suite-section").offset().top
	}, 1000);
});

var update_suite_intro = function(floor, suite, details){
	// alert('update');
	$("#suite-type").html(details[0]);
	room_avai_text = floor+"  "+suite+" : "+"Availabele";
	$("#room-availability").html(room_avai_text);
}


