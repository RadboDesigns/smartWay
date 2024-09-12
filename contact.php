<?php
    session_start();
    ?>
    <!-- Rest of the about.php content -->


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Smart Way</title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="assets/css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="assets/css/color-themes/default-color.css" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


</head>

<body>
 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Main Header -->
    <header class="main-header header-style-three">
    	
		<!-- Header Top -->
        <div class="header-top">
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="header-top_nav">
					</div>
					<div class="right-box d-flex">
						<a class="header-top_email" href="mailto:info@example.com"><span>Email us:</span> suresh@smartwayservices.co.in</a>
						<!-- Header Top Social -->
						<div class="header-top_social">
							<a href="https://www.linkedin.com/in/suresh-murugan-62100642/" aria-label="linkedin"><i style="padding-right: 10px;" class="fab fa-linkedin"></i></a>
											<a href="https://www.instagram.com/smartway_suresh/" aria-label="Instagram"><i style="padding-right: 10px;" class="fab fa-instagram"></i></a>
											<a href="https://www.facebook.com/smartwaytechsol" aria-label="Facebook"><i style="padding-right: 10px;" class="fab fa-facebook-f"></i></a>
											<a href="https://www.youtube.com/@smartsuresh7744" aria-label="YouTube"><i style="padding-right: 10px;" class="fab fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

        <!-- Header Lower -->
        <div class="header-lower">
            
			<div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center">
					
					<!-- Logo Box -->
					<div class="logo-box d-flex">
						<div class="logo"><a href="index.php"><img src="assets/images/logo-3.png" alt="" title=""></a></div>
					</div>
					
					<div class="nav-outer d-flex align-items-center">
						
						<!-- Main Menu -->
						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="index.php">Home</a>
									</li>
									<li ><a href="about.php">About Us</a>
									</li>
									<li><a href="product.php">Products</a></li>
									<li><a href="services.php">Services</a>
									</li>
									<li><a href="training.php">Training</a></li>
									<li><a href="contact.php" class="active">Contact</a></li>
								</ul>
							</div>
							
						</nav>
						<!-- Main Menu End-->
						
					</div>
					
					<!-- Outer Box -->
					<div class="outer-box d-flex align-items-center">
						
						<!-- Phone Box -->
						<div class="header-phone">
							<div class="header-phone_inner">
								<span class="header-phone_icon flaticon-telephone"></span>
								Phone Number <br>
								<a href="tel:+1245-45678">+91 980400244 </a>
							</div>
						</div>
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon"><img src="assets/images/icons/menu.png" alt="" /></span></div>
						
					</div>
					<!-- End Outer Box -->
					
				</div>
				
			</div>
        </div>
        <!-- End Header Lower -->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="index.php" title=""><img src="assets/images/logo.png" alt="" title=""></a>
					</div>
					
					<!-- Right Col -->
					<div class="right-box">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon"><img src="assets/images/icons/menu.png" alt="" /></span></div>
						
					</div>
					
				</div>
            </div>
        </div>
		<!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/logo.png" alt="" title=""></a></div>
				<!-- Search -->
				<div class="search-box">
					<form method="post" action="contact.php">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
							<button type="submit"><span class="icon flaticon-search"></span></button>
						</div>
					</form>
				</div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(assets/images/background/3.jpg)">
        <div class="auto-container">
			<h1>Contact Us</h1>
			<ul class="bread-crumb clearfix">
				<li><a href="index.php">Home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Contact Info One -->
	<section class="contact-info_one">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Column -->
				<div class="contact-info-column col-lg-4 col-md-6 col-sm-12">
					<div class="info-inner">
						<span class="icon flaticon-telephone"></span>
						<a class="phone" href="tel:+55-9900-666-22">+91 980400244</a>
						<div class="text">Contact Phone</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="contact-info-column col-lg-4 col-md-6 col-sm-12">
					<div class="info-inner">
						<span class="icon flaticon-email"></span>
						<a class="email" href="mailto:info.mirpur@gmail.com">suresh@smartwayservices.co.in</a>
						<div class="text">Contact Email</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="contact-info-column col-lg-4 col-md-6 col-sm-12">
					<div class="info-inner">
						<span class="icon flaticon-map"></span>
						<a class="location" href="#">G1 Allwin Oasis FlatsPlot No 16<br>  Sudha Avenue 2nd Street Chitlapakkam,<br> Chennai - 600064</a>
						<div class="text">Contact Location</div>
					</div>
				</div>

			</div>

			<div class="contact-form">
				<form action="mail.php" method="POST" autocomplete="off">
					<div class="row clearfix">
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<label>Your Name</label>
							<input type="text" id="name" name="name" placeholder="Write your name" required="">
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 form-group">
							<label>Phone Number</label>
							<input type="text" id="phone" name="phone" placeholder="Number" required="">
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 form-group">
							<label>Mail</label>
							<input type="text" id="email" name="email" placeholder="Your Mail" required="">
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 form-group">
							<label>Subject</label>
							<input type="text" id="subject" name="subject" placeholder="Subject" required="">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<textarea class="" id="message" name="message" placeholder="Write Your Message"></textarea>
							<div class="comment-text">* Call us at +91 980400244 or fill out the form below to receive confidential initial consultation.</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
							<div class="button-box">
								<button class="btn-style-one theme-btn" type="submit" id="submitcontact" name="submitcontact" >
									<span class="btn-wrap">
										<span class="text-one">Submit <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Submit <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</span>
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>

		</div>
	</section>
	<!-- End Faq One -->

	<!-- Map One -->
	<section class="map-one">
		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1944.3189116722506!2d80.14164448853151!3d12.930983833109433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sG1%2C%20Allwin%20Oasis%20FlatsPlot%20No%2016%20%2C%20Sudha%20Avenue%202nd%20Street%20Chitlapakkam%2C%20Chennai%20-%20600064!5e0!3m2!1sen!2sin!4v1724665038070!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
	<!-- End Map One -->


	<section class="cta-one style-two">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<!-- CTA Logo -->
				<div class="cta-logo">
					<img src="assets/images/logo-3.png" alt="" />
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->

	<!-- Main Footer -->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="main-footer_widgets">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
							
							<!--Footer Column-->
                            <div class="main-footer_column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget subscribe-widget">
									<div class="footer-widget subscribe-widget">
										<h5 class="main-footer_title" style="color: #007BFF;">Company Address :</h5>
										<div style="color: white;">Smartway Consultancy Services <br> G1, Allwin Oasis FlatsPlot No 16 ,<br>  Sudha Avenue 2nd Street Chitlapakkam,<br> Chennai - 600064 </div><br>
										<h5 class="main-footer_title" style="color: #007BFF;">Registered Office : </h5>
										<div style="color: white;"><a href="#"></a> S1 - Mullai Flats , No 98 9th Left 2nd Cross st<br> Saravana Nagar , Manikandapuram<br> Thirumullaivoyal,<br> Chennai - 600062  </div><br>
										<h5 class="main-footer_title" style="color: #007BFF;">EMAIL : </h5>
										<div style="color: white;"><a href="#"></a> suresh@smartwayservices.co.in<br>admin@smartwayservices.co.in </div><br>
									</div>
								</div>
							</div>

							<!--Footer Column-->
                            <div class="main-footer_column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4 class="main-footer_title">Nav links</h4>
									<ul class="main-footer_list">
										<li><a href="index.php">Home</a></li>
										<li><a href="about.php">About Us</a></li>
										<li><a href="product.php">Products</a></li>
										<li><a href="services.php">Services</a></li>
										<li><a href="training.php">Training</a></li>
										<li><a href="contact.php">Contact Us</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

							<!--Footer Column-->
                            <div class="main-footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4 class="main-footer_title">Services</h4>
									<ul class="main-footer_list">
										<li><a href="logoSerDetails.php">Logo & Branding</a></li>
										<li><a href="wedSer.php">Website Developement</a></li>
										<li><a href="grapgSer.php">Graphic Designs</a></li>
										<li><a href="packagingSer.php">Packaging Desgins</a></li>
                                        <li><a href="appSer.php">App Development</a></li>
                                        <li><a href="socialSer.php">Digital Marketing </a></li>
									</ul>
									<!-- <h4 class="main-footer_title">Product</h4>
									<ul class="main-footer_list">
										<li><a href="#">Product 1</a></li>
										<li><a href="#">Product 2</a></li>
										<li><a href="#">Product 3</a></li>
									</ul> -->
								</div>
							</div>

							<!--Footer Column-->
                            <div class="main-footer_column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget news-widget">
									<h4 class="main-footer_title">Social Media Links </h4>
							
									<div class="right-box d-flex">
										<!-- Header Top Social -->
										<div class="header-top_social">
											<a href="https://www.linkedin.com/in/suresh-murugan-62100642/" aria-label="linkedin"><i style="padding-right: 10px;" class="fab fa-linkedin"></i></a>
											<a href="https://www.instagram.com/smartway_suresh/" aria-label="Instagram"><i style="padding-right: 10px;" class="fab fa-instagram"></i></a>
											<a href="https://www.facebook.com/smartwaytechsol" aria-label="Facebook"><i style="padding-right: 10px;" class="fab fa-facebook-f"></i></a>
											<a href="https://www.youtube.com/@smartsuresh7744" aria-label="YouTube"><i style="padding-right: 10px;" class="fab fa-youtube"></i></a>
										</div>
									</div>
									<h4 class="main-footer_title">Instagram Posts</h4>
							
									<!--News Widget Block-->
									<div class="news-widget-block" style="display: flex; justify-content: flex-end; gap: 10px;">
										<div class="news-widget_image">
											<img src="assets/images/resource/news-widget-3.jpg" alt="" />
										</div>
										<img src="assets/images/resource/news-widget-3.jpg" alt="" />
										<img src="assets/images/resource/news-widget-3.jpg" alt="" />
										<img src="assets/images/resource/news-widget-3.jpg" alt="" />
									</div>
							
									<!--News Widget Block-->
									<div class="news-widget-block" style="display: flex; justify-content: flex-end; gap: 10px;">
										<div class="news-widget_image">
											<img src="assets/images/resource/news-widget-3.jpg" alt="" />
										</div>
										<img src="assets/images/resource/news-widget-3.jpg" alt="" />
										<img src="assets/images/resource/news-widget-3.jpg" alt="" />
										<img src="assets/images/resource/news-widget-3.jpg" alt="" />
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="auto-container">
				<div class="copyright"><a href="index.php">Smartway</a> &copy; Copyright-2024 All Rights Reserved.</div>
			</div>
		</div>
	</footer>
	<!-- End Main Footer -->
	
	
	<!-- Color Palate / Color Switcher -->
	<div class="color-palate">
		<div class="color-trigger">
			<i class="flaticon-gear"></i>
		</div>
		<div class="color-palate-inner">
			<div class="color-palate-head">
				<h6>Choose Color</h6>
			</div>
			
			<!-- Colors -->
			<div class="various-color clearfix">
				<div class="colors-list">
					<span class="palate default-color active" data-theme-file="assets/css/color-themes/default-color.css"></span>
					<span class="palate green-color" data-theme-file="assets/css/color-themes/green-color.css"></span>
					<span class="palate olive-color" data-theme-file="assets/css/color-themes/olive-color.css"></span>
					<span class="palate orange-color" data-theme-file="assets/css/color-themes/orange-color.css"></span>
					<span class="palate purple-color" data-theme-file="assets/css/color-themes/purple-color.css"></span>
					<span class="palate teal-color" data-theme-file="assets/css/color-themes/teal-color.css"></span>
					<span class="palate brown-color" data-theme-file="assets/css/color-themes/brown-color.css"></span>
					<span class="palate yellow-color" data-theme-file="assets/css/color-themes/yellow-color.css"></span>
				</div>
			</div>
					
			<div class="purchase-box">
				You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.
				<a href="#" class="theme-btn btn-style-one">
					<span class="btn-wrap">
						<span class="text-one">buy now</span>
						<span class="text-two">buy now</span>
					</span>
				</a>
			</div>
			
		</div>
	</div>
	<!-- End Color Palate / Color Switcher -->
	
</div>
<!-- End PageWrapper -->

<!-- Scroll To Top -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-arrow-up fa-fw"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/odometer.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/color-settings.js"></script>
<script src="assets/js/script.js"></script>

<!-- for Phpmail add the Link -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  var message = "<?-$_SESSION['status']?? ''; ?>";
  if(messageText != '') {
    Swal.fire({
		title: "Thank you!",
		text: messageText,
		icon: "success",
	});
		<?php unset($_SESSION['status']); ?>
  }
  
</script>

</body>
</html>