<footer class="pt-55 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="footer-col">
          <!-- <img src="myimages/logo.png" alt="" class="img-responsive"> -->
          <h5 class="footer-title">about us</h5>
          <p class="text-justify">As a ship management company, we are committed to maintaining the highest standards of safety and energy conservation both onboard and ashore.</p>
          <br><br>
          <p> <i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="fa fa-instagram"></i> <i class="fa fa-google-plus"></i></p>
  </div>
      </div>
      <div class="col-sm-3">
        <div class="footer-col">
          <h5 class="footer-title">Our Services</h5>
          <ul>
            <li><a href="crew.php">Crew Management</a></li>
            <li><a href="technical.php">Technical Management</a></li>
            <li><a href="offshore.php">Offshore Management</a></li>
            <li><a href="flag-state.php">Flag State Documentation Services</a></li>
          </ul>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="footer-col">
          <h5 class="footer-title">Contact Us</h5>
          <p> <i class="fa fa-map-marker"></i> Address</p>
          <br>
          <p> <i class="fa fa-phone"></i> +91 123 456 7890</p>
          <br>
          <p> <i class="fa fa-envelope"></i> email@posm.com</p>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="footer-col">
          <h5 class="footer-title">Newsletter Suscribe</h5>
          <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
          <br>
          <form action="#" class="subscribe-form">
							<fieldset>
								<input type="email" class="form-control" placeholder="your email here">
								<button type="submit"><i class="fa fa-envelope-o"></i></button>
							</fieldset>
					</form>
        </div>
      </div>


    </div>
  </div>
</footer>


<!-- <footer class="bg-blue pad">
  <p class="text-center text-white"> <i class="fa fa-code"></i> With  <i class="fa fa-heart"></i> By <a href="https://www.cyberrafting.com">Cyber Rafting</a> </p>
</footer> -->

<!-- whatsapp and call button -->
<div class="navbar navbar-default navbar-fixed-bottom hidden-lg hidden-sm hidden-md col-xs-12 " style="width:100%;text-align: center;position: fixed;right: 0;bottom: 0;left: 0;padding: 4px;background-color: #efefef;text-align: center;">
		<div class="hidden-lg hidden-sm hidden-md col-xs-6" style="padding:0">
      <a href="tel:+917506717212">
        <div class="phone-icon" style="background-color:#018f99;margin-top: 6px;padding:8px">
          <img src="myimages/phone.png" alt="Call" height="32" width="32" />
        </div>
      </a>
    </div>
    <div class="hidden-lg hidden-sm hidden-md col-xs-6" style="padding:0">
      <a href="whatsapp://send?text=. &phone=+919920920418">
        <div class="phone-icon" style="background-color:#2ab201;margin-top: 6px;padding:8px">
          <img src="myimages/whatsapp.png" alt="Whatsapp" height="32" width="32" />
        </div>
      </a>
    </div>
</div>


<!-- script for animation and smoothscroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/animations.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/appear.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/smoothscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript">
  new WOW().init();
</script>

<!-- script for fancybox in gallery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  	$(".fancybox").fancybox({
  			openEffect: "none",
  			closeEffect: "none"
  	});
  });
</script>

<!-- script for angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
<script src="js/angularscript.js" charset="utf-8"></script>

<!-- script for owl carousel -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script type="text/javascript">
$('.testimonials').owlCarousel({
  loop:true,
  margin:25,
  dot:true,
  autoplay:true,
  autoplayTimeout:5000,
  autoplaySpeed:2000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:2
      }
  }
})
</script>
<script type="text/javascript">
$('.consulting').owlCarousel({
	loop:true,
	margin:25,
	dot:true,
	autoplay:true,
	autoplayTimeout:5000,
	autoplaySpeed:2000,
	responsive:{
			0:{
					items:1
			},
			600:{
					items:2
			},
			1000:{
					items:3
			}
	}
})
</script>

<!-- custom script -->
<script src="js/scripts.js" charset="utf-8"></script>

<?php include 'analytics.php'; ?>
