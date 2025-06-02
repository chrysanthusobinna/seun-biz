<!DOCTYPE html>
<html  lang="en">
<head>
<meta charset="utf-8">
<title>@yield('title', '')</title>
<!-- Stylesheets -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="/css/style.css" rel="stylesheet">


<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="/https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->
</head>

<body
>
<div class="page-wrapper">

<!-- Preloader -->
<!-- Preloader -->
<div class="preloader"></div> 

<!-- Main Header-->
<header class="main-header header-style-one" id="home">
	<!-- Header Top -->
	<div class="header-top">
		<div class="inner-container">

			<div class="top-left">
				<!-- Info List -->
				<ul class="list-style-one">
					<li><i class="fa fa-envelope"></i> <a href="mailto:{{ env('COMPANY_EMAIL') }}">{{ env('COMPANY_EMAIL') }}</a></li>
					<li><i class="fa fa-phone"></i> <a href="tel:{{ env('COMPANY_PHONE') }}">{{ env('COMPANY_PHONE') }}</a></li>
				</ul>
			</div>
			
 
		</div>
	</div>
	<!-- Header Top -->

	<!-- Header Lower -->
	<div class="header-lower">
		<!-- Main box -->
		<div class="main-box">
			<div class="logo-box">
				<div class="logo">
                    <a href="{{ route('home') }}" title=""><img src="/images/logo.png" alt="" title=""></a>
        </div>
			</div>

			<!--Nav Box-->
			<div class="nav-outer">
				
				<nav class="nav main-menu">
					<ul class="navigation">
						<li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
						<li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About</a></li>
						<li class="{{ request()->routeIs('service') ? 'current' : '' }}"><a href="{{ route('service') }}">Service</a></li>
						<li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
					</ul>
				</nav>
				<!-- Main Menu End-->

				<div class="outer-box">                        
					<a href="tel:{{ env('COMPANY_PHONE') }}" class="info-btn">
						<img src="/images/icons/icon-phone.png" alt="" class="icon">
						<small>Call Anytime</small>
						<strong>{{ env('COMPANY_PHONE') }}</strong>
					</a>


					<a href="{{ route('contact') }}" class="theme-btn btn-style-one"><span class="btn-title">Book Consultation</span></a>

					<!-- Mobile Nav toggler -->
					<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Header Lower -->

	<!-- Mobile Menu  -->
	<div class="mobile-menu">
		<div class="menu-backdrop"></div>
	
		<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
		<nav class="menu-box">
			<div class="upper-box">
				<div class="nav-logo"><a href="{{ route('home') }}"><img src="/images/logo.png" alt="" title=""></a></div>
				<div class="close-btn"><i class="icon fa fa-times"></i></div>
			</div>
	
			<ul class="navigation clearfix">
				<!--Keep This Empty / Menu will come through Javascript-->
			</ul>
			<ul class="contact-list-one">
				<li>
					<div class="contact-info-box">
						<i class="icon lnr-icon-phone-handset"></i>
						<span class="title">Call Now</span>
						<a href="tel:{{ env('COMPANY_PHONE') }}">{{ env('COMPANY_PHONE') }}</a>
					</div>
				</li>
				<li>
					<div class="contact-info-box">
						<span class="icon lnr-icon-envelope1"></span>
						<span class="title">Send Email</span>
						<a href="mailto:{{ env('COMPANY_EMAIL') }}">{{ env('COMPANY_EMAIL') }}</a>
					</div>
				</li>
				<li>
					<div class="contact-info-box">
						<span class="icon lnr-icon-location"></span>
						<span class="title">Address</span>
						<span>{{ env('COMPANY_ADDRESS') }}</span>
					</div>
				</li>
				<li>
					<div class="contact-info-box">
						<span class="icon fab fa-instagram"></span>
						<span class="title">Instagram</span>
						<a href="{{ env('COMPANY_INSTAGRAM') }}" target="_blank">{{ env('COMPANY_INSTAGRAM') }}</a>
					</div>
				</li>
			</ul>
	
	
			<ul class="social-links">
				<li><a href="/#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="/#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="/#"><i class="fab fa-pinterest"></i></a></li>
				<li><a href="/#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</nav>
	</div><!-- End Mobile Menu -->

	<!-- Header Search -->
	<div class="search-popup">
		<span class="search-back-drop"></span>
		<button class="close-search"><span class="fa fa-times"></span></button>
	
		<div class="search-inner">
			<form method="post" action="https://html.kodesolution.com/2024/immigro-php/index.php">
				<div class="form-group">
					<input type="search" name="search-field" value="" placeholder="Search..." required="">
					<button type="submit"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
	</div>
	<!-- End Header Search -->

	<!-- Sticky Header  -->
	<div class="sticky-header">
		<div class="auto-container">
			<div class="inner-container">
				<!--Logo-->
				<div class="logo">
										<a href="{{ route('home') }}" title=""><img src="/images/logo-3.png" alt="" title=""></a> 
				</div>
	
				<!--Right Col-->
				<div class="nav-outer">
					<!-- Main Menu -->
					<nav class="main-menu">
						<div class="navbar-collapse show collapse clearfix">
							<ul class="navigation clearfix">
								<!--Keep This Empty / Menu will come through Javascript-->
							</ul>
						</div>
					</nav><!-- Main Menu End-->
	
					<!--Mobile Navigation Toggler-->
					<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
				</div>
			</div>
		</div>
	</div><!-- End Sticky Menu -->
</header>
<!--End Main Header -->




@yield('content')

<!-- Main Footer -->
<footer class="main-footer">
	<div class="bg bg-pattern-7"></div>
	<div class="auto-container">
 
		<div class="footer-links text-center mt-4">
			<ul class="user-links list-inline">
				<li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
				<li class="list-inline-item"><a href="{{ route('about') }}">About</a></li>
				<li class="list-inline-item"><a href="{{ route('service') }}">Service</a></li>
				<li class="list-inline-item"><a href="{{ route('contact') }}">Contact</a></li>
			</ul>
		</div>
	</div>
	<!--Footer Bottom-->
	<div class="footer-bottom">
		<div class="auto-container">
			<div class="inner-container">
				<div class="copyright-text">&copy; Copyright reserved by <a href="{{ route('home') }}">Seun Lafe Multibiz</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<script data-cfasync="false" src="/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/js/jquery.js"></script> 
<script src="/js/popper.min.js"></script>
<!--Revolution Slider-->
<script src="/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/select2.min.js"></script>
<script src="/js/swiper.min.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/bxslider.js"></script>
<script src="/js/mixitup.js"></script>
<script src="/intro/intro.js"></script>
<script src="/js/script.js"></script>