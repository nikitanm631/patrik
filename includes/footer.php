<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <div class="footer-col">
  <h5 class="footer-title">Our Address</h5>
          <p><i class="fa fa-map-marker"></i> Navi Mumbai, Mumbai, Maharashtra 400706</p>
  </div>
      </div>
      <div class="col-sm-4">
        <div class="footer-col">
          <h5 class="footer-title">Reach Us At</h5>
          <p><i class="fa fa-phone"></i> +91 123 456 7890</p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="footer-col">
  <h5 class="footer-title">Email Us At</h5>
    <p><i class="fa fa-envelope"></i> contact@example.com</p>
  <!-- <ul class="social-icons icon-gray icon-circled icon-sm pull-right sm-pull-none sm-text-center mt-sm-15">
    <li><a href="https://www.facebook.com/Dr-Ortho-207035629682172" target="_blank"><i class="fa fa-facebook"></i></a></li>
    <li><a href="https://twitter.com/drpramodbhor" target="_blank"><i class="fa fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/drbhor/" target="_blank"><i class="fa fa-instagram"></i></a></li>
    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>


  </ul> -->
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
