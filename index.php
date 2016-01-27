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
	<link rel="stylesheet" type="text/css" href="assets/css/tabs.css">

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
				<h2>Vermillion</h2>
				<!-- <h4 class="p-color">Feel comfortable with your choice in condos</h4> -->
			</div>
		</div>
	</div>

	<div id="home-row-location">
		<h3>9910 104 Street, Oliver Square, Edmonton</h3>
	</div>

	<div class="home-row" id="home-row-three">
		<div class="col-md-4 home-side">
			
		</div>
		<div class="col-md-8 container center text-center why-vermillion">
			<div class="text-left head">
				<h2 class="p-color font-light">Why Vermillion</h2>
			</div>
		 	
		 	<div class="text-left body">
			 	<h4 class="default-font font-light">
				  	Vermillion Condos is ideal for anyone looking for a quality home within minutes of the Edmonton downtown core.
				  	With a combination of ...
				  	Show the key advantages of Vermillion, what would the sales pitch to a new customer sound like? Hook customers attention, and make them want to keep reading.
		   	 	</h4>
	   	 	</div>

	   	 	<div class="center text-left v-advantage">
	   	 		<div class="head">
	   	 			<div class="col-sm-6 col-md-6">
	   	 			  <h2 class="text-center font-light">Concrete and Steel</h2>
	   	 			  <p class="default-font font-light">The steel and concrete based structure system of Vermillion ensures you to enjoy the best living experience and the most reliable protection from fire and sound.</p>
	   	 			  <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
	   	 			</div>

	   	 			<div class="col-sm-6 col-md-6">
	   	 			  <h2 class="text-center font-light">Brick and Stone</h2>
	   	 			  <p class="default-font font-light">The  exterior  exclusive  designed  by  our  architect  provide  you  the  most  contemporary appearance.</p>
	   	 			  <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
	   	 		   </div>
	   	 		</div>
	   	 	</div>
		</div>
	</div>

	<div class="subscribe-row">
		<div class="subscribe-form-container">
			<form action="#" method="post" class=>
				<p class="home-input-element-p">
					<input type="text" name="email" id="home-email" value="your-email@email.com" onfocus="this.value = this.value;"/ class="col-sm-8 col-md-8">
					<input type="submit" id="home-submit" value="Subscribe for Updates"/ class="col-sm-4 col-md-4">
				</p>
			</form>
		</div>
	</div>

	<div class="home-row" id="row-features">
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
			  <label for="tab5">Security</label>

			  <section id="content1">
				<ul>
				    <li>Contemporary architecture design by Brian Allsopp </li>
				    <li>5 stories condominium residences</li>
				    <li>One bedroom, two bedroom, and three bedroom floor plans</li>
				    <li>High performance Low E windows </li>
				    <li>Landscaping</li>
				    <li>Concrete and steel construction</li>
				    <li>Brick and culture stone exterior </li>
				    <li>Lobby (Material, Design)</li>
				    <li>Build-in Gym and meeting area</li>
				    <li>Independent air heating and air conditioning in every unit </li>
				    <li>88 heated underground residential parking stalls and 11 surface visitor parking stalls</li>
				    <li>Protected and Insured by Blanket Home Warranty</li>
				</ul>
			  </section>

			  <section id="content2">
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

			  <section id="content3">
				<ul>
					<li>Exclusive Samsung appliance package</li>
					<li>Contemporary kitchen cabinet with soft close feature</li>
					<li>Quartz countertops with stainless steel sinks with extended eating bar</li>
					<li>Brush nickel single lever faucet with pull-out spray</li>
					<li>Incandescent lighting package</li>
				</ul>
			  </section>

			  <section id="content4">
				<ul>
					<li>Marble countertops in bathrooms</li>
					<li>Ceramic tile shower surrounds</li>
					<li>Contemporary cabinetry with brushed nickel door hardware</li>
					<li>Contemporary brushed nickel shower hardware</li>
					<li>Brushed nickel faucets and chrome bath accessories</li>
				</ul>
			  </section>
			
			  <section id="content5">
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

	<div class="home-row">
		<div class="banner-link">
			<div class="head">
				<div class="col-md-4">
					<a href="contact.php">
						<img src="assets/images/home-neighbour.png" alt="Home-Condo-Click" class="home-cta-img center" />
						<a href="neighborhood.php"><h3 class="home-cta-text center white-font">Neighborhood</h3></a>
					</a>
				</div>
				<div class="col-md-4">
					<a href="floor-plan.php">
						<img src="assets/images/home-floorplan.png" alt="Home-Condo-Click" class="home-cta-img center" />
						<a href="floor-plan.php"><h3 class="home-cta-text center white-font">Floor Plans</h3></a>
					</a>
				</div>
				<div class="col-md-4">
					<a href="contact.php">
						<img src="assets/images/home-condo.png" alt="Home-Condo-Click" class="home-cta-img center" />
						<a href="contact.php"><h3 class="home-cta-text center white-font">Contact Us</h3></a>
					</a>
				</div>
			</div>
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
				<a href="contact.php"><button class="p-btn center">Contact Us</button></a>
			</div>
		</div>
	</div>
	<?php
		include_once("footer.php");
	?>
  </body>
</html>
