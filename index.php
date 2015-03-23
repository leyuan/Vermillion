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
	<div class="jumbotron home-jumbotron">
		<div class="container center text-center">
			<div class="head center">
				<h2>Welcome Home</h2>
				<p>Feel comfortable with your choice in condos</p>
			</div>

			<div class="body">
				<form action="#" method="post">
					<input type="text" name="email" id="home-email" value="" tabindex="1" placeholder="Email Address" /><input type="submit" id="home-submit" value="Register &raquo;" />
				</form>
			</div>
		</div>
	</div>

	<div class="home-row">
		<div class="container center text-center why-vermillion">
			<div class="text-left head">
				<h2 class="p-color font-light">Why Choose Vermillion?</h2>
			</div>
		 	
		 	<div class="text-left body">
			 	<h4 class="default-font font-light">
				  	Vermillion Condos is ideal for anyone looking for a quality home within minutes of the Edmonton downtown core.
				  	With a combination of ...
				  	<span class="r-color">
				  	Show the key advantages of Vermillion, what would the sales pitch to a new customer sound like? Hook customers attention, and make them want to keep reading.
				  	</span>
		   	 	</h4>
	   	 	</div>

	   	 	<div class="foot">
	   	 		<button class="p-btn right">View Floor Plans &raquo; </button>
	   	 	</div>
		</div>
	</div>

	<div class="home-row">
		<div class="container center text-center v-advantage">
			<div class="head">
				<div class="col-md-4">
				  <h2 class="p-color font-light">Customizable</h2>
				  <p class="default-font font-light">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				  <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
				</div>

				<div class="col-md-4">
				  <h2 class="p-color font-light">Affordable</h2>
				  <p class="default-font font-light">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				  <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
			   </div>

				<div class="col-md-4">
				  <h2 class="p-color font-light">Elegant</h2>
				  <p class="default-font font-light">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				  <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
				</div>
			</div>
		</div>
	</div>

	<div class="home-row">
		<div class="banner-link">
			
		</div>
	</div>

	<div class="home-row">
		<div class="container center text-center home-contact">
			<div class="head">
				<h2 class="p-color font-light">Contact Us!</h2>
			</div>
			<div class="body">
				<h4 class="default-font font-light">Visit us at 1234 567 Street, NW, Edmonton, Alberta </br>
				or Call us at <span class="p-color font-underline">(+1)780-123-4567</span></h4>
			</div>
			<div class="foot">
				<button class="p-btn center">&laquo;Contact Us &raquo; </button>
			</div>
		</div>
	</div>
	<?php
		include_once("footer.php");
	?>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
