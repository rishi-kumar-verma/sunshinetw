<!DOCTYPE html>
<html>

<!-- Mirrored from html.themexriver.com/pixer/testimonial.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 09:25:37 GMT -->
<head>
<meta charset="utf-8">
<title>Interact Tech Solution | Testimonial</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/fivi.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / Header Style Two-->
    <header class="main-header">

			<!--Header-Upper-->
			<div class="header-upper">
				<div class="auto-container">
					<div class="clearfix">

						<div class="pull-left logo-box">
							<div class="logo"><a href="{{url('/')}}"><img src="images/logo.png" alt="" title=""></a></div>
						</div>

						<div class="nav-outer clearfix">

							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class=" "><a href="{{url('home')}}">Home</a>

										</li>
										<li class=" current dropdown"><a href="#">About Us</a>
											<ul>
												<li><a href="{{url('about')}}">About Us</a></li>
												<li><a href="{{url('team')}}">Our Team</a></li>
												<li><a href="{{url('testimonial')}}">Testimonial</a></li>
											</ul>
										</li>
										<li><a href="{{url('services')}}">Services</a></li>
										<li><a href="{{url('portfolio')}}">Portfolio </a></li>

										<li><a href="{{url('blog-list')}}">Blog</a></li>

										<li><a href="{{url('contact')}}">Contact us</a></li>
									</ul>
								</div>

							</nav>

						</div>

					</div>
				</div>
			</div>
			<!--End Header Upper-->

			<!--Sticky Header-->
			<div class="sticky-header">
				<div class="auto-container clearfix">
					<!--Logo-->
					<div class="logo pull-left">
						<a href="{{url('/')}}" class="img-responsive"><img src="images/logo.png" alt="" title=""></a>
					</div>

					<!--Right Col-->
					<div class="right-col pull-right">
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
							<ul class="navigation clearfix">
										<li ><a href="{{url('home')}}">Home</a>

										</li>
										<li class="dropdown"><a href="#">About Us</a>
											<ul>
												<li><a href="{{url('about')}}">About Us</a></li>
												<li><a href="{{url('team')}}">Our Team</a></li>
												<li><a href="{{url('testimonial')}}">Testimonial</a></li>
											</ul>
										</li>
										<li><a href="{{url('services')}}">Services</a></li>
										<li><a href="{{url('portfolio')}}">Portfolio </a></li>

										<li><a href="{{url('blog-list')}}">Blog</a></li>

										<li class="current "><a href="{{url('contact')}}">Contact us</a></li>
									</ul>
						</div>
					</nav><!-- Main Menu End-->
				</div>

			</div>
		</div>
		<!--End Sticky Header-->
		
	</header>
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.png)">
    	<div class="auto-container">
			<div class="content">
				<h1><span>{{$banner->title}}</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="{{url('home')}}">Home</a></li>
					<li>Testimonials</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Testimonial Page Section -->
	<section class="testimonial-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">TESTIMONIALS</div>
				<h2>We are very happy with <br> client’s  <span>reviews</span></h2>
			</div>
			
			<div class="row clearfix">
				@foreach($second as $second)
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="circle-box"></div>
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="image-outer">
							<a href="#" class="social-icon fa fa-instagram"></a>
							<div class="image">
								<img src="{{ asset('images/resource/'.$second->image) }}" alt="" />
							</div>
						</div>
						<div class="text">{{$second->reviews}}</div>
						<h5>{{$second->name}}</h5>
						<div class="designation">{{$second->designation}}</div>
					</div>
				</div>
				
				@endforeach
				
			</div>
			
		</div>
	</section>
	<!-- End Testimonial Page Section -->
	
<!--Main Footer-->
<footer class="main-footer style-two">
		<div class="auto-container">
			<!--Widgets Section-->
			<div class="widgets-section">
				<div class="row clearfix">

					<!--Column-->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!--Footer Column-->
							<div class="footer-column col-lg-7 col-md-6 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="logo">
										<a href="{{url('home')}}"><img src="images/footer-logo.png" alt="" /></a>
									</div>
									<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
									<ul class="list-style-one">
										<li><span class="icon fa fa-phone"></span> +123 (4567) 890</li>
										<li><span class="icon fa fa-envelope"></span> info@its.com </li>
										<li><span class="icon fa fa-home"></span>380 St Dummy Road, lahore <br> VIC 3004, Pakistan</li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
							<div class="footer-column col-lg-5 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h4>Links</h4>
									<ul class="list-link">
										<li><a href="{{url('home')}}">Home</a></li>
										<li><a href="{{url('services')}}">Services</a></li>
										<li><a href="{{url('about')}}">About us</a></li>
										<li><a href="{{url('testimonial')}}">Testimonials</a></li>
										<li><a href="#">News</a></li>
										<li><a href="{{url('contact')}}">Contact</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					
					<!--Column-->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h4>Support</h4>
									<ul class="list-link">
										<li><a href="{{url('contact')}}">Contact Us</a></li>
										<li><a href="#">Submit a Ticket</a></li>
										<li><a href="#">Visit Knowledge Base</a></li>
										<li><a href="#">Support System</a></li>
										<li><a href="#">Refund Policy</a></li>
										<li><a href="#">Professional Services</a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget gallery-widget">
									<h4>Gallery</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-1.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-2.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-3.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-4.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-5.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-6.jpg" alt=""></a></figure>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container">
					<div class="row clearfix">
						<!-- Copyright Column -->
						<div class="copyright-column col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">2020 &copy; All rights reserved by <a href="#">ITS</a></div>
						</div>
						
						<!-- Social Column -->
						<div class="social-column col-lg-6 col-md-6 col-sm-12">
							<ul>
								<li class="follow">Follow us: </li>
								<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
								<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
								<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
								<li><a href="#"><span class="fa fa-google-plus-square"></span></a></li>
								<li><a href="#"><span class="fa fa-rss-square"></span></a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>

<!-- Mirrored from html.themexriver.com/pixer/testimonial.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 09:25:37 GMT -->
</html>