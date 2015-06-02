<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

		<title>Welcome to Vermillion Condo</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

		<!-- Custom Css -->
		<link rel="stylesheet" type="text/css" href="assets/css/vermillion.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<?php
			include_once("navbar.php");
		?>

		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="center text-center sub-row fp-headbanner">
			<div class="head center white-font blue-overlay">
				<h2>Floor Plans</h2>
				<p>The best options for every budget</p>
			</div>
		</div>

		<div class="sub-row fp-fp-container">
			<div class="col-md-2 floor-selector-container">
				<ul>
					<li>
						<a class="floor-selector" data-floor="sixth-container"> 6th Floor </a>
					</li>
					<li>
						<a class="floor-selector" data-floor="fifth-container"> 5th Floor </a>
					</li>
					<li>
						<a class="floor-selector" data-floor="fourth-container"> 4th Floor </a>
					</li>
					<li>
						<a class="floor-selector" data-floor="third-container"> 3rd Floor </a>
					</li>
					<li>
						<a class="floor-selector" data-floor="second-container"> 2nd Floor </a>
					</li>
					<li>
						<a class="floor-selector active" data-floor="main-container"> Main </a>
					</li>
				</ul>
			</div>
			<!-- Main-floor -->
			<div class="container col-md-10 floor-img-container main-container active">
				<div class="floor-main">
					<img src="assets/images/main-floor.png" alt="Main floor Image" class="floor-img" />
					<div class="text-label label-row row-one main-row-one">
						<span class="col-one">
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">104</span>
								</span><br />
								SUITE B2 <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span> 
									<span class="suite-number">105</span>
								</span><br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span> 
									<span class="suite-number">106</span>
								</span><br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span> 
									<span class="suite-number">108</span>
								</span><br />
								SUITE C4 <br />
								1085 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-two main-row-two">
						<span class="col-one">
						</span>
						<span class="col-two">
							<p class="suite-clickable"> 
								<span>
									<span class="status-available"></span>
									<span class="suite-number">103</span>
								</span><br />
								SUITE D <br />
								841 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">107</span>
								</span><br />
								SUITE E <br />
								686 SQ. FT.
							</p>
						</span>
						<span class="col-five"><p class="suite-clickable">
							<p class="suite-clickable"> 
								<span>
									<span class="status-available"></span>
									<span class="suite-number">109</span>
								</span><br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-three main-row-three">
						<span class="col-one">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">102</span>
								</span><br />
								SUITE A <br />
								1420 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable active">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">101</span>
								</span><br/>
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">111</span>
								</span><br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span>	
									<span class="status-available"></span>
									<span class="suite-number">110</span>
								</span><br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
					</div>
				</div>
			</div>

			<!-- Second Floor -->
			<div class="container col-md-10 floor-img-container second-container">
				<div class="floor-seond">
					<img src="assets/images/second-floor.png" alt="Second floor Image" class="floor-img" />
					<div class="text-label label-row row-one main-row-one">
						<span class="col-one">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">205</span>
								</span><br />
								SUITE C1 <br />
								1077 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">206</span>
								</span><br />
								SUITE B2 <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">207</span>
								</span><br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">208</span>
								</span><br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">209</span>
								</span><br />
								SUITE C4 <br />
								1085 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-two main-row-two">
						<span class="col-one">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">204</span>
								</span><br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">203</span>
								</span><br />
								SUITE D <br />
								841 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">211</span>
								</span><br />
								SUITE D1 <br />
								807 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">210</span>
								</span><br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-three main-row-three">
						<span class="col-one">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">202</span>
								</span><br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">201</span>
								</span><br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">213</span>
								</span><br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">212</span>
								</span><br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
					</div>
				</div>
			</div>

			<!-- Third Floor -->
			<div class="container col-md-10 floor-img-container third-container">
				<div class="floor-seond">
					<img src="assets/images/third-floor.png" alt="Third floor Image" class="floor-img" />
					<div class="text-label label-row row-one main-row-one">
						<span class="col-one">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">305</span>
								</span><br />
								SUITE C1 <br />
								1077 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">306</span>
								</span><br />
								SUITE B2 <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">307</span>
								</span><br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">308</span>
								</span><br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">309</span>
								</span><br />
								SUITE C4 <br />
								1085 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-two main-row-two">
						<span class="col-one">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">304</span>
								</span><br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">303</span>
								</span><br />
								SUITE D <br />
								841 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">311</span>
								</span><br />
								SUITE D1 <br />
								807 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">310</span>
								</span><br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-three main-row-three">
						<span class="col-one">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">302</span>
								</span><br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">301</span>
								</span><br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">313</span>
								</span><br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span>
									<span class="status-available"></span>
									<span class="suite-number">312</span>
								</span><br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
					</div>
				</div>
			</div>			
		</div>

		<div class="sub-row suite-intro-container" id="suite-section">
			<div class="col-md-5 default-font suite-text-container">
				<h4 class="suite-type" id="suite-type">SUITE-C</h4>
				<p class="room-availability" id="room-availability">Main  101 : Available</p>
				<p class="room-bath"> 2 Bedrooms | 2 Baths </p>
				<p class="main-text">
				749(suite) + 303(balcony) = 1052 FT&sup2; total | The Passionate is a two bedroom
				suite with a modern sliding privatcy glass wall in both bedrooms which open up the space
				during the day. An expandable island table transfroms the spcae for easy entertaining.
				The large balcony brings entertaining outdoors too! Choose from a variety of module and a 
				la carte options to transform this space to suit your lifestyle.
				</p>
				<h4 class="suite-recommendation">Recommendation</h4>
				<p class="floor-recommendation">6th Floor <span class="suite-recommendation-number">601 605 611</span></p>
				<p class="floor-recommendation">5th Floor <span class="suite-recommendation-number"></span></p>
				<p class="floor-recommendation">4th Floor <span class="suite-recommendation-number">401 405 410 411</span></p>
				<p class="floor-recommendation">3th Floor <span class="suite-recommendation-number">307</span></p>
				<p class="floor-recommendation">2th Floor <span class="suite-recommendation-number">201 209</span></p>
				<p class="floor-recommendation">1th Floor <span class="suite-recommendation-number">102 109 110</span></p>
			</div>
			<div class="col-md-7">
				<img src="assets/images/suite-A.png" alt="Suite-A-Image" class="center suite-image" id="suite-image">
			</div>
		</div>

		<?php
			include_once("footer.php");
		?>
	</body>
	<script src="assets/js/jquery.min.js"></script>
	<script>
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
					
					console.log( target_floor );
					$('.'+target_floor).fadeIn('slow', function() {
						$('.'+target_floor).addClass('active');
					});
				});
			}
		});
	</script>
	<script>
		//floorInfo Signature
		//['Suite name', (BOOL)'Available-status']

		var floorInfo = {
			"Main": {
				101: ['Suite C', 1065],
				102: ['Suite A', 1420],
				103: ['Suite D', 841],
				104: ['Suite B2', 970],
				105: ['Suite B', 970],
				106: ['Suite B', 970],
				107: ['Suite E', 686],
				108: ['Suite C4', 1065],
				109: ['Suite B', 970],
				110: ['Suite C', 1065],
				111: ['Suite C', 1065]
			},
			"2nd": {
				201: ['Suite C'],
				202: ['Suite C'],
				203: ['Suite D'],
				204: ['Suite B'],
				205: ['Suite C1'],
				206: ['Suite B2'],
				207: ['Suite B'],
				208: ['Suite B'],
				209: ['Suite C4'],
				210: ['Suite B'],
				211: ['Suite D1'],
				212: ['Suite C'],
				213: ['Suite C']
			},
			"3rd": {
				301: ['Suite C'],
				302: ['Suite C'],
				303: ['Suite D'],
				304: ['Suite B'],
				305: ['Suite C1'],
				306: ['Suite B2'],
				307: ['Suite B'],
				308: ['Suite B'],
				309: ['Suite C4'],
				310: ['Suite B'],
				311: ['Suite D1'],
				312: ['Suite C'],
				313: ['Suite C']
			}
		};

		//suiteInfo Signature
		//['img-name','suite-size', 'suite-image', bedroom-bath-room']
		var suiteInfo = {
			'Suite A': ['Suite-A', 1420, 'assets/images/suite-A.png'],
			'Suite B': ['Suite-B', 970, 'assets/images/suite-B.png'],
			'Suite B2': ['Suite-B2', 970, 'assets/images/suite-B.png'],
			'Suite C': ['Suite-C', 1065, 'assets/images/suite-c.png'],
			'Suite C1': ['Suite-C1', 1065, 'assets/images/suite-C.png'],
			'Suite C4': ['Suite-C4', 1065, 'assets/images/suite-C.png'],
			'Suite D': ['Suite-D', 841, 'assets/images/suite-D.png'],
			'Suite E': ['Suite-E', 686, 'assets/images/suite-E.png']
		}
	</script>
	<script src="assets/js/temp.js"></script>
  </html>