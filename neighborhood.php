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

		<style type="text/css">
			div {
				overflow: visible;
			}
			#map-canvas {
				display: block;
				height:300px;
				background-color: #CCC;
			}
		</style>
	</head>


	<body>
		<?php
			include_once("navbar.php");
		?>

		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="center text-center sub-row fp-headbanner">
			<div class="head center white-font blue-overlay">
				<h2>Neighborhood</h2>
				<p>A central location that fits to all life styles</p>
			</div>
		</div>

		<div class="default-font container location">
			<h3 class="p-color font-light">Location, location.</h3>
			<p>
				Whether it is work, live or play, you will enjoy the walkability and short distance to all the best of amenities in Edmonton.
				In the heart of the new Brewery District, the Vermillion is just steps away from trendy eateries and shopping, and minutes to the MacEwan University campus and famous Rogers Place.
				For the ones who enjoy the great outdoors, there are continuous bike and walking trails in the area that connects the our famous river valleys and parks.
				There is also express public transit to the University of Alberta and NAIT at your door steps.
			</p>
		</div>

		<div class="container" id="map-canvas">

		</div>
		<!-- <div class="default-font container">
			<div class="shopping col-md-4">
				<h3 class="p-color font-light">Shopping</h3>
				<p>
					Vermillion is located right outside Oliver Square, home to big name restaurants, plus, grocery stores, drug stores, coffee shops, banks and more. The latest in fashion can be fount just a few minutes east at the Edmonton City Centre Mall, or if you prefer a smaller mall experience, Kingsway Mall is equally close. Explore the many offerings along nearby Jasper Avenue.
				</p>
			</div>

			<div class="transportation col-md-4">
				<h3 class="p-color font-light">Transportation</h3>
				<p>
					Close proximity to the Corona Light Rail Transit (LRT) station and your own covered parking stall, means getting to your destination is always easy. The proposed LRT extension will bring reliable, confortable, and fast transit even closer to your doostep.
				</p>
			</div>

			<div class="future-dev col-md-4">
				<h3 class="p-color font-light">Future Development</h3>
				<p>
					The LRT extension isn't the only new development planned for the area surrounding Vermillion. The government has recently announced ..., With the arena being constructed just east, there are numerous new developments focused on enhancing the Edmonton core.
				</p>
			</div>
		</div> -->
		<div class="default-font container view">
			<img src="assets/images/neighbour.png" alt="Neighbourhood View" class="view-img" />
		</div>


		<?php
		include_once("footer.php");
		?>
	</body>

	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
		jQuery(function(){

		});
	</script>

	<script type="text/javascript" src="assets/js/google-map.js"></script>
	<script type="text/javascript">

		var map;

		function initialize(){
			var mapCanvas = document.getElementById('map-canvas');
		 	var mapOptions = {
	          center: new google.maps.LatLng(53.5491791,-113.5195819),
	          zoom: 15,
	          zoomControl: false,
	          scaleControl: false,
	          scrollwheel: false,
	          mapTypeId: google.maps.MapTypeId.ROADMAP
	        }


			map = new google.maps.Map(mapCanvas, mapOptions);

			var places = {
				restaurant: {
					label: 'restaurants',
					checked: true,
					icon: 'assets/images/dining-pin.png',
					items: [
						['Red Robin Gourmet Burgers', 53.545866, -113.515115],
						['Hudsons Downtown', 53.546522, -113.515061],
						['Back Home Fish & Chips', 53.5464069,-113.5209359]
					]
				},
				shopping: {
					label: 'shopping',
					checked: true,
					icon: 'assets/images/shopping-pin.png',
					items: [
						['Safeway', 53.546773, -113.518565],
						['Longstreet Shopping Centre', 53.546071, -113.520818],
						['Staples', 53.547436, -113.525217]
					]
				},
				services: {
					label: 'services',
					check: true,
					icon: 'assets/images/services-pin.png',
					items: [
						['BMO', 53.546001, -113.517213],
						['TELUS', 53.545902, -113.516231],
						['Kal Tire', 53.546052, -113.520239]
					]
				},
				vermillion: {
					label: 'Vermillion',
					check: true,
					icon: 'assets/images/logo-map-marker.png',
					items: [
						['Vermillion', 53.550272, -113.522974]
					]
				}
			}

			function addMarker() {

				$.each(places, function(key, value) {
					// console.log(key);

					items = places[key]["items"];
					// console.log(items);

					for (var i = 0; i < items.length; i ++) {
						position = new google.maps.LatLng(items[i][1], items[i][2]);

						var marker = new google.maps.Marker({
							position: position,
							icon: places[key]["icon"],
							map: map
						});
					}
				});
			}

			addMarker();
		}


		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</html>
