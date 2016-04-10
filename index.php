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
	<link rel="stylesheet" type="text/css" href="assets/css/pgwslideshow.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/pgwslideshow.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var config = {
				maxHeight: 700
			};
		    var pgwSlideshow = $('.pgwSlideshow').pgwSlideshow(config);
		    // pgwSlideshow.maxHeight(450);
		});
	</script>
  </head>

  <body>

	<?php
		include_once("navbar.php");
	?>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron home-jumbotron">
		<div class="container center text-center">
			<div class="head center">
				<h2>Vermillion</h2>
				<!-- <h4 class="p-color">Feel comfortable with your choice in condos</h4> -->
			</div>
		</div>
	</div>

	<div id="home-row-location">
		<h3>
			10611 116 STREET NW, EDMONTON
		</h3>
	</div>

	<div class="home-row" id="home-row-three">
		<div class="col-md-12 container center text-center why-vermillion">
		 	<div class="text-left body home-intro">
		 		<h2 class="default-font font-light"> IDEAL FOR ANYONE </h2>
   	 	</div>

 	 		<div class="head col-md-12 text-left">
 			  <h4 class="default-font font-light">
 			    The steel and concrete based structure system of Vermillion ensures you to enjoy the best living experience and the most reliable protection from fire and sound.
 			  	The exterior  exclusive  designed  by  our  architect  provide  you  the  most  contemporary appearance.
 			  </h4>
 	 		</div>

   	 		<div class="col-md-12">
			   	 	<div class="feature-tabs-container">
						<main>

						  <input id="tab1" type="radio" name="tabs" checked class="tabs">
						  <label for="tab1">Highlights</label>

						  <input id="tab2" type="radio" name="tabs" class="tabs">
						  <label for="tab2">Residential</label>

						  <input id="tab3" type="radio" name="tabs" class="tabs">
						  <label for="tab3">Kitchen</label>

						  <input id="tab4" type="radio" name="tabs" class="tabs">
						  <label for="tab4">Bathroom</label>

						  <input id="tab5" type="radio" name="tabs" class="tabs">
						  <label for="tab5">Utilities</label>

  						  <input id="tab6" type="radio" name="tabs" class="tabs">
						  <label for="tab6">Security</label>

						  <section id="content1" class="tab-content">
							<ul>
							    <li>Contemporary architecture design by Brian Allsopp </li>
							    <li>5 stories condominium residences</li>
							    <li>One bedroom, two bedroom, and three bedroom floor plans</li>
							    <li>Landscaping</li>
							    <li>Concrete and steel construction</li>
							    <li>Brick and culture stone exterior </li>
							    <li>Protected and Insured by Blanket Home Warranty</li>
							</ul>
						  </section>

						  <section id="content2" class="tab-content">
							<ul>
								<li>Your choice of two distinctive color with contemporary interior design </li>
								<li>Over-height ceiling of 10’ for all units in most area </li>
								<li>Engineering hardwood floor in all living areas, kitchen, and bedroom </li>
								<li>High quality ceramic tile floors in bathrooms and laundry room</li>
								<li>Contemporary brushed nickel finished hardware throughout</li>
								<li>Samsung stackable front load washer/dryer</li>
								<li>Contemporary wall-mount fireplaces with LED backlighting</li>
							</ul>
						  </section>

						  <section id="content3" class="tab-content">
							<ul>
								<li>Exclusive Samsung appliance package</li>
								<li>Contemporary kitchen cabinet with soft close feature</li>
								<li>Quartz countertops with stainless steel sinks with extended eating bar</li>
								<li>Brush nickel single lever faucet with pull-out spray</li>
								<li>Incandescent lighting package</li>
							</ul>
						  </section>

						  <section id="content4" class="tab-content">
							<ul>
								<li>Marble countertops in bathrooms</li>
								<li>Ceramic tile shower surrounds</li>
								<li>Contemporary cabinetry with brushed nickel door hardware</li>
								<li>Contemporary brushed nickel shower hardware</li>
								<li>Brushed nickel faucets and chrome bath accessories</li>
							</ul>
						  </section>

						  <section id="content5" class="tab-content">
							<ul>
								<li>High performance Low E windows </li>
								<li>Lobby (Material, Design)</li>
								<li>Build-in Gym and meeting area</li>
								<li>Independent air heating and air conditioning in every unit </li>
								<li>88 heated underground residential parking stalls and 11 surface visitor parking stalls</li>
							</ul>
					      </section>

  						  <section id="content6" class="tab-content">
							<ul>
								<li>Marble countertops in bathrooms</li>
								<li>Ceramic tile shower surrounds</li>
								<li>Contemporary cabinetry with brushed nickel door hardware</li>
								<li>Contemporary brushed nickel shower hardware</li>
								<li>Brushed nickel faucets and chrome bath accessories</li>
							</ul>
					      </section>

						</main>
			   	 	</div>
   	 		</div>

   	 		<div class="col-md-12">
   	 			<ul class="pgwSlideshow">
   	 			    <li><img src="assets/images/slider/thumb1.jpg" alt="" data-large-src="assets/images/slider/file1.jpg"></li>
   	 			    <li><img src="assets/images/slider/thumb2.jpg" alt="" data-large-src="assets/images/slider/file2.jpg"></li>
   	 			    <li><img src="assets/images/slider/thumb3.jpg" alt="" data-large-src="assets/images/slider/file3.jpg"></li>
   	 			    <li><img src="assets/images/slider/thumb4.jpg" alt="" data-large-src="assets/images/slider/file4.jpg"></li>
   	 			    <li><img src="assets/images/slider/thumb5.jpg" alt="" data-large-src="assets/images/slider/file5.jpg"></li>
   	 			    <li><img src="assets/images/slider/thumb6.jpg" alt="" data-large-src="assets/images/slider/file6.jpg"></li>
   	 			    <li><img src="assets/images/slider/thumb7.jpg" alt="" data-large-src="assets/images/slider/file7.jpg"></li>
   	 			    <li><img src="assets/images/slider/thumb8.jpg" alt="" data-large-src="assets/images/slider/file8.jpg"></li>
   	 			    <li><img src="assets/images/slider/thumb9.jpg" alt="" data-large-src="assets/images/slider/file9.jpg"></li>
   	 			    <li><img src="assets/images/slider/thumb10.jpg" alt="" data-large-src="assets/images/slider/file10.jpg"></li>
   	 			    <li><img src="assets/images/slider/thumb11.jpg" alt="" data-large-src="assets/images/slider/file11.jpg"></li>
   	 			    <li><img src="assets/images/slider/thumb12.jpg" alt="" data-large-src="assets/images/slider/file12.jpg"></li>
   	 			</ul>
   	 		</div>
		</div>
	</div>

	<?php
		include_once("footer.php");
	?>
  </body>
</html>
