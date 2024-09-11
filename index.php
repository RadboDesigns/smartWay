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
<style>
	.gallery-two_block {
    position: relative;
}

.gallery-two_block-inner {
    position: relative;
    overflow: hidden;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
}

.gallery-two_block-inner iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

	.custom-icon {
		width: 50% !important;;
		display: block !important;;
	}

	.right-box.d-flex {
    justify-content: flex-start; /* Align items to the left */
}

.header-top_social a {
    padding-right: 10px;
}


</style>

</head>

<body>
 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Main Header -->
    <header class="main-header header-style-two">
    	

        <!-- Header Lower -->
        <div class="header-lower">

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
            
			<div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center">
					
					<!-- Logo Box -->
					<div class="logo-box d-flex">
						<div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt="" title=""></a></div>
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
									<li><a href="index.php" class="active">Home</a>
									</li>
									<li ><a href="about.php">About Us</a>
									</li>
									<li><a href="product.php">Products</a></li>
									<li><a href="services.php">Services</a>
									</li>
									<li><a href="training.php">Training</a></li>
									<li><a href="contact.php">Contact</a></li>
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
								<a href="tel:+1245-45678">980400244 </a>
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
	
	

	<section class="slider-two">
		<span class="slider-two_circle-one"></span>
		<span class="slider-two_circle-two"></span>
		<span class="slider-two_circle-three"></span>
		<div class="single-item-carousel owl-carousel owl-theme">
		
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image: url(assets/images/main-slider/1.jpg)"></div>
				<div class="auto-container">
					<!-- Slider One Title Column -->
					<div class="slider-two_title-column">
						<div class="slider-two_title-inner">
							<h1 class="slider-two_heading"><span> Smartway:</span> <br> <span> Your Trusted Partner for</span></h1>
							<div class="slider-two_text">ERP, Field Force Automation, and GST Billing Solutions</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-one theme-btn" href="contact.php">
									<div class="btn-wrap">
										<span class="text-one">Get In Touch <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Get In Touch <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
								<a class="btn-style-two theme-btn" href="product.php">
									<div class="btn-wrap">
										<span class="text-one">Discover more <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Discover more <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image: url(assets/images/main-slider/2.jpg)"></div>
				<div class="auto-container">
					<!-- Slider One Title Column -->
					<div class="slider-two_title-column">
						<div class="slider-two_title-inner">
							<h1 class="slider-two_heading"><span> Comprehensive </span> <br> <span>Digital Solutions: </span></h1>
							<div class="slider-two_text">From Branding to App Development and Marketing</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-one theme-btn" href="contact.php">
									<div class="btn-wrap">
										<span class="text-one">Get In Touch <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Get In Touch <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
								<a class="btn-style-two theme-btn" href="services.php">
									<div class="btn-wrap">
										<span class="text-one">Discover more <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Discover more <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="slide">
				<div class="slider-two_image-layer" style="background-image: url(assets/images/main-slider/3.jpg)"></div>
				<div class="auto-container">
					<!-- Slider One Title Column -->
					<div class="slider-two_title-column">
						<div class="slider-two_title-inner">
							<h1 class="slider-two_heading"><span> Smartway's GOAL Training:</span> <br> <span> Unlock your potential </span></h1>
							<div class="slider-two_text"> Combined with expert training in MS Excel, MS Outlook, and Google Sheets for enhanced productivity.</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-one theme-btn" href="contact.php">
									<div class="btn-wrap">
										<span class="text-one">Get In Touch <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Get In Touch <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
								<a class="btn-style-two theme-btn" href="training.php">
									<div class="btn-wrap">
										<span class="text-one">Discover more <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Discover more <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Slider One -->

	<!-- About One -->
	<section class="about-one">
		<div class="about-one_pattern" data-parallax='{"y" : 80}' style="background-image:url(assets/images/background/pattern-2.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Image Column -->
				<div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_pattern-two" data-parallax='{"y" : 60}' style="background-image:url(images/background/pattern-3.png)"></div>
					<div class="about-one_color-layer" data-parallax='{"x" : 60}'></div>
					<div class="about-one_image-inner">
						<div class="about-one_counter">
							<div class="about-one_counter-words">+<span class="odometer" data-count="12"></span>k</div>
							<div class="about-one_counter-text">Our Active Member</div>
						</div>
						<div class="parallax-scene-4">
							<div class="about-one_image" data-depth="0.20">
								<img src="assets/images/resource/about.png" alt="" />
							</div>
						</div>
					</div>
				</div>
				<!-- Image Column -->
				<div class="about-one_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_content-inner">
						<div class="about-one_title">About Us</div>
						<h3 class="about-one_heading">Smartway  is a tech start-up that offers excellent and innovative IT solutions for every business.</h3>
						<div class="about-one_text">At Smartway, we specialize in delivering cutting-edge software solutions that streamline business processes and improve overall productivity. Our team of experts works closely with clients to understand their unique needs and implement smarter solutions that yield better results. We pride ourselves on our ability to enrich various business functions, making operations smoother and more effective.</div>
						<div class="row clearfix">
							<!-- About One Block -->
							<div class="about-one_block col-lg-6 col-md-6 col-sm-12">
								<div class="about-one_block-icon flaticon-idea"></div>
								<h6 class="about-one_block-heading">Our Philosophy</h6>
								<div class="about-one_block-text">"known is a drop, and unknown is an ocean." This philosophy drives us to continually expand our knowledge and share it with others.</div>
							</div>
							<!-- About One Block -->
							<div class="about-one_block col-lg-6 col-md-6 col-sm-12">
								<div class="about-one_block-icon flaticon-customer-support-1"></div>
								<h6 class="about-one_block-heading">Join Our Training Programs</h6>
								<div class="about-one_block-text">Contact us today to learn more about our training schedules and how we can help you achieve your Productivity and Team Building goals .</div>
							</div>
						</div>
						<!-- Button Box -->
						<div class="about-one_button-box">
							<a class="btn-style-one theme-btn" href="about.php">
								<div class="btn-wrap">
									<span class="text-one">More About <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									<span class="text-two">More About <i class="fa-solid fa-arrow-right fa-fw"></i></span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About One -->

	<!-- Feature One -->
	<section class="feature-one" style="padding-bottom: 70px;">
		<div class="auto-container">
			<div class="inner-container clearfix">
				
				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<div class="feature-block_one-icon flaticon-cyber-security-1"></div>
						<h6 class="feature-block_one-title">Logo branding <br> & Graphic Design</h6>
					</div>
				</div>

				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<div class="feature-block_one-icon flaticon-seo"></div>
						<h6 class="feature-block_one-title">Website <br> Development </h6>
					</div>
				</div>

				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<div class="feature-block_one-icon flaticon-server"></div>
						<h6 class="feature-block_one-title">SAP Business One <br> - ERP Consulting </h6>
					</div>
				</div>

				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<div class="feature-block_one-icon flaticon-secure"></div>
						<h6 class="feature-block_one-title">Field Staff <br>Management App</h6>
					</div>
				</div>
				

				<!-- Feature Block One -->
				<div class="feature-block_one">
					<div class="feature-block_one-inner">
						<div class="feature-block_one-icon flaticon-light-bulb"></div>
						<h6 class="feature-block_one-title">Training </h6>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Feature One -->

	<section class="case-one">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Gallery Two Block -->
				<div class="gallery-two_block col-lg-4 col-md-6 col-sm-12">
					<div class="gallery-two_block-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/j6ugQg-2Nsc?si=XNrGLfoXZNghYMGy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/U03g40AaXbI?si=zKCIOx02Uj3OuAnF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
					</div>
				</div>

				<!-- Gallery Two Block -->
				<div class="gallery-two_block col-lg-4 col-md-6 col-sm-12">
					<div class="gallery-two_block-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/32looCFjQU4?si=LXN-TZOPj3HYnQtS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>

				<!-- Gallery Two Block -->
				<div class="gallery-two_block col-lg-4 col-md-6 col-sm-12">
					<div class="gallery-two_block-inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/j6ugQg-2Nsc?si=XNrGLfoXZNghYMGy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>



		</div>
	</section>
	<!-- Steps Two -->
	

	<!-- Gallery Three -->
	<section class="gallery-three">
		<div class="gallery-three_pattern-layer" style="background-image: url(images/background/pattern-6.png)"></div>
		<div class="gallery-three_icon-one" style="background-image: url(images/icons/pattern-1.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="sec-title_title">What we Offer</div>
				<h2 class="sec-title_heading">Our Products </h2>
				<div class="sec-title_separator"></div>
			</div>
		
			<div class="row clearfix">

				<!-- Gallery One Block -->
				<div class="gallery-three_block col-lg-4 col-md-6 col-sm-12">
					<div class="gallery-three_block-inner">
						<div class="gallery-three_block-image">
							<img src="assets/images/gallery/12.jpg" alt="" />
							<div class="gallery-three_block-overlay-two">
								<img class="custom-icon" src="assets/images/icons/hig_mid.svg" alt="Custom Icon">
							</div>
							<div class="gallery-three_block-overlay">
								<div class="gallery-three_block-overlay-content">
									<div class="gallery-three_block-category">ERP Consulting </div>
									<h4 class="gallery-three_block-heading"><a href="traningServDetail.php">SAP Business One ERP </a></h4>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Gallery One Block -->
				<div class="gallery-three_block col-lg-4 col-md-6 col-sm-12">
					<div class="gallery-three_block-inner">
						<div class="gallery-three_block-image">
							<img src="assets/images/gallery/13.jpg" alt="" />
							<div class="gallery-three_block-overlay-two">
								<img class="custom-icon" src="assets/images/icons/hig_mid.svg" alt="Custom Icon">
							</div>
							<div class="gallery-three_block-overlay">
								<div class="gallery-three_block-overlay-content">
									<div class="gallery-three_block-category">FieldStaff Management APP</div>
									<h4 class="gallery-three_block-heading"><a href="fieldsense.php">Field Staff</a></h4>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Gallery One Block -->
				<div class="gallery-three_block col-lg-4 col-md-6 col-sm-12">
					<div class="gallery-three_block-inner">
						<div class="gallery-three_block-image">
							<img src="assets/images/gallery/14.jpg" alt="" />
							<div class="gallery-three_block-overlay-two">
								<img class="custom-icon" src="assets/images/icons/hig_mid.svg" alt="Custom Icon">
							</div>
							<div class="gallery-three_block-overlay">
								<div class="gallery-three_block-overlay-content">
									<div class="gallery-three_block-category">GST Billing Software for Small Businesses</div>
									<h4 class="gallery-three_block-heading"><a href="productDetails.php">Vyapar </a></h4>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Gallery Three -->



	<!-- Testimonial One -->
	<section class="testimonial-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">Our Testimonials</div>
				<h2 class="sec-title_heading">What Client Says?</h2>
				<div class="sec-title_separator"></div>
			</div>
		
			<div class="three-item-carousel owl-carousel owl-theme">

				<!-- Testimonial Block One -->
				<div class="testimonial-block_one">
					<div class="testimonial-block_one-inner">
						<div class="testimonial-block_one-upper-box">
							<div class="testimonial-block_one-author">
								<div class="testimonial-block_one-quote fa-solid fa-quote-left fa-fw"></div>
								<img src="assets/images/resource/author-2.jpg" alt="" />
							</div>
							<div class="testimonial-block_one-text">Mr. Suresh is an outstanding trainer and business consultant. His expertise and practical insights have greatly improved our team's skills and business strategies. His approachable teaching style and dedication have made a significant impact on our professional growth. I highly recommend Suresh for any organization aiming for excellence</div>
						</div>
						<div class="testimonial-block_one-lower-box">
							<h6 class="testimonial-block_one-name">Mr.Manikandan </h6>
							<div class="testimonial-block_one-designation">MD, BUSON Digital Services India (P) Ltd</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block One -->
				<div class="testimonial-block_one">
					<div class="testimonial-block_one-inner">
						<div class="testimonial-block_one-upper-box">
							<div class="testimonial-block_one-author">
								<div class="testimonial-block_one-quote fa-solid fa-quote-left fa-fw"></div>
								<img src="assets/images/resource/author-4.jpg" alt="" />
							</div>
							<div class="testimonial-block_one-text">I feel that our business website is in good professional hands, their level of service and attention to detail was beyond expectations. We will continue to use their services and will not hesitate to strongly recommend anyone for their web designing/development services.</div>
						</div>
						<div class="testimonial-block_one-lower-box">
							<h6 class="testimonial-block_one-name">Mrs.Helen Kenny </h6>
							<div class="testimonial-block_one-designation">Company Secretary , Saraswathi Engineering Construction (P) Ltd</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block One -->
				<div class="testimonial-block_one">
					<div class="testimonial-block_one-inner">
						<div class="testimonial-block_one-upper-box">
							<div class="testimonial-block_one-author">
								<div class="testimonial-block_one-quote fa-solid fa-quote-left fa-fw"></div>
								<img src="assets/images/resource/author-3.jpg" alt="" />
							</div>
							<div class="testimonial-block_one-text">Suresh Murugan is a very talented and dynamic Leader in Information Technology, He has the ability to solve complex problems and Curiously looks forward to learn new things. 
								I have worked with him and a good team playing attitude. I wish him good luck!!</div>
						</div>
						<div class="testimonial-block_one-lower-box">
							<h6 class="testimonial-block_one-name">Mr.Nikhil Karande </h6>
							<div class="testimonial-block_one-designation">India-Sales Manager,  GVS FILTER TECHNOLOGY</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block One -->
				<div class="testimonial-block_one">
					<div class="testimonial-block_one-inner">
						<div class="testimonial-block_one-upper-box">
							<div class="testimonial-block_one-author">
								<div class="testimonial-block_one-quote fa-solid fa-quote-left fa-fw"></div>
								<img src="assets/images/resource/author-1.jpg" alt="" />
							</div>
							<div class="testimonial-block_one-text">We have worked on many projects including  Support, Custom Solution both Web & Mobile apps. His deep understanding on the Business Requirement in terms of Technically & Commercially has been the strength and also the way of getting work done with his interpersonal skills to ensure the SLA are met.</div>
						</div>
						<div class="testimonial-block_one-lower-box">
							<h6 class="testimonial-block_one-name">Mr.Jayan Vijayasankar </h6>
							<div class="testimonial-block_one-designation">Sales Manager – Mena Region , Intellisoft</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!-- End Testimonial One -->


	<!-- Map One -->
	<section class="map-one">
		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1944.3189116722508!2d80.14164448853145!3d12.930983833109408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sG1%2C%20Allwin%20Oasis%20FlatsPlot%20No%2016%20%2C%20%20Sudha%20Avenue%202nd%20Street%20Chitlapakkam%2C%20Chennai%20-%20600064%20!5e0!3m2!1sen!2sin!4v1724665351321!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
										<li><a href="traners.php">Training</a></li>
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

							
									<!--News Widget Block-->
									<h4 class="main-footer_title">Social Media Links </h4>
							
									<div class="right-box d-flex">
										<!-- Header Top Social -->
										<div class="header-top_social">
											<a href="https://www.linkedin.com/in/suresh-murugan-62100642/" aria-label="linkedin"><i style="padding-right: 10px;padding-left: 0px;" class="fab fa-linkedin"></i></a>
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
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/color-settings.js"></script>
<script src="assets/js/script.js"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="assets/js/respond.js"></script><![endif]-->

</body>
</html>