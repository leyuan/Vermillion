$(".floor-selector").click(function(event) {
	if( !this.className.match('active') ) {
		// not match, switch image
		$('.floor-selector.active').removeClass('active');
		$(this).addClass('active');

		target_floor = this.getAttribute('data-floor');

		// current image fade out
		$('.floor-img-container.active').fadeOut('slow', function() {
			$('.floor-img-container.active').removeClass('active');
			// selected image fade in

			// console.log( target_floor );
			$('.'+target_floor).fadeIn('slow', function() {
				$('.'+target_floor).addClass('active');
			});
		});
	}
});

var floorInfo = {
	"Main": {
		101: ['Suite D'],
		102: ['Suite C'],
		103: ['Suite A'],
		104: ['Suite B'],
		105: ['Suite B'],
		106: ['Suite B'],
		107: ['Suite C'],
		108: ['Suite B'],
		109: ['Suite C'],
		110: ['Suite C'],
		111: ['Suite E']
	},
	"2nd": {
		201: ['Suite D'],
		202: ['Suite C'],
		203: ['Suite C'],
		204: ['Suite B'],
		205: ['Suite F'],
		206: ['Suite B'],
		207: ['Suite B'],
		208: ['Suite B'],
		209: ['Suite C'],
		210: ['Suite B'],
		211: ['Suite C'],
		212: ['Suite C'],
		213: ['Suite D1']
	},
	"3rd": {
		301: ['Suite D'],
		302: ['Suite C'],
		303: ['Suite C'],
		304: ['Suite B'],
		305: ['Suite F'],
		306: ['Suite B'],
		307: ['Suite B'],
		308: ['Suite B'],
		309: ['Suite C'],
		310: ['Suite B'],
		311: ['Suite C'],
		312: ['Suite C'],
		313: ['Suite D1']
	},
	"4th": {
		401: ['Suite D'],
		402: ['Suite C'],
		403: ['Suite C'],
		404: ['Suite B'],
		405: ['Suite F'],
		406: ['Suite B'],
		407: ['Suite B'],
		408: ['Suite B'],
		409: ['Suite C'],
		410: ['Suite B'],
		411: ['Suite C'],
		412: ['Suite C'],
		413: ['Suite D1']
	},
	"5th": {
		501: ['Suite D'],
		502: ['Suite C1'],
		503: ['Suite C1'],
		504: ['Suite B1'],
		505: ['Suite F1'],
		506: ['Suite B1'],
		507: ['Suite B1'],
		508: ['Suite B1'],
		509: ['Suite C1'],
		510: ['Suite B1'],
		511: ['Suite C1'],
		512: ['Suite C1'],
		513: ['Suite D1']
	}
};

var suiteInfo = {
	'Suite A': ['Suite-A', '1432 sq.ft', 'assets/images/suite-A.png'],
	'Suite B': ['Suite-B', '970 sq.ft', 'assets/images/suite-B.png'],
	'Suite B1': ['Suite-B1', '970 sq.ft', 'assets/images/suite-B.png'],
	'Suite C': ['Suite-C', '1097 sq.ft', 'assets/images/suite-C.png'],
	'Suite C1': ['Suite-C1', '1097+335 sq.ft', 'assets/images/suite-C1.png'],
	'Suite D': ['Suite-D', '841 sq.ft', 'assets/images/suite-D.png'],
	'Suite D1': ['Suite-D1', '807 sq.ft', 'assets/images/suite-D1.png'],
	'Suite E': ['Suite-E', '686 sq.ft', 'assets/images/suite-E.png'],
	'Suite F' : ['Suite-F', '1099 sq.ft', 'assets/images/suite-F.png'],
	'Suite F1' : ['Suite-F1', '1099+346 sq.ft', 'assets/images/suite-F1.png'],
};

$(".suite-type-intro").hide();
$("#Suite-C").show();
$(".suite-clickable").click(function(event) {

	$(".suite-clickable.active .suite-indicator")[0].classList = 'suite-indicator';
	$(".suite-clickable.active").removeClass('active');

	$(this).addClass('active');
	var status = getSuiteStatus(this);
	$(this.children[0]).addClass(status+'-bg');

	$('#suite-type')[0].classList = 'suite-type';
	$('#suite-type').addClass(status+'-bg');

	suite = $(".suite-clickable.active .suite-number")[0].innerText;
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
		default:
			floor = "hmm...";
			break;
	}

	// Try to get the details for clicked suite
	$.each(floorInfo, function(f_index, f_value) {
		if( f_index.toLowerCase() == floor.toLowerCase() ){
			$.each(f_value, function(s_index, s_value) {
				if( s_index == suite ) {
					update_suite_intro(floor, suite, s_value[0]);
				}
			});
		}
	});

 	// Scroll to suite-intro section
	$('html, body').animate({
		scrollTop: $("#suite-section").offset().top
	}, 1000);
});

var update_suite_intro = function (floor, suite_number, suite) {
	// console.log( "suite -> "+suite );
	$.each(suiteInfo, function (suite_name, suite_details_arr) {
		if(suite == suite_name) {
			var suiteType = suite_details_arr[0];
			var suiteSize = suite_details_arr[1];
			$("#suite-type").html(suiteType);
			$("#suite-size").html(suiteSize);
			$(".suite-type-intro").hide();
			$("#"+suiteType).show();
			// console.log(suite_details_arr);
			// room_avai_text = "Suite  "+suite_number+" : "+"Availabele";
			room_avai_text = "Suite  "+suite_number;
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

function getSuiteStatus(suite) {
	var statusClass = suite.children[0].children[0].classList[0];
	return statusClass.replace('status-', '');
}
