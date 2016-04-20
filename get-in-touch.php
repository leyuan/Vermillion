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
				<h2>Get In Touch</h2>
				<p>we are available</p>
			</div>
		</div>

	   	<div class="container" id="contact-area">
	       	<div class="row">
							<!-- <div class="contact">
								<h4>
									Redleaf Group is established in 1992, and one of its subsidiaries Redleaf Enterprises Inc. has been dedicated to the importation and exportation of building material. In addition, Redleaf is the first Canadian company to introduce North American wood frame houses, multi-storey light-weight steel condos and high-rises to China. Now Redleaf returns to where everything gets started, the Readleaf Properties Ltd. is ready to bring the best living experience to people Edmonton and Canada.
								</h4>
							</div> -->
	           	<div class="contact">
	               	<div class="section-title text-center">
                       <h4>You are welcome to Email us with any questions, inquiries or orders. <br>
                       We would be very happy to answer all your questions and set up meeting with you.</h4>
                   </div>
	               	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	                   	<div class="contact-form">
                       	<form action="/mail" class="thm-contact-form" method="GET" id="get-in-touch-form">
                          <input name="name" type="text" placeholder="Your Name">
                          <input name="email" type="text" placeholder="Email Address">
                          <input name="phone" type="text" placeholder="Phone No.">
                          <textarea name="message" placeholder="Message"></textarea>
                          <button type="submit">Submit Now <i class="fa fa-arrow-right"></i></button>
                        </form>
                        <p id="form-message"></p>
                      </div>
	                   </div>
	                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 address">
	                   	<div class="contact-right text-left">
	                           <h4>Redleaf Group</h4>
	                           <p>
	                               10351 92 Street NW,<br>
	                               Edmonton AB, Canada, T5H 0E4<br>
	                               Phone:
	                               780.475.5999 <br>
	                               <!-- Chuchu - +1 780-xxx-xxxx -->
	                           </p>
	                           <p>
	                               E-mail: <a href="mailto:info@redleafcanada.com?Subject=Condo Inquiry" target="_top">info@redleafcanada.com</a><br>
	                               Website: www.vermillioncondos.com
	                           </p>
	                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.4979261951303!2d-113.47764788436803!3d53.548878380021975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a02257a6f587c7%3A0x1c935443e4d79918!2s10351+92+St+NW%2C+Edmonton%2C+AB+T5H!5e0!3m2!1sen!2sca!4v1460431906625" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	                       </div>
	                   </div>
	               </div>
	           </div>
	       </div>
	     </div>
		<?php
		include_once("footer.php");
		?>
		<script>

		</script>
	</body>
  </html>
