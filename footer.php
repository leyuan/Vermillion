<section id="footer">
  <div class="container">
    <div class="links">
      <a href="index.php">
        <img src="assets/images/icons/home.jpg" alt="">
        <p>HOME</p>
      </a>
      <a href="neighborhood.php">
        <img src="assets/images/icons/neighborhood.jpg" alt="">
        <p>NEIGHBORHOOD</p>
      </a>
      <div class="small-show"></div>
      <a href="floor-plan.php">
        <img src="assets/images/icons/floorplan.jpg" alt="">
        <p>FLOOR PLANS</p>
      </a>
      <a href="about-us.php">
        <img src="assets/images/icons/aboutus.jpg" alt="">
        <p>ABOUT US</p>
      </a>
      <a href="get-in-touch.php">
        <img src="assets/images/icons/getintouch.jpg" alt="">
        <p>GET IN TOUCH</p>
      </a>
    </div>

    <div class="info">
      <p>(+1)780-123-4567</p>
      <p>10611 116 STREET NW, EDMONTON</p>
      <p>COPYRIGHT © RED LEAF LTD. 2016. ALL RIGHTS RESERVED.</p>
    </div>
  </div>
</section>
<!-- <script src="assets/js/jquery.min.js"></script> -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/pgwslideshow.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var config = {
      maxHeight: 700
    };
    var pgwSlideshow = $('.pgwSlideshow').pgwSlideshow(config);
    $("#get-in-touch-form").submit( function(event){
      event.preventDefault();
      console.log( 'submit' );
      var formData = $("#get-in-touch-form").serialize();
      $.ajax({
        type: 'POST',
        url: "mail.php",
        data: formData
      }).done(function(response) {
        var message = "Processing ...";
        $("#form-message").text(message);
        if(response == "success") {
          message = "Thanks for touching base! We will contact you soon."
          $("get-in-touch-form").trigger("reset");
        } else if (response == "bad request") {
          message = "Something is wrong with your request, please check and try again."
        } else {
          message = "Oops.. Something went wrong, please give us a call.";
        }
        $("#form-message").text(message);
      }).fail(function(error) {
        $("#form-message").text("Oops.. An error has occured, please give us a call.");
      })
    });
  });
</script>
</head>

<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
