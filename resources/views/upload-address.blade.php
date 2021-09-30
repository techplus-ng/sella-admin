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
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<!-- Custom stylesheet -->

		<style type="text/css">
			.img-overlay {

			}
		</style>
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
	              <img src="assets/image/sella-logo.svg" alt="" class="light-version-logo">
	              <!-- Dark version logo (logo must be White)-->
	              <img src="assets/image/logo-main-white.png" alt="" class="dark-version-logo">
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
	    <div class="position-relative pt-25 pt-md-31 pt-lg-35 pb-15 pb-md-19 pb-lg-33 position-relative overflow-hidden">
	      <div class="container position-static">
	        <div class="row align-items-center justify-content-center position-static">
	          
	          <!-- End Hero Image -->
	          <!-- Hero Content -->
	          <div class="col-lg-6 col-md-9 col-sm-11">
	            <div class="mt-8 mt-lg-0 pr-md-11 pr-lg-0 pr-xl-10" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">

	              <form method="POST" action="{{url('upload-address')}}" enctype="multipart/form-data">
	              	@csrf
	              	<div class="row">
	              		<div class="col-md-12">
	              			<div class="form-group">
	              				<label for="address_file">Upload Excel</label>
	              				<input type="file" id="address_file" name="address_file" class="form-control" required="">
	              			</div>
	              		</div>
	              		<div class="col-md-12">
	              			<div class="form-group">
	              				<button class="btn btn-dark-green btn-4 rounded-5" href="#download">
	              					Upload
	              				</button>
	              			</div>
	              		</div>
	              	</div>
	              </form>
	            </div>
	          </div>
	          <!-- End Hero Content -->
	        </div>
	      </div>
	      <div class="absolute-bottom-right mb-13 mb-md-17 mb-lg-26 d-none d-sm-block mr-n25 mr-md-n15 mr-lg-n7" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
	        
	      </div>
	    </div>
	    <!-- End heroSix Area -->
	    
	    <!-- Footer Area -->
	    <footer>
	      <div class="bg-default-6 foot-blue pt-13 pt-lg-23 pb-7 position-relative">
	        <div class="container">
	          <div class="row pb-lg-18">
	            <div class="col-lg-4 col-md-5 col-md-3 col-xs-8">
	              <div class="pr-xl-20 mb-11 mb-lg-0">
	                <div class="brand-logo mb-3">
	                  <a href="javascript:">
	                    <img class="mx-auto mx-0 light-version-logo default-logo" src="assets/image/sella-logo.svg" alt="">
	                    <img src="assets/image/sella-logo.svg" alt="" class="dark-version-logo mx-auto mx-0">
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
				                <h2 class="mb-2 pr-lg-20 font-size-9 pt-22">Register your products on GetSella</h2>
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

                                    <div class="form-group">
                                    	<label for="business_category">Business Category</label>
                                    	<input type="text" id="business_category" class="form-control" placeholder="Eg. Fintech, eCommerce, Esport, Fashion etc..." name="">
                                    </div>

                                    <div class="form-group">
                                    	<label for="contact_phone">Tell us about your business</label>
                                    	<textarea class="form-control" id="about_business" placeholder="Type here..." style="resize: none;"></textarea>
                                    </div>

				                    <div class="form-group">
				                    	<button class="btn-4 btn btn-sm btn-red rounded-4" type="submit"> Submit</button>
				                    </div>
				                </form>
			                    <p class= "form-sen font-size-4 pt-30 pl-lg-35 pl-xs-8">Powered by <b>Xordium</b></p>
				            </div>
				      	</div>
				    </div>
	            </div>
	      	</div>
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
	  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	  <script type="text/javascript">

	  	function showSignupModal() {
	  		$("select").niceSelect();
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
	  </script>
	</body>
</html>
