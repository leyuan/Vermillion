<!DOCTYPE html>
<html>
	<head>
		<title>Demo with jQuery</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project with jQuery">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">	
		<style type="text/css">
		#map-canvas {
			width: 100%;
			height: 800px;
			background-color: #CCC;
		}
		</style>

	</head>
	<body>
	<div>
		<div id="map-canvas">
			
		</div>
	</div>
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
	          center: new google.maps.LatLng(53.547846,-113.5139443),
	          zoom: 17,
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
				}
			}

			function addMarker() {
				// console.log("add marker");
				// console.log(places);
				// console.log("details:"+places["restaurant"]["items"]);

				$.each(places, function(key, value) {
					console.log(key);

					items = places[key]["items"];
					console.log(items);

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