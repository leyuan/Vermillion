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
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">104</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-three">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">105</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">106</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">107</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
					</div>
					<div class="text-label label-row row-two main-row-two">
						<span class="col-one">
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">101</span>
								</span><br />
								<span class="suite-number-type">SUITE D</span>
								<sqt>841 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">111</span>
								</span><br />
								<span class="suite-number-type">SUITE E</span>
								<sqt>686 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five"><p class="suite-clickable">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">108</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
					</div>
					<div class="text-label label-row row-three main-row-three">
						<span class="col-one">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">103</span>
								</span><br />
								<span class="suite-number-type">SUITE A</span>
								<sqt>1432 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable active">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">102</span>
								</span><br/>
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-three">

						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">110</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">109</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
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
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">205</span>
								</span><br />
								<span class="suite-number-type">SUITE F</span>
								<sqt>1099 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">206</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-three">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">207</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">208</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">209</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
					</div>
					<div class="text-label label-row row-two main-row-two">
						<span class="col-one">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">204</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">201</span>
								</span><br />
								<span class="suite-number-type">SUITE D</span>
								<sqt>841 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">213</span>
								</span><br />
								<span class="suite-number-type">SUITE D1</span>
								<sqt>807 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">210</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
					</div>
					<div class="text-label label-row row-three main-row-three">
						<span class="col-one">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">203</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1096 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">202</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-three">

						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">212</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">211</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
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
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">305</span>
								</span><br />
								<span class="suite-number-type">SUITE F</span>
								<sqt>1099 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">306</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-three">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">307</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">308</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">309</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
					</div>
					<div class="text-label label-row row-two main-row-two">
						<span class="col-one">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">304</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">301</span>
								</span><br />
								<span class="suite-number-type">SUITE D</span>
								<sqt>841 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">313</span>
								</span><br />
								<span class="suite-number-type">SUITE D1</span>
								<sqt>807 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">310</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
					</div>
					<div class="text-label label-row row-three main-row-three">
						<span class="col-one">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">303</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1096 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">302</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-three">

						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">312</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">311</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
					</div>
				</div>
			</div>

			<!-- Fourth Floor -->
			<div class="container col-md-10 floor-img-container fourth-container">
				<div class="floor-seond">
					<img src="assets/images/fourth-floor.png" alt="Third floor Image" class="floor-img" />
					<div class="text-label label-row row-one main-row-one">
						<span class="col-one">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">405</span>
								</span><br />
								<span class="suite-number-type">SUITE F</span>
								<sqt>1099 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">406</span>
								</span><br />
								<span class="suite-number-type">SUITE B2</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-three">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">407</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">408</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">409</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
					</div>
					<div class="text-label label-row row-two main-row-two">
						<span class="col-one">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">404</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">401</span>
								</span><br />
								<span class="suite-number-type">SUITE D</span>
								<sqt>841 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">413</span>
								</span><br />
								<span class="suite-number-type">SUITE D1</span>
								<sqt>807 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">410</span>
								</span><br />
								<span class="suite-number-type">SUITE B</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
					</div>
					<div class="text-label label-row row-three main-row-three">
						<span class="col-one">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">403</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1096 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">402</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-three">

						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">412</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">411</span>
								</span><br />
								<span class="suite-number-type">SUITE C</span>
								<sqt>1097 SQ. FT.</sqt>
							</p>
						</span>
					</div>
				</div>
			</div>

			<!-- Fifth Floor -->
			<div class="container col-md-10 floor-img-container fifth-container">
				<div class="floor-seond">
					<img src="assets/images/fifth-floor.png" alt="Fifth floor Image" class="floor-img" />
					<div class="text-label label-row row-one main-row-one">
						<span class="col-one">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">505</span>
								</span><br />
								<span class="suite-number-type">SUITE F1</span>
								<sqt>1445 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">506</span>
								</span><br />
								<span class="suite-number-type">SUITE B1</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-three">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">507</span>
								</span><br />
								<span class="suite-number-type">SUITE B1</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">508</span>
								</span><br />
								<span class="suite-number-type">SUITE B1</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">509</span>
								</span><br />
								<span class="suite-number-type">SUITE C1</span>
								<sqt>1432 SQ. FT.</sqt>
							</p>
						</span>
					</div>
					<div class="text-label label-row row-two main-row-two">
						<span class="col-one">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">504</span>
								</span><br />
								<span class="suite-number-type">SUITE B1</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">501</span>
								</span><br />
								<span class="suite-number-type">SUITE D</span>
								<sqt>841 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-four">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">513</span>
								</span><br />
								<span class="suite-number-type">SUITE D1</span>
								<sqt>807 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">510</span>
								</span><br />
								<span class="suite-number-type">SUITE B1</span>
								<sqt>970 SQ. FT.</sqt>
							</p>
						</span>
					</div>
					<div class="text-label label-row row-three main-row-three">
						<span class="col-one">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">503</span>
								</span><br />
								<span class="suite-number-type">SUITE C1</span>
								<sqt>1432 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-two">
							<p class="suite-clickable" id="suite501">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">502</span>
								</span><br />
								<span class="suite-number-type">SUITE C1</span>
								<sqt>1432 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-three">

						</span>
						<span class="col-four">
							<p class="suite-clickable" id="suite513">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">512</span>
								</span><br />
								<span class="suite-number-type">SUITE C1</span>
								<sqt>1432 SQ. FT.</sqt>
							</p>
						</span>
						<span class="col-five">
							<p class="suite-clickable">
								<span class="suite-haha">
									<span class="status-available"></span>
									<span class="suite-number">511</span>
								</span><br />
								<span class="suite-number-type">SUITE C1</span>
								<sqt>1432 SQ. FT.</sqt>
							</p>
						</span>
					</div>
				</div>
			</div>

			<div class="container text-right">
				<img src="assets/images/north.png" alt="north" style="width: 60px;"/>
			</div>
		</div>

		<div class="sub-row suite-intro-container" id="suite-section">
			<div class="col-xs-12 col-sm-12 col-md-5 default-font suite-text-container" style="padding-left:30px; padding-right: 30px;">
				<h4 class="suite-type" id="suite-type">SUITE-C</h4>
				<h4 class="suite-size" id="suite-size">1097 sq.ft</h4>
				<!-- <p class="room-availability" id="room-availability">Main  101</p> -->
				<div id="Suite-A" class="suite-type-intro">
					<div class="features-intro-container">
						<p class="room-bath"> 3 bedrooms plus a large den </p>
						<p><b>Features</b></p>
						<p class="main-text">
							<li>Spacious living area with contemporary fireplace</li>
							<li>Insuite laundry room with sink and cabinets</li>
							<li>Luxurious master bedroom with walk through closet and ensuite bathroom</li>
							<li>Contemporary kitchen with deluxe eating bar</li>
						</p>
					</div>

					<div class="units-intro-container">
						<p><b>Units</b></p>
						<p class="floor-recommendation">1th Floor <span class="suite-recommendation-number">103</span></p>
					</div>
				</div>

				<div id="Suite-B" class="suite-type-intro">
					<div class="features-intro-container">
						<p class="room-bath"> 2 bedrooms with 2 full bathrooms </p>
						<p><b>Features</b></p>
						<p class="main-text">
							<li>Spacious living area with contemporary fireplace</li>
							<li>Insuite laundry room with sink and cabinets</li>
							<li>Luxurious master bedroom with walk through closet and ensuite bathroom</li>
							<li>Contemporary kitchen with deluxe eating bar</li>
							<li>2 storey open living area available for 5th floor units</li>
						</p>
					</div>

					<div class="units-intro-container">
						<p><b>Units</b></p>
						<p class="floor-recommendation">4th Floor
							<span class="suite-recommendation-number">404 406 407 408 410</span>
						</p>
						<p class="floor-recommendation">3th Floor
							<span class="suite-recommendation-number">304 306 307 308 310</span>
						</p>
						<p class="floor-recommendation">2th Floor
							<span class="suite-recommendation-number">204 206 207 208 210</span>
						</p>
						<p class="floor-recommendation">1th Floor
							<span class="suite-recommendation-number">104 105 106 108</span>
						</p>
					</div>
				</div>

				<div id="Suite-B1" class="suite-type-intro">
					<div class="features-intro-container">
						<p class="room-bath"> 2 bedrooms with 2 full bathrooms </p>
						<p><b>Features</b></p>
						<p class="main-text">
							<li>Spacious living area with contemporary fireplace</li>
							<li>Insuite laundry room with sink and cabinets</li>
							<li>Luxurious master bedroom with walk through closet and ensuite bathroom</li>
							<li>Contemporary kitchen with deluxe eating bar</li>
							<li>2 storey open living area available for 5th floor units</li>
						</p>
					</div>

					<div class="units-intro-container">
						<p><b>Units</b></p>
						<p class="floor-recommendation">5th Floor
							<span class="suite-recommendation-number">504 506 507 508 510</span>
						</p>
					</div>
				</div>

				<div id="Suite-C" class="suite-type-intro">
					<div class="features-intro-container">
						<p class="room-bath"> 2 bedrooms with 2 full bathrooms </p>
						<p><b>Features</b></p>
						<p class="main-text">
							<li>Corner unit with large window coverage</li>
							<li>Spacious living area with contemporary fireplace</li>
							<li>Insuite laundry room with sink and cabinets</li>
							<li>Luxurious master bedroom with walk through closet and ensuite bathroom</li>
							<li>Contemporary kitchen with deluxe eating bar</li>
						</p>
					</div>

					<div class="units-intro-container">
						<p><b>Units</b></p>
						<p class="floor-recommendation">4th Floor <span class="suite-recommendation-number">402 403 409 411 412</span></p>
						<p class="floor-recommendation">3th Floor <span class="suite-recommendation-number">302 303 309 311 312</span></p>
						<p class="floor-recommendation">2th Floor <span class="suite-recommendation-number">202 203 209 211 212</span></p>
						<p class="floor-recommendation">1th Floor <span class="suite-recommendation-number">102 107 109 110</span></p>
					</div>
				</div>

				<div id="Suite-C1" class="suite-type-intro">
					<div class="features-intro-container">
						<p class="room-bath"> 2 bedrooms + den with 2 full + 1 half bathrooms </p>
						<p><b>Features</b></p>
						<p class="main-text">
							<li>Luxurious loft unit with rooftop deck</li>
							<li>2 storey open living area with contemporary fireplace</li>
							<li>2 bedrooms plus den with 2 full plus 1 half bath</li>
							<li>Laundry with sink and cabinets</li>
							<li>Luxurious master bedroom with walk through closet and 5-piece ensuite bath</li>
							<li>Large Den with walk-in closet</li>
						</p>
					</div>

					<div class="units-intro-container">
						<p><b>Units</b></p>
						<p class="floor-recommendation">5th Floor <span class="suite-recommendation-number">502 503 509 511 512</span></p>
					</div>
				</div>

				<div id="Suite-D" class="suite-type-intro">
					<div class="features-intro-container">
						<p class="room-bath"> 1 bedroom plus den with 2 full bathrooms </p>
						<p><b>Features</b></p>
						<p class="main-text">
							<li>Spacious living area with contemporary fireplace</li>
							<li>Insuite laundry room</li>
							<li>Luxurious bedroom with walk through closet and ensuite bathroom</li>
							<li>Contemporary kitchen with deluxe eating bar</li>
						</p>
					</div>

					<div class="units-intro-container">
						<p><b>Units</b></p>
						<p class="floor-recommendation">5th Floor <span class="suite-recommendation-number">501</span></p>
						<p class="floor-recommendation">4th Floor <span class="suite-recommendation-number">401</span></p>
						<p class="floor-recommendation">3th Floor <span class="suite-recommendation-number">301</span></p>
						<p class="floor-recommendation">2th Floor <span class="suite-recommendation-number">201</span></p>
						<p class="floor-recommendation">1th Floor <span class="suite-recommendation-number">101</span></p>
					</div>
				</div>

				<div id="Suite-D1" class="suite-type-intro">
					<div class="features-intro-container">
						<p class="room-bath"> 1 bedroom plus den with 2 full bathrooms </p>
						<p><b>Features</b></p>
						<p class="main-text">
							<li>Spacious living area with contemporary fireplace</li>
							<li>Insuite laundry room</li>
							<li>Luxurious bedroom with walk through closet and ensuite bath</li>
							<li>Contemporary kitchen with deluxe eating bar</li>
						</p>
					</div>

					<div class="units-intro-container">
						<p><b>Units</b></p>
						<p class="floor-recommendation">5th Floor <span class="suite-recommendation-number">513</span></p>
						<p class="floor-recommendation">4th Floor <span class="suite-recommendation-number">413</span></p>
						<p class="floor-recommendation">3th Floor <span class="suite-recommendation-number">313</span></p>
						<p class="floor-recommendation">2th Floor <span class="suite-recommendation-number">213</span></p>
					</div>
				</div>

				<div id="Suite-E" class="suite-type-intro">
					<div class="features-intro-container">
						<p class="room-bath"> 1 bedroom unit with 1.5 bathrooms </p>
						<p><b>Features</b></p>
						<p class="main-text">
							<li>Spacious living area with contemporary fireplace</li>
							<li>Insuite laundry room</li>
							<li>Luxurious bedroom with walk through closet and ensuite bathroom</li>
							<li>Contemporary kitchen with deluxe eating bar</li>
						</p>
					</div>

					<div class="units-intro-container">
						<p><b>Units</b></p>
						<p class="floor-recommendation">1th Floor <span class="suite-recommendation-number">111</span></p>
					</div>
				</div>

				<div id="Suite-F" class="suite-type-intro">
					<div class="features-intro-container">
						<p class="room-bath"> 2 bedrooms unit with 2 full bathrooms </p>
						<p><b>Features</b></p>
						<p class="main-text">
							<li>Corner unit with large window coverage</li>
							<li>Spacious living area with contemporary fireplace</li>
							<li>Insuite laundry room with sink and cabinets</li>
							<li>Luxurious bedroom with walk through closet and ensuite bathroom</li>
							<li>Contemporary kitchen with deluxe eating bar</li>
						</p>
					</div>

					<div class="units-intro-container">
						<p><b>Units</b></p>
						<p class="floor-recommendation">4th Floor <span class="suite-recommendation-number">405</span></p>
						<p class="floor-recommendation">3rd Floor <span class="suite-recommendation-number">305</span></p>
						<p class="floor-recommendation">2nd Floor <span class="suite-recommendation-number">205</span></p>
					</div>
				</div>

				<div id="Suite-F1" class="suite-type-intro">
					<div class="features-intro-container">
						<p class="room-bath"> 2 bedrooms + den with 2 full + 1 half bathrooms </p>
						<p><b>Features</b></p>
						<p class="main-text">
							<li>Luxurious loft unit with rooftop deck</li>
							<li>2 storey open living area with contemporary fireplace</li>
							<li>2 bedrooms plus den with 2 full plus 1 half bath</li>
							<li>Laundry with sink and cabinets</li>
							<li>Luxurious master bedroom with walk through closet and 5-piece ensuite bath</li>
							<li>Large Den with walk-in closet</li>
						</p>
					</div>

					<div class="units-intro-container">
						<p><b>Units</b></p>
						<p class="floor-recommendation">5th Floor <span class="suite-recommendation-number">505</span></p>
					</div>
				</div>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-7" style="padding-top: 50px;">
				<div>
					<img src="assets/images/suite-C.png" alt="Suite-Image" class="center suite-image" id="suite-image">
				</div>
			</div>
		</div>

		<?php
			include_once("footer.php");
		?>
	</body>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/floor-plan.js"></script>
  </html>
