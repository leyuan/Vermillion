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
							<p class="suite-clickable" date-suite="104">
								<span class="status-available"></span>  104 <br />
								SUITE B2 <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							<p>
								<span class="status-available"></span>  105 <br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p>
								<span class="status-available"></span>  106 <br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p>
								<span class="status-available"></span>  108 <br />
								SUITE C4 <br />
								1085 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-two main-row-two">
						<span class="col-one">
						</span>
						<span class="col-two">
							<p>
								<span class="status-available"></span>  103 <br />
								SUITE B2 <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p>
								<span class="status-available"></span>  107 <br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p>
								<span class="status-available"></span>  109 <br />
								SUITE C4 <br />
								1085 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-three main-row-three">
						<span class="col-one">
							<p>
								<span class="status-available"></span>  102 <br />
								SUITE B2 <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p>
								<span class="status-available"></span>  101 <br />
								SUITE B2 <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							
						</span>
						<span class="col-four">
							<p>
								<span class="status-available"></span>  111 <br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p>
								<span class="status-available"></span>  110 <br />
								SUITE C4 <br />
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
							<p>
								<span class="status-available"></span>  205 <br />
								SUITE C1 <br />
								1077 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p>
								<span class="status-available"></span>  206 <br />
								SUITE B2 <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							<p>
								<span class="status-available"></span>  207 <br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p>
								<span class="status-available"></span>  208 <br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p>
								<span class="status-available"></span>  209 <br />
								SUITE C4 <br />
								1085 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-two main-row-two">
						<span class="col-one">
							<p>
								<span class="status-available"></span>  204 <br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p>
								<span class="status-available"></span>  203 <br />
								SUITE D <br />
								841 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p>
								<span class="status-available"></span>  211 <br />
								SUITE B <br />
								807 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p>
								<span class="status-available"></span>  210 <br />
								SUITE C4 <br />
								970 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-three main-row-three">
						<span class="col-one">
							<p>
								<span class="status-available"></span>  202 <br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p>
								<span class="status-available"></span>  201 <br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							
						</span>
						<span class="col-four">
							<p>
								<span class="status-available"></span>  213 <br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p>
								<span class="status-available"></span>  212 <br />
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
							<p>
								<span class="status-available"></span>  305 <br />
								SUITE C1 <br />
								1077 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p>
								<span class="status-available"></span>  306 <br />
								SUITE B2 <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							<p>
								<span class="status-available"></span>  307 <br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p>
								<span class="status-available"></span>  308 <br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p>
								<span class="status-available"></span>  309 <br />
								SUITE C4 <br />
								1085 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-two main-row-two">
						<span class="col-one">
							<p>
								<span class="status-available"></span>  304 <br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p>
								<span class="status-available"></span>  303 <br />
								SUITE D <br />
								841 SQ. FT.
							</p>
						</span>
						<span class="col-four">
							<p>
								<span class="status-available"></span>  311 <br />
								SUITE D1 <br />
								807 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p>
								<span class="status-available"></span>  310 <br />
								SUITE B <br />
								970 SQ. FT.
							</p>
						</span>
					</div>
					<div class="text-label label-row row-three main-row-three">
						<span class="col-one">
							<p>
								<span class="status-available"></span>  302 <br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-two">
							<p>
								<span class="status-available"></span>  303 <br />
								SUITE D <br />
								841 SQ. FT.
							</p>
						</span>
						<span class="col-three">
							
						</span>
						<span class="col-four">
							<p>
								<span class="status-available"></span>  313 <br />
								SUITE C <br />
								1085 SQ. FT.
							</p>
						</span>
						<span class="col-five">
							<p>
								<span class="status-available"></span>  310 <br />
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
				<h4 class="suite-type">SUITE B</h4>
				<p class="room-availability">Main  109 : Available</p>
				<p class="room-bath"> 2 Bedrooms | 2 Baths </p>
				<p class="main-text">
				749(suite) + 303(balcony) = 1052 FT&sup2; total | The Passionate is a two bedroom
				suite with a modern sliding privatcy glass wall in both bedrooms which open up the space
				during the day. An expandable island table transfroms the spcae for easy entertaining.
				The large balcony brings entertaining outdoors too! Choose from a variety of module and a 
				la carte options to transform this space to suit your lifestyle.
				</p>
				<h4 class="suite-recommendation">Recommendation</h4>
				<p class="floor-recommendation">6th Floor <span class="suite-number">601 605 611</span></p>
				<p class="floor-recommendation">5th Floor <span class="suite-number"></span></p>
				<p class="floor-recommendation">4th Floor <span class="suite-number">401 405 410 411</span></p>
				<p class="floor-recommendation">3th Floor <span class="suite-number">307</span></p>
				<p class="floor-recommendation">2th Floor <span class="suite-number">201 209</span></p>
				<p class="floor-recommendation">1th Floor <span class="suite-number">102 109 110</span></p>
			</div>
			<div class="col-md-7">
				<img src="assets/images/suite-A.png" alt="Suite-A-Image" class="center suite-image">
			</div>
		</div>

		<?php
			include_once("footer.php");
		?>
	</body>
	<script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript">
		var selector_class = document.getElementsByClassName("floor-selector");

		for ( var i = 0; i < selector_class.length; i ++ ) {
			selector_class[i].addEventListener('click', function(){
				// console.log( this.className );
				if( !this.className.match('active') ) {
					// console.log( 'not active' );

					// de-activate the current one
					for ( var t = 0; t < selector_class.length; t++ ) {
						if( selector_class[t].className.match('active') ) {
							selector_class[t].classList.remove('active');
						}
					}

					// hide the current floor div
					var f = document.getElementsByClassName('floor-img-container');
					// console.log( f );
					for ( var d = 0; d < f.length; d++ ) {
						if( f[d].className.match('active') ) {
							f[d].classList.remove("active");
						}
					} 

					// active the current one
					this.classList.add('active');

					// show the corresponding floor div
					var corres_floor = this.getAttribute('data-floor');
					for ( var d = 0; d < f.length; d++ ) {
						if( f[d].className.match(corres_floor) ) {
							f[d].classList.add("active");
						}
					} 
				}
			}, false);
		}
	</script>
	<script>
		var suiteInfo = {
			main: {
				101: ['C', 1065],
				102: ['A', 1420],
				103: ['D', 841],
				104: ['B2', 970],
				105: ['B', 970],
				106: ['B', 970],
				107: ['E', 686],
				108: ['C4', 1065],
				109: ['B', 970],
				110: ['C', 1065],
				111: ['C', 1065]
			}
		};
	</script>
	<script src="assets/js/temp.js"></script>
  </html>