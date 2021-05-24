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
	    <meta name="twitter:image" content="images/sella-img.png" />
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
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('assets/fonts/icon-font/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('assets/fonts/typography-font/typo.css')}}">
		<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-5/css/all.css')}}">
		<!-- Plugin'stylesheets  -->
		<link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fancybox/jquery.fancybox.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/nice-select/nice-select.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.min.css')}}">
		<!-- Vendor stylesheets  -->
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<!-- Custom stylesheet -->

		
	</head>
	<body data-theme="light">
		<style type="text/css">
			.select2-container {
			    min-width: 100% !important;
			}
		</style>
	  <div class="site-wrapper overflow-hidden ">
	    <div id="loading">
	      <img src="{{asset('assets/image/preloader.gif')}}" alt="">
	    </div>
	    <!-- Header Area -->
	    <!-- Header Area -->
	    <header class="site-header site-header--menu-right px-7 px-lg-10 z-index-99 dynamic-sticky-bg site-header--absolute site-header--sticky">
	      <div class="container-fluid">
	        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0">
	          <!-- Brand Logo-->
	          <div class="brand-logo mt-3 mt-md-0"><a href="https://getsella.com/">
	              <!-- light version logo (logo must be black)-->
	              <img src="{{asset('assets/image/sella-logo.svg')}}" alt="" class="light-version-logo">
	              <!-- Dark version logo (logo must be White)-->
	              <img src="{{asset('assets/image/logo-main-white.png')}}" alt="" class="dark-version-logo">
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
		                  <a class="nav-link" href="dashboard">Dashboard</a>
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
	    <div class="position-relative pt-md-31 position-relative overflow-hidden">
	      <div class="container position-static">
	        <div class="row align-items-center justify-content-center position-static">
	          <!-- Hero Image -->
	          
	          <!-- End Hero Image -->
	          <div class="col-lg-6 col-md-3 col-sm-11">
	          	<img class="" src="{{asset('images/sup-form.png')}}" alt="">     
	          </div>
	          <!-- Hero Content -->
	          <div class="col-lg-6 col-md-9 col-sm-11">
	            <div class="mt-8 mt-lg-0 pr-md-11 pr-lg-0 pr-xl-10" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
	              	<h2 class="font-size-9">Become a GetSella Supplier</h2>
	                <p class="font-size-5">Have access to thousands of retailers.</p>              
	                <form method="POST" onsubmit="return signupSupplier()">
	                  	<div class="form-group">
		                     	<label for="contact_name">Contact Name</label>
		                     	<input type="text" id="contact_name" placeholder="Your Name" class="form-control" required>
		                    </div> 
		                    <div class="form-group">
	                    	<label for="company">Company</label>
	                    	<input type="text" id="company" placeholder="Your Company" class="form-control" required>
	                    </div>  

	                    <div class="form-group">
	                    	<label for="contact_email">Contact Email</label>
	                    	<input type="email" id="contact_email" placeholder="Business Email Address" class="form-control" required>
	                    </div>

	                    <div class="form-group">
	                    	<label for="contact_phone">Contact Phone</label>
	                    	<input type="tel" id="contact_phone" placeholder="Phone Number" class="form-control" required>
	                    </div>

	                    {{-- <div class="form-group">
	                    	<label for="business_category">Business Category</label>
	                    	<input type="text" id="business_category" class="form-control" placeholder="Eg. Fintech, eCommerce, Esport, Fashion etc..." name="">
	                    </div> --}}
	                    <div class="form-group">
                        	<label for="business_category">Business Category</label>
                        	<select id="business_category" name="business_category[]" multiple="multiple" class="form-control" style="width: 100% !important;">
                        		<option value=""> -- select -- </option>
                        	</select>
                        </div>

	                    <div class="form-group">
	                    	<label for="contact_phone">Tell us about your business</label>
	                    	<textarea class="form-control" id="about_business" placeholder="Type here..." style="resize: none;"></textarea>
	                    </div>

	                    <div class="form-group">
	                    	<button class="btn-4 btn btn-sm btn-red rounded-4" type="submit"> Submit</button>
	                    </div>
	                </form>
	            </div>
	          </div>
	          <!-- End Hero Content -->
	        </div>
	      </div>
	      {{-- <div class="absolute-bottom-right mb-13 mb-md-17 mb-lg-26 d-none d-sm-block mr-n25 mr-md-n15 mr-lg-n7" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
	        <img class="w-50 w-md-75 w-lg-100" src="{{asset('assets/image/home-6/png/quadrant-blue.png')}}" alt="">
	      </div> --}}
	    </div>
	    <!-- End heroSix Area -->
	    <!-- videoLink Area -->
	    <div class="bg-purple-heart py-10">
	      <div class="container">
	        <div class="row justify-content-center">
	          <div class="col-12">
	            <div class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
	              <a class="video-btn text-white font-size-6 mb-0" href="https://drive.google.com/file/d/1_Gf9-J7oDummBD4WP2eQqh46bsZu_5fN/view?usp=sharing">
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

		{{-- <!-- start form area -->
		<div class="modal" id="email-modal">
	      
	    </div>
    	<!-- end form area --> --}}

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
	                      <div class="single-client rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="{{asset('assets/image/home-6/png/client-1.png')}}" class="black"  alt="">
	                        </div>
	                      </div>
	                  <!-- client 1 -->
	                  <!-- client 2 -->
	                      <div class="single-client rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="{{asset('assets/image/home-6/png/client-2.png')}}" class="black"  alt="">
	                        </div>
	                      </div>
	                  <!-- client 2 -->
	                  <!-- client 3 -->
	                      <div class="single-client rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="{{asset('assets/image/home-6/png/client-3.png')}}" class="black"  alt="">
	                        </div>
	                      </div>
	                  <!-- client 3 -->
	                  <!-- client 4 -->
	                      <div class="single-client rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="{{asset('assets/image/home-6/png/client-4.png')}}" class="black"  alt="">
	                        </div>
	                      </div>
	                  <!-- client 4 -->
	                  <!-- client 5 -->
	                      <div class="single-client rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="{{asset('assets/image/home-6/png/client-5.png')}}" class="black" alt="">
	                        </div>
	                      </div>
	                  <!-- client 5 -->
	                  <!-- client 6 -->
	                      <div class="single-client rounded-10 pt-7 pb-7 pt-sm-11 pt-md-11 pb-sm-10 pb-md-10 pl-7 pl-sm-11 pl-md-11 pr-7 pr-md-12 mx-md-6 focus-reset">
	                      
	                        <div class="d-flex align-items-center">
	                          <img src="{{asset('assets/image/home-6/png/client-6.png')}}" class="black" alt="">
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
	                Get Sella now available on Apple and Google Play Store.</p>
	              </div>
	            </div>
	            <div class="col-lg-5 offset-xl-1 col-md-8 col-sm-10">
	              <div class="text-center text-lg-left px-10 px-xs-0">
	                <h5 class="font-size-6 text-oxford-blue opacity-7 font-weight-normal mb-7 ml-lg-6" id="download"data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Available on</h5>
	                <div class="btn-group text-center text-sm-left d-sm-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
	                  <div class="w-100  mb-3 mb-lg-0 mx-auto mx-sm-3 text-center">
	                    <a href="#"><img class="min-w-210 max-h-64" src="{{asset('assets/image/home-6/png/app-store.svg')}}" alt="" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true"></a>
	                  </div> 
	                  <div class="w-100 mb-3 mb-lg-0 mx-auto mx-xs-3">
	                    <a href="https://play.google.com/store/apps/details?id=com.getsella.client"><img class="min-w-210 max-h-64" src="{{asset('assets/image/home-6/png/play-store.svg')}}" alt="" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500" data-aos-once="true"></a>
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
	                <div class="brand-logo mb-3">
	                  <a href="javascript:">
	                    <img class="mx-auto mx-0 light-version-logo default-logo" src="{{asset('assets/image/sella-logo.svg')}}" alt="">
	                    <img src="{{asset('assets/image/sella-logo.svg')}}" alt="" class="dark-version-logo mx-auto mx-0">
	                  </a>
	                </div>
	                <p class="font-size-5 mb-0 text-default-color-2">
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
                      <li class="mb-7"><p class="font-size-5 text-default-color-2 ">Get in touch via phone or send us a mail.</p></li>
                      <li class="mb-7"><p class="font-size-5 text-default-color-2 "> <span id="red-color"> info@techplus.com.ng <br> +234 704 736 0093 </span></p></li>
                    </ul>
                  </div>
                </div>
                <!-- End Single Widgets -->
                <!-- Single Widgets -->
                <div class="col-xl-4 col-lg-3 col-md-4 col-xs-8">
                  <div class="mb-10 mb-lg-0">
                    <h4 class="font-size-5 opacity-4 mb-10">Terms and Conditions</h4>
                    <ul class="list-unstyled">
                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="https://drive.google.com/file/d/1_UuMhoi8ujwIkRWge8mSWRJYEMX5QIQ_/view?usp=sharing">Privacy Policy</a></li>
                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="https://drive.google.com/file/d/1T9gQzDUVgO7XZoG4APqni3cTcrrS6EQs/view?usp=sharing">Terms of Use</a></li>

                    </ul>
                  </div>
                </div>
                <!-- End Single Widgets -->
                <!-- Single Widgets -->
                <div class="col-xl-4 col-lg-3 col-md-4 col-xs-8">
                  <div class="mb-10 mb-lg-0">
                    <h4 class="font-size-5 opacity-4 mb-10">Follow us on social media</h4>
                    <ul class="footer-social-link d-flex align-items-center justify-content-between list-unstyled flex-wrap mb-10">
                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="#">Facebook</a></li>
                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="#">.</a></li>
                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="https://twitter.com/getsellahq">Twitter</a></li>
                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="#">.</a></li>
                      <li><a class="text-default-color-2 gr-hover-text-blue-3" href="https://www.instagram.com/getsellahq/">Instagram</a></li>
                    </ul>
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

	  	<!-- SHOW MODAL -->
	  	<div class="modal fade" id="show-signup-modal" role="dialog">
	      	<div class="modal-dialog modal-lg modal-dialog-centered">
	          	<div class="modal-content">
	          		<div class="modal-body container">
				        <div class="row align-items-center">
				            <div class="col-md-4">    
				            	<div class="img-overlay"></div>          
				                <img id="form-img" class="ml-sm-16 mt-xl-14" src="{{asset('images/sup-form.png')}}" alt="">              
				            </div>
				            <div class="col-md-8">
				                
			                    <p class= "form-sen font-size-4 pt-30 pl-lg-35 pl-xs-8">Powered by <b>Xordium</b></p>
				            </div>
				      	</div>
				    </div>
	            </div>
	      	</div>
	  	</div>
	  <!-- Vendor Scripts -->
	  <script src="{{asset('assets/js/vendor.min.js')}}"></script>
	  <!-- Plugin's Scripts -->
	  <script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
	  <script src="{{asset('assets/plugins/nice-select/jquery.nice-select.min.js')}}"></script>
	  <script src="{{asset('assets/plugins/aos/aos.min.js')}}"></script>
	  <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
	  <script src="{{asset('assets/plugins/counter-up/jquery.counterup.min.js')}}"></script>
	  <script src="{{asset('assets/plugins/counter-up/jquery.waypoints.min.js')}}"></script>
	  <!-- Activation Script -->
	  <script src="{{asset('assets/js/custom.js')}}"></script>
	  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	  <script src="{{asset('js/database.js')}}"></script>
	  <script type="text/javascript">

	  	$(document).ready(function() {
	  		loadBusinessCategories();
	  	});

	  	function showSignupModal() {
	  		$("#show-signup-modal").modal({
	  			backdrop: false
	  		});
	  	}

	  	function hideSignupModal() {
	  		window.location.reload();
	  	}

	  	function signupSupplier() {
	  		var _token 	= '{{ csrf_token() }}';
	  		var name 	= $("#contact_name").val();
	  		var company = $("#company").val();
	  		var email 	= $("#contact_email").val();
	  		var phone 	= $("#contact_phone").val();
	  		var business_category = $("#business_category").val();
	  		var about_business = $("#about_business").val();


	  		var query = {_token, name, company, email, phone, business_category, about_business}

	  		fetch(`{{url('signup/supplier')}}`, {
	  			method: 'POST',
	  			headers: {
	  				'Content-Type': 'application/json',
	  			},
	  			body: JSON.stringify(query)
	  		}).then(r => {
	  			return r.json();
	  		}).then(results => {
	  			// console.log(results);
	  			swal(
	  				results.status,
	  				results.message,
	  				results.status
	  			);

	  			setTimeout(function(){
	  				window.location.reload();
	  			}, 1000 * 2);
	  		}).catch(err => {
	  			console.log(err);
	  		});

	  		// void
	  		return false;
	  	}

	  	function loadBusinessCategories() {
	  		$.each(business_categories, function(index, val) {
	  			$("#business_category").append(`
	  				<option value="${val}">${val}</option>
	  			`);
	  		});
	  		$("#business_category").select2({
	  			placeholder: 'Eg. Fintech, eCommerce, Esport, Fashion etc...',
	  			width: 'resolve'
	  		});
	  	}
	  </script>
	</body>
</html>
