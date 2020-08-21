<!DOCTYPE html>
<?php 
if ($value = session('lang')) {
   $lang = session('lang');
} 
?>
<html lang="<?php echo $lang; ?>">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Garden</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800%7CLato:300,400,700" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/flaticon.css') }}" rel="stylesheet" type="text/css">

		<!--Main Slider-->
		<link href="{{ asset('public/assets/css/settings.css') }}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{ asset('public/assets/css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">
		<!--Light box-->
		<link href="{{ asset('public/assets/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css">
		<!-- carousel -->
		<link href="{{ asset('public/assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/owl.transitions.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
<style>
    html:lang(en) .main-menu .navigation li a{
    font-size: 14px;
    }

    html:lang(hi) .main-menu .navigation li a{
        font-size: 16px;
    }

</style>
	</head>
	<body>

		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>
		<!--loader-->

		<!-- HEADER -->
		<!--Start header area-->
		<header class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-sm-12 col-xs-12">
						<div class="logo">
							<a href="index.html"> <img src="{{ asset('public/assets/images/logo.png') }}" alt="Awesome Logo"> </a>
						</div>
					</div>
					<div class="col-lg-10 col-sm-12 col-xs-12">
						<div class="header-contact-info">
							<ul>
								<li>
									<div class="iocn-holder">
										<span class="fa fa-home"></span>
									</div>
									<div class="text-holder">
										<h6>123 Main Street,NW Ste</h6>
										<p>
											Washington, DC,USA
										</p>
									</div>
								</li>
								<li>
									<div class="iocn-holder">
										<span class="fa fa-phone-square"></span>
									</div>
									<div class="text-holder">
										<h6>Call Us On</h6>
										<p>
											1-012-345-6789
										</p>
									</div>
								</li>
								<li>
									<div class="iocn-holder">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="text-holder">
									<select class="form-control">                        
                                        <option>En</option>
                                        <option>Hi</option>                          
                                    </select>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--End header area-->
		<!--Start mainmenu area-->
		<section class="mainmenu-area">
			<div class="container-fluid p-0">
				<div class="mainmenu-bg">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="container-fluid">
							<!--Start mainmenu-->
							<nav class="main-menu navbar-toggleable-md">
								<div class="navbar-header hidden-lg-up">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
									</button>
								</div>
								<div class="navbar-collapse collapse clearfix">                       
                                                                                                  
									<ul class="navigation clearfix">
										<li>
											<a href="#!">{{ __('navbar.menu_home') }}</a>
										</li>
										<li>
											<a href="javascript:avoid(0);">{{ __('navbar.menu_about_kuno') }}</a>
											<ul class="sub-nav">
												<li>
													<a href="#">{{ __('navbar.menu_introduction') }}</a>
												</li>

												<li>
													<a href="#">{{ __('navbar.menu_park_history') }}</a>
												</li>
												<li>
													<a href="#">{{ __('navbar.menu_significance') }}</a>
												</li>
												<li>
													<a href="#">{{ __('navbar.menu_forest_and_vagetation') }}</a>
												</li>
												<li>
													<a href="#">{{ __('navbar.menu_viodiversity') }}</a>
												</li>					
											</ul>
										</li>
										<li>
											<a href="javascript:avoid(0);">{{ __('navbar.menu_tourist_info') }}</a>
											<ul class="sub-nav">
												<li>
													<a href="#">{{ __('navbar.menu_location') }}</a>
                                                </li>
                                                <li>
													<a href="#">{{ __('navbar.menu_weather') }}</a>
                                                </li>
                                                <li>
													<a href="#">{{ __('navbar.menu_safari_zone') }}</a>
                                                </li>
                                                <li>
													<a href="#">{{ __('navbar.menu_excursion_and_charges') }}</a>
                                                </li>
                                                <li>
													<a href="#">{{ __('navbar.menu_poin_of_interest') }}</a>
                                                </li>
                                                <li>
													<a href="#">{{ __('navbar.menu_stay') }}</a>
                                                </li>
                                                <li>
													<a href="#">{{ __('navbar.menu_do_and_dont') }}</a>
                                                </li>
                                                <li>
													<a href="#">{{ __('navbar.menu_safari_booking') }}</a>
												</li>

											</ul>
										</li>
										<li>
											<a href="javascript:avoid(0);">{{ __('navbar.menu_park_management') }}</a>
											<ul class="sub-nav">
												<li>
													<a href="#">{{ __('navbar.menu_administrative_body') }}</a>
												</li>
												<li>
													<a href="#">{{ __('navbar.menu_goals_and_objectives') }}</a>
                                                </li>
                                                <li>
													<a href="#">{{ __('navbar.menu_other_activity') }}</a>
												</li>
												<li>
													<a href="#">{{ __('navbar.menu_RTI') }}</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:avoid(0);">{{ __('navbar.menu_news_corner') }}</a>
											<ul class="sub-nav">

												<li>
													<a href="#">{{ __('navbar.menu_latest_news') }}</a>
												</li>
											</ul>
										</li>
                                        <li>
											<a href="#">{{ __('navbar.menu_gallery') }}</a>
										</li>
										<li>
											<a href="#">{{ __('navbar.menu_contact') }}</a>
										</li>
                                    </ul>  
                                            
									<!-- ==========================
									Mobile Nav
									============================ -->
									<ul class="mobile-menu clearfix">
										<li>
											<a href="#!">Home</a>								
										</li>								
										<li>
											<a href="javascript:avoid(0);">About Kuno</a><span class="submenu-button"></span>
											<ul class="sub-nav">
												<li>
													<a href="services.html">Introduction</a>
												</li>

												<li>
													<a href="services-details.html">Park History </a>
												</li>
												<li>
													<a href="services-details.html"> Significance </a>
												</li>
												<li>
													<a href="services-details.html"> Forest and Vegetation </a>
												</li>
												<li>
													<a href="services-details.html"> Viodiersity </a>
												</li>					
											</ul>
										</li>
										<li>
											<a href="javascript:avoid(0);">Tourist Information</a><span class="submenu-button"></span>
                                            <ul class="sub-nav">
												<li>
													<a href="#">Location</a>
                                                </li>
                                                <li>
													<a href="#">Weather</a>
                                                </li>
                                                <li>
													<a href="#">Safari Zones</a>
                                                </li>
                                                <li>
													<a href="#">Excursion and Charges</a>
                                                </li>
                                                <li>
													<a href="#">Point of Interest</a>
                                                </li>
                                                <li>
													<a href="#">Stay</a>
                                                </li>
                                                <li>
													<a href="#">Do(s) and Don't(s)</a>
                                                </li>
                                                <li>
													<a href="#">Safari Booking</a>
												</li>

											</ul>
										</li>
										<li>
											<a href="javascript:avoid(0);">Park Management</a><span class="submenu-button"></span>
											<ul class="sub-nav">
												<li>
													<a href="#">Administrative Body</a>
												</li>
												<li>
													<a href="#">Goals and Objectioves</a>
                                                </li>
                                                <li>
													<a href="#">Other Activities</a>
												</li>
												<li>
													<a href="#">RTI</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:avoid(0);">News Corner</a><span class="submenu-button"></span>
                                            <ul class="sub-nav">

                                            <li>
                                                <a href="#">Latest News</a>
                                            </li>
                                            </ul>
										</li>
                                        <li>
											<a href="contact.html">Gallery</a>
										</li>
										<li>
											<a href="contact.html">Contact</a>
										</li>
									</ul>
								</div>
							</nav>
							<!--End mainmenu-->
                        </div>
                        </div>
					</div>
					<div class="right-column">
						<div class="right-area">
							<!-- <div class="nav_side_content">
								<div class="search_option">
									<button class="search tran3s dropdown-toggler color1_bg" id="searchDropdown">
										<i class="fa fa-search" aria-hidden="true"></i>
									</button>
									<form action="#" class="dropdown-menu dropdown-input">
										<input type="text" placeholder="Search...">
										<button class="close-input">
											<i class="fa fa-close" aria-hidden="true"></i>
										</button>
									</form>
								</div>
							</div> -->
							<div class="link_btn float_right" style="">
                                <a href="contact.html" class="thm-btn bg-clr1">GET A Quote</a>                           
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End mainmenu area-->
		<!-- END HEADER -->

        <main class="py-4">
            @yield('content')
        </main>

		<!--Footer Section Start-->
		<footer class="main_footer__block">
			<div class="top_footer_info__block ptb-20">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="single_info__block">
								<i class="fa fa-phone"></i>
								<h4>0(000) 000 000 <span>Monday-Friday, 8am-7pm</span></h4>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single_info__block">
								<i class="fa fa-envelope-o"></i>
								<h4>business@support.com <span>Monday-Friday, 8am-7pm</span></h4>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single_info__block">
								<i class="fa fa-bullhorn"></i>
								<h4>Request a quote <span>Get all the information</span></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pb-0 pt-60 footer-link">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="footer_box__block">
								<h4>About Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, architecto, asperiores. Recusandae ea a culpa eligendi, harum amet cumque quod.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sequi, fuga rem aperiam expedita ipsum.
								</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="footer_box__block">
								<h4>Latest Blog Post</h4>
								<ul>
									<li>
										<a href="#">Start your own agency</a>
									</li>
									<li>
										<a href="#">How to cool down quality</a>
									</li>
									<li>
										<a href="#">Make something awesome</a>
									</li>
									<li>
										<a href="#">Plane your summer vacation</a>
									</li>
									<li>
										<a href="#">There are sunlight to enjoy</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="footer_box__block">
								<h4>Our Project</h4>
								<ul>
									<li>
										<a href="#">Go get an ice-cream</a>
									</li>
									<li>
										<a href="#">Become the best version</a>
									</li>
									<li>
										<a href="#">Eat, Sleep and have fun</a>
									</li>
									<li>
										<a href="#">Start the journy to the top</a>
									</li>
									<li>
										<a href="#">Can you do this for us?</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="footer_box__block address-box">
								<h4>Contact info</h4>
								<ul>
									<li>
										<i class="fa fa-phone"></i>
										<p>
											Call Us +56 (0) 012 345 6789
										</p>
									</li>
									<li>
										<i class="fa fa-envelope-o"></i>
										<p>
											<a href="mailto:info@example.com">business@support.com</a>
										</p>
									</li>
									<li>
										<i class="fa fa-map-marker"></i>
										<p>
											123 Main Street, St. NW Ste, 1 Washington, DC,USA.
										</p>
									</li>
									<li>
										<i class="fa fa-clock-o"></i>
										<p>
											Monday-Firday, 9am-6pm;
											<br>
											Sunday Closed
										</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="copyriight_block ptb-20 mt-20">
						<div class="row">
							<div class="col-md-6 col-lg-3">
								<a href="#" class="footer__block-logo"><img src="{{ asset('public/assets/images/footer-logo.png') }}" alt=""></a>
							</div>
							<div class="col-md-6 col-lg-3 text-right">
								<p>
									All Rights Reserved
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</footer>
		<!--Footer Section End-->

		<script type="text/javascript" src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/assets/js/tether.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
		<!-- revolution Js -->
		<script type="text/javascript" src="{{ asset('public/assets/js/jquery.themepunch.tools.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/assets/js/revolution.extension.slideanims.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/assets/js/revolution.extension.layeranimation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/assets/js/revolution.extension.navigation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/assets/js/revolution.extension.parallax.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/assets/js/jquery.revolution.js') }}"></script>
		<!-- fancybox Js -->
		<script src="{{ asset('public/assets/js/jquery.mousewheel-3.0.6.pack.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/assets/js/jquery.fancybox.pack.js') }}" type="text/javascript"></script>

		<!-- masonry,isotope Effect Js -->
		<script src="{{ asset('public/assets/js/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/assets/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/assets/js/masonry.pkgd.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/assets/js/jquery.appear.js') }}" type="text/javascript"></script>
		<!-- parallax Js -->
		<script src="{{ asset('public/assets/js/jquery.parallax-1.1.3.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/assets/js/jquery.appear.js') }}" type="text/javascript"></script>
		<!-- matchHeight Js -->
		<script src="{{ asset('public/assets/js/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
		<!-- popup -->
		<script src="{{ asset('public/assets/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="{{ asset('public/assets/js/owl.carousel.js') }}" type="text/javascript"></script>
		<!-- Accordion Js -->
		<script type="text/javascript" src="{{ asset('public/assets/js/jquery.accordion.js') }}"></script>
		<!-- map -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="{{ asset('public/assets/js/map.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/assets/js/validation.js') }}"></script>
		<script src="{{ asset('public/assets/js/custom.js') }}" type="text/javascript"></script>

	</body>
</html>
