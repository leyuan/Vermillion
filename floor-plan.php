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
					<li>6th Floor</li>
					<li>5th Floor</li>
					<li>4th Floor</li>
					<li>3rd Floor</li>
					<li>2nd Floor</li>
					<li>Main</li>
				</ul>
			</div>

			<div class="container col-md-10 floor-img-container">
				<div class="floor-main">
					<img src="assets/images/main-floor.png" alt="Main floor Image" class="floor-img" />
					<div class="main-label main-row-one">
						<span class="col-one">
						</span>
						<span class="col-two">
							<p>
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
					<div class="main-label main-row-two">
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
					<div class="main-label main-row-three">
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
		</div>

		<?php
			include_once("footer.php");
		?>
	</body>
  </html>