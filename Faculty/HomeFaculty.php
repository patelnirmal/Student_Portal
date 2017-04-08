<?php
	
	include('db/faculty_session.php');

?>
<!DOCTYPE HTML>
<html>
<?php
	include 'layouts/header.php';
?>
<body>


   <!-- Collect the nav links, forms, and other content for toggling -->
   <?php
   		include 'layouts/menu.php';
   ?>
    <!-- /.navbar-collapse -->
   </div>
</nav>
<!-- banner -->
	<div class="banner">
			<!-- banner Slider starts Here -->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner-bg">
									<div class="container">
										<div class="banner-info">
											<h3>R.C. Technical Institute</h3>
											
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2">
									<div class="container">
										<div class="banner-info">
											<h3>R.C. Technical Institute</h3>
											
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img">
									<div class="container">
										<div class="banner-info">
											<h3>R.C. Technical Institute</h3>
											
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg">
									<div class="container">
										<div class="banner-info">
											<h3>R.C. Technical Institute</h3>
											
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2">
									<div class="container">
										<div class="banner-info">
											
										</div>
									</div>
								</div>
							</li>
							
						</ul>
		          </div>
	</div>
	<!-- //banner -->
<?php
	include 'layouts/footer.php';
?>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</body>
</html>	