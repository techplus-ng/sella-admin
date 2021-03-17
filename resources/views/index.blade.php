<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Sella</title>
  		{{-- <meta charset="utf-8"> --}}
		{{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
		<meta name="description" content="Sella helps you to re-stock your shop at the best prices. You can order for the products you sell from the comfort of your shop and you get the stock in 24 hours.">
		<meta name="author" content="Sella">
		<meta name="generator" content="Jekyll v4.1.1">
		<meta name="keywords" content="Shopping, eCommerce, Stores, Foods, Groceries, Health, PZ, Promasidor, Shops, Retails, Headlines, Technology, Twitter, Google, Facebook, Youtube" />
		<title>Sella</title>

	    <meta property="fb:app_id" content="408694093597122" />
	    <meta property="og:title" content="Get Sella"/>
	    <meta property="og:image" content="images/sella-img.png"/>
	    <meta property="og:url" content="{{ Request::url() }}"/>
	    <meta property="og:site_name" content="Sella"/>
	    <meta property="og:type" content="article"/>
	    <meta property="og:description" content="Sella helps you to re-stock your shop at the best prices. You can order for the products you sell from the comfort of your shop and you get the stock in 24 hours."/>

	    {{-- Twitter Section --}}
	    <meta name="twitter:title" content="Get Sella" />
	    <meta name="twitter:image" content="images/sella-img.png')}}" />
	    <meta name="twitter:url" content="{{env("APP_URL")}}" />
	    <meta name="twitter:card" content="Sella helps you to re-stock your shop at the best prices. You can order for the products you sell from the comfort of your shop and you get the stock in 24 hours." />
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
		<!-- Bootstrap , fonts & icons  -->
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/fonts/icon-font/css/style.css">
		<link rel="stylesheet" href="assets/fonts/typography-font/typo.css">
		<link rel="stylesheet" href="assets/fonts/fontawesome-5/css/all.css">
		<!-- Plugin'stylesheets  -->
		<link rel="stylesheet" href="assets/plugins/aos/aos.min.css">
		<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
		<link rel="stylesheet" href="assets/plugins/nice-select/nice-select.min.css">
		<link rel="stylesheet" href="assets/plugins/slick/slick.min.css">
		<!-- Vendor stylesheets  -->
		<link rel="stylesheet" href="assets/css/main.css">
		<!-- Custom stylesheet -->
	</head>
	<body data-theme="light">
	  <div class="site-wrapper overflow-hidden ">
	    <div id="loading">
	      <img src="assets/image/preloader.gif" alt="">
	    </div>
	    <!-- Header Area -->
	    <!-- Header Area -->
	    <header class="site-header site-header--menu-right px-7 px-lg-10 z-index-99 dynamic-sticky-bg site-header--absolute site-header--sticky">
	      <div class="container-fluid">
	        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0">
	          <!-- Brand Logo-->
	          <div class="brand-logo mt-3 mt-md-0"><a href="https://getsella.com/">
	              <!-- light version logo (logo must be black)-->
	              <img src="assets/image/sella-logo.png')}}" alt="" class="light-version-logo">
	              <!-- Dark version logo (logo must be White)-->
	              <img src="assets/image/logo-main-white.png')}}" alt="" class="dark-version-logo">
	            </a>
	          </div>
	          <div class="collapse navbar-collapse" id="mobile-menu">
	            <div class="navbar-nav-wrapper">
	              <ul class="navbar-nav main-menu">
	                <li class="nav-item">
	                  <a class="nav-link" href="#retailer-link" role="button" aria-haspopup="true" aria-expanded="false">For Retailers</a>
	                </li>

	                @if(Auth::check())
						<li class="nav-item">
		                  <a class="nav-link" href="{{url('dashboard')}}">For Retailers</a>
		                </li>
					@endif
	                <li class="nav-item">
	                  <a class="nav-link" href="#supplier-link" role="button" aria-expanded="false"> For Brands </a>
	                </li>
	              </ul>
	            </div>
	            <button class="d-block d-lg-none offcanvas-btn-close" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
	              <i class="gr-cross-icon"></i>
	            </button>
	          </div>
	          <div class="header-btn ml-auto ml-lg-6 d-none d-sm-block">
	            <a class="btn btn btn-pumpkin btn-sm-2 rounded-5 h-50 font-size-5 font-weight-bold" href="#contacts">
	              </i> Contact Us
	            </a>
	          </div>
	          <!-- Mobile Menu Hamburger-->
	          <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
	            <!-- <i class="icon icon-simple-remove icon-close"></i> -->
	            <span class="hamburger hamburger--squeeze js-hamburger">
	          <span class="hamburger-box">
	            <span class="hamburger-inner"></span>
	            </span>
	            </span>
	          </button>
	          <!--/.Mobile Menu Hamburger Ends-->
	        </nav>
	      </div>
	    </header>
	    <!-- navbar- -->
	    <!-- End Header Area -->
	    <!-- heroSix Area -->
	    <div class="position-relative pt-25 pt-md-31 pt-lg-35 pb-15 pb-md-19 pb-lg-33 position-relative overflow-hidden">
	      <div class="container position-static">
	        <div class="row align-items-center justify-content-center position-static">
	          <!-- Hero Image -->
	          <div class="col-xl-6 col-lg-6 col-md-9 col-xs-8 position-static">
	            <div class="l6-hero-image-group">
	              <img class="w-100 banner-image" src="assets/image/home-6/png/banner-img.png" alt="" data-aos="fade-up" data-aos-once="true">

	            </div>
	          </div>
	          <!-- End Hero Image -->
	          <!-- Hero Content -->
	          <div class="col-lg-6 col-md-9 col-sm-11">
	            <div class="mt-8 mt-lg-0 pr-md-11 pr-lg-0 pr-xl-10" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
	              <h1 class="font-size-13 mb-8 pr-xs-31 pr-sm-21 pr-md-10 pr-lg-0 line-height-84">Go Digital with Retail Distribution</h1>
	              <p class="font-size-banner mb-0 pr-sm-10 pr-md-10 pr-lg-0 pr-xl-banner">Access thousands of retailers across the country with just a click or two on Sella. Focus on creation and leave distribution to us.</p>
	              <div class="mt-10">
	                <a class="btn btn-dark-green btn-4 rounded-5" href="#download">Download now</a>
	            
	              </div>
	            </div>
	          </div>
	          <!-- End Hero Content -->
	        </div>
	      </div>
	      <div class="absolute-bottom-right mb-13 mb-md-17 mb-lg-26 d-none d-sm-block mr-n25 mr-md-n15 mr-lg-n7" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
	        <img class="w-50 w-md-75 w-lg-100" src="assets/image/home-6/png/quadrant-blue.png" alt="">
	      </div>
	    </div>
	    <!-- End heroSix Area -->
	    <!-- videoLink Area -->
	    <div class="bg-purple-heart py-10">
	      <div class="container">
	        <div class="row justify-content-center">
	          <div class="col-12">
	            <div class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
	              <a class="video-btn text-white font-size-6 mb-0" href="https://www.youtube.com/watch?v=LWZ7iytIA6k">
	                <span class="text-golden-yellow mr-3">
	                                <i
	                                class="fa fa-play-circle"></i>
	                            </span> Stock up in five easy steps with Sella
	              </a>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <!-- End videoLink Area -->

	    <!-- Sella snippets -->
	    <div class="pt-14 pt-md-18 pt-lg-24 pb-15 pb-md-19 pb-lg-28 position-relative">

	      <div class="container">
	        <!-- Section Title -->
	        <div class="row justify-content-center">
	          <div class="col-xl-7 col-lg-8 col-md-10">
	            <div class="text-center mb-13 mb-lg-21">
	              <h2 class="font-size-11 mb-7" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Why choose Sella?</h2>
	              <p class="font-size-7 mb-0 px-xl-10" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">With a simple click on Sella, your shop is restocked no matter where you are.</p>
	            </div>
	          </div>
	        </div>
	        <!-- End Section Title -->
	        <div class="row">
	          <div class="col-12">
	            <div class="l6-testimonial">
	              <!-- 1 snippets -->
	              <div class="single-testimoial bg-white border border-default-color-5 rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	               
	                <div class="d-flex align-items-center">
	                  <div class="mr-6">
	                    <img src="assets/image/home-6/png/slide-icon.png" alt="">
	                  </div> 
	                  <div class="info">
	                    <h5 class="font-size-7 text-dark-cloud mb-0">Access Retailers</h5>
	                     <p class="font-size-5 text-stone mb-0">Market development and penetration becomes easier with Sella. You can get your products 
	                     delivered to as many retailers across the continent through Sella.
	                     </p>            
	                  </div>
	                </div>
	              </div>
	              <!-- End 1 snippets -->
	              <!-- 2 snippets -->
	              <div class="single-testimoial bg-white border border-default-color-5 rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	               
	                <div class="d-flex align-items-center">
	                  <div class="mr-6">
	                    <img src="assets/image/home-6/png/slide-icon.png" alt="">
	                  </div> 
	                  <div class="info">
	                    <h5 class="font-size-7 text-dark-cloud mb-0">Profit-Oriented</h5>
	                     <p class="font-size-5 text-stone mb-0">Sella provides brands a digitally innovative 
	                     channel for transporting goods to retailers in time of need. This way both the retailer and manufacturer will meet their target.  
	                     </p>            
	                  </div>
	                </div>
	              </div>
	              <!-- End 2 snippets -->
	              <!-- 3 snippets -->
	              <div class="single-testimoial bg-white border border-default-color-5 rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	               
	                <div class="d-flex align-items-center">
	                  <div class="mr-6">
	                    <img src="assets/image/home-6/png/slide-icon.png" alt="">
	                  </div> 
	                  <div class="info">
	                    <h5 class="font-size-7 text-dark-cloud mb-0">Market Insight</h5>
	                     <p class="font-size-5 text-stone mb-0">Get data insights about your 
	                     business performance in the retail market in comparison with other businesses. 
	                     </p>
	                     <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>                
	                  </div>
	                </div>
	              </div>
	              <!-- End 3 snippets -->
	              <!-- 4 snippet -->
	              <div class="single-testimoial bg-white border border-default-color-5 rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	               
	                <div class="d-flex align-items-center">
	                  <div class="mr-6">
	                    <img src="assets/image/home-6/png/slide-icon.png" alt="">
	                  </div> 
	                  <div class="info">
	                    <h5 class="font-size-7 text-dark-cloud mb-0">Price Check</h5>
	                     <p class="font-size-5 text-stone mb-0">Make use of the in-app price 
	                     check tool to discover prices charged by thousands of retailers for the same goods.
	                     </p>
	                     <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>                
	                  </div>
	                </div>
	              </div>
	              <!-- End 4 snippet -->
	              <!-- 5 snippet -->
	              <div class="single-testimoial bg-white border border-default-color-5 rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	               
	                <div class="d-flex align-items-center">
	                  <div class="mr-6">
	                    <img src="assets/image/home-6/png/slide-icon.png" alt="">
	                  </div> 
	                  <div class="info">
	                    <h5 class="font-size-7 text-dark-cloud mb-0">Get Reviews</h5>
	                     <p class="font-size-5 text-stone mb-0">Get in-app reviews of your 
	                     product or promotions from Agents and retailers after deliveries have been made.
	                     </p>
	                     <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>            
	                  </div>
	                </div>
	              </div>
	              <!-- End 5 snippet -->                                                        

	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <!-- End Sella snippet Area -->

	    <!-- contentOne Area -->
	    <div class="bg-default-6 pt-14 pt-md-19 pt-lg-34 pb-9 pb-md-14 pb-lg-34 overflow-hidden position-relative">
	      <div class="container">
	        <div class="row align-items-center justify-content-center justify-content-lg-start">
	          <!-- Content Section -->
	          <div class="col-xl-5 col-lg-6 col-md-8 col-xs-10 order-2 order-md-1">
	            <div class="pt-7 pb-7 pr-sm-5 pr-md-9 pr-lg-0">
	              <p class="font-size-7 mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">HOW IT WORKS</p>
	              <br>
	                <h2 class="font-size-11 mb-9 pr-sm-18 pr-md-10 pr-lg-5 pr-xl-5" id="retailer-link" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Register as a Retailer</h2>
	          
	                <p class="list font-size-7 mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Create an account, its FREE.</p>
	                <p class="list font-size-7 mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Select the products you want to restock.</p>
	                <p class="list font-size-7 mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Choose how to pay &#91; Bank Transfer, Card, Pay on Delivery &#93;.</p>
	                <p class="list font-size-7 mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Place your order.</p>            
	                <p class="list font-size-7 mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Get your goods in 24 hours</p>
	               <div class="mt-13" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
	                <a class="btn btn-dark-blue btn-3 rounded-5" href="#download">Download Now</a>
	               </div>
	            </div>
	          </div>
	          <!-- Content Image Section -->
	          <div class="col-xl-6 offset-xl-1 col-lg-6 col-xs-4 order-1 order-md-2">
	            <div class="l6-content-image-group-2 ml-lg-18">
	              <!--<div class="img-1">
	                <img class="w-100" src="assets/image/home-6/png/yellow-small-shape.png" alt="" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
	              </div>
	              -->
	              <div class="img-1">
	                <img class="w-100" src="assets/image/home-6/png/dots.png" alt="" data-aos="fade-down" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
	              </div>
	              <div class="img-2">
	                <img class="w-100" src="assets/image/home-6/png/retail-him.png" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <!-- End contentOne Area -->
	    <!-- contentTwo Area -->
	    <div class="pt-23 pt-md-25 pt-lg-33 pb-11 pb-md-14 pb-lg-33 overflow-hidden position-relative">
	      <div class="container">
	        <div class="row align-items-center justify-content-center justify-content-lg-start">
	          <div class=" col-lg-5 col-md-4 col-xs-5">
	            <div class="l6-content-image-group-3 mr-md-0 mr-lg-15 mr-xl-12">
	              <div class="img-1">
	                <img class="w-100" src="assets/image/home-6/png/square-blue.png" alt="" data-aos="fade-down" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
	              </div>
	              <div class="img-2">
	                <img class="w-100" src="assets/image/home-6/png/supply.png" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
	              </div>
	            </div>
	          </div>
	          <div class="col-xl-6 col-lg-7 col-md-8 col-xs-10 ml-xl-19">
	            <div class="pt-5 pb-7 pr-sm-5 pr-md-0 ml-md-10 ml-xl-0">
	              <p class="font-size-7 mb-0 pr-lg-0 pr-xl-22" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">HOW IT WORKS</p>
	              <br>
	              <h2 class="font-size-11 mb-9 pr-xs-10 pr-md-0" id="supplier-link" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Register as a Brand owner.</h2>
	                <p class="list font-size-7 mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Create a supplier account</p>
	                <p class="list font-size-7 mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Share Product evidence </p>
	                <p class="list font-size-7 mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Fix or set a budget.</p>
	                <p class="list font-size-7 mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Get the product delivered to Sella warehouse.</p>            
	              <div class="mt-13" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
	                <a class="btn btn-dark-blue btn-3 rounded-5" href="#">Signup Now</a>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <!-- End contentTwo Area -->

	    <!-- StartClients -->

	        <div class="bg-default-6">
	          <div class="container">
	            <div class="border-bottom pt-13 pt-md-18 pt-lg-21 pb-13 pb-md-17 pb-lg-22">
	                <div class="col-lg-6 col-md-9">
	                  <div class="text-center text-lg-left mb-13 mb-lg-0">
	                    <h3 class="font-size-9 mb-7" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
	                    Trusted by
	                    </h3>
	                  </div>
	                </div>
	            </div>
	          </div>
	        </div>
	        <div class="container">
	            <div class="row">
	              <div class="col-12">
	                <div class="l6-client">
	                  <!-- client 1 -->
	                      <div class="single-client bg-white border border-default-color-5 rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="assets/image/home-6/png/client-1.png" class="black"  alt="">
	                        </div>
	                      </div>
	                  <!-- client 1 -->
	                  <!-- client 2 -->
	                      <div class="single-client bg-white border border-default-color-5 rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="assets/image/home-6/png/client-2.png" class="black"  alt="">
	                        </div>
	                      </div>
	                  <!-- client 2 -->
	                  <!-- client 3 -->
	                      <div class="single-client bg-white border border-default-color-5 rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="assets/image/home-6/png/client-3.png" class="black"  alt="">
	                        </div>
	                      </div>
	                  <!-- client 3 -->
	                  <!-- client 4 -->
	                      <div class="single-client bg-white border border-default-color-5 rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="assets/image/home-6/png/client-4.png" class="black"  alt="">
	                        </div>
	                      </div>
	                  <!-- client 4 -->
	                  <!-- client 5 -->
	                      <div class="single-client bg-white border border-default-color-5 rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="assets/image/home-6/png/client-5.png" class="black" alt="">
	                        </div>
	                      </div>
	                  <!-- client 5 -->
	                  <!-- client 6 -->
	                      <div class="single-client bg-white border border-default-color-5 rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="assets/image/home-6/png/client-6.png" class="black" alt="">
	                        </div>
	                      </div>
	                  <!-- client 6 -->                              

	                </div>
	              </div>
	            </div>
	          </div>    

	    <!-- EndClients -->



	    <!-- PromoArea Area -->
	    <div class="bg-default-6 foot-blue">
	      <div class="container">
	        <div class="border-bottom pt-13 pt-md-18 pt-lg-21 pb-13 pb-md-17 pb-lg-22">
	          <div class="row align-items-center justify-content-center">
	            <div class="col-lg-6 col-md-9">
	              <div class="text-center text-lg-left mb-13 mb-lg-0">
	                <h3 class="font-size-9 mb-7" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
	                  Download our mobile app.</h3>
	                <p class="font-size-6 mb-0 " data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true"> 
	                Esse laboris dolor cupidatat irure occaecat nostrud..</p>
	              </div>
	            </div>
	            <div class="col-lg-5 offset-xl-1 col-md-8 col-sm-10">
	              <div class="text-center text-lg-left px-10 px-xs-0">
	                <h5 class="font-size-6 text-oxford-blue opacity-7 font-weight-normal mb-7 ml-lg-6" id="download"data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Available on</h5>
	                <div class="btn-group text-center text-sm-left d-sm-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
	                  <div class="w-100  mb-3 mb-lg-0 mx-auto mx-sm-3 text-center">
	                    <a href="https://www.apple.com/app-store/"><img class="min-w-210 max-h-64" src="assets/image/home-6/png/app-store.svg" alt="" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true"></a>
	                  </div> 
	                  <div class="w-100 mb-3 mb-lg-0 mx-auto mx-xs-3">
	                    <a href="https://play.google.com/store/apps/details?id=com.getsella.client"><img class="min-w-210 max-h-64" src="assets/image/home-6/png/play-store.svg" alt="" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500" data-aos-once="true"></a>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <!-- End PromoArea Area -->
	    <!-- Footer Area -->
	    <footer>
	      <div class="bg-default-6 foot-blue pt-13 pt-lg-23 pb-7 position-relative">
	        <div class="container">
	          <div class="row pb-lg-18">
	            <div class="col-lg-4 col-md-5 col-md-3 col-xs-8">
	              <div class="pr-xl-20 mb-11 mb-lg-0">
	                <div class="brand-logo mb-8">
	                  <a href="javascript:">
	                    <img class="mx-auto mx-0 light-version-logo default-logo" src="assets/image/sella-logo.png" alt="">
	                    <img src="assets/image/sella-logo.png" alt="" class="dark-version-logo mx-auto mx-0">
	                  </a>
	                </div>
	                <p class="font-size-5 mb-0 heading-default-color pr-xs-15 pr-sm-22 pr-md-10 pr-lg-15 pr-xl-10 opacity-7">
	                Sella is a distributor app for Shopkeepers and store owners – A one-of-its-kind platform that gives manufacturers easy access to retailers, and retailers easy access to the best FMCG Brands, at best prices.</p>
	              </div>
	            </div>
	            <div class="col-lg-8">
	              <div class="row">

	                <!-- Single Widgets -->
	                <div class="col-xl-4 col-lg-3 col-md-4 col-xs-6">
	                  <div class="mb-10 mb-lg-0">
	                    <h4 class="font-size-5 opacity-4 mb-10" id="contacts">Contact information</h4>
	                    <ul class="list-unstyled">
	                      <li class="mb-7"><p class="font-size-5 text-default-color-2 ">Feel free to get in touch with us via phone or send us a message.</p></li>
	                      <li class="mb-7"><p class="font-size-5 text-default-color-2 "> <span id="red-color"> info@techplus.com.ng <br> +234 704 736 0093 </span></p></li>
	                    </ul>
	                  </div>
	                </div>
	                <!-- End Single Widgets -->
	                <!-- Single Widgets -->
	                <div class="col-xl-4 col-lg-5 col-md-4 col-xs-8">
	                  <div class="mb-10 mb-lg-0">
	                    <h4 class="font-size-5 opacity-4 mb-10">Follow us on social media</h4>
	                    <ul class="footer-social-link d-flex align-items-center justify-content-between list-unstyled flex-wrap mb-10">
	                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="#">Facebook</a></li>
	                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="#">.</a></li>
	                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="#">Twitter</a></li>
	                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="#">.</a></li>
	                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="#">Instagram</a></li>
	                    </ul>
	                  </div>
	                  <!-- <div class="border-top border-default-color-4 pt-10">
	                    <div class="mb-3">
	                      <img class="w-100" src="assets/image/home-6/png/payment-1.png" alt="">
	                    </div>
	                    <div class="mb-3">
	                      <img class="w-100" src="assets/image/home-6/png/payment-2.png" alt="">
	                    </div> -->
	                  </div>
	                </div>
	                <!-- End Single Widgets -->
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </footer>
	    <!-- End Footer Area -->
	  </div>
	  <!-- Vendor Scripts -->
	  <script src="assets/js/vendor.min.js"></script>
	  <!-- Plugin's Scripts -->
	  <script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
	  <script src="assets/plugins/nice-select/jquery.nice-select.min.js"></script>
	  <script src="assets/plugins/aos/aos.min.js"></script>
	  <script src="assets/plugins/slick/slick.min.js"></script>
	  <script src="assets/plugins/counter-up/jquery.counterup.min.js"></script>
	  <script src="assets/plugins/counter-up/jquery.waypoints.min.js"></script>
	  <!-- Activation Script -->
	  <script src="assets/js/custom.js"></script>
	</body>
</html>
