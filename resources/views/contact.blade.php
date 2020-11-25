<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Sella helps you to re-stock your shop at the best prices. You can order for the products you sell from the comfort of your shop and you get the stock in 24 hours.">
		<meta name="author" content="Sella">
		<meta name="generator" content="Jekyll v4.1.1">
		<title>Sella</title>

		<meta property="fb:app_id" content="408694093597122" />
	    <meta property="og:title" content="Get Sella"/>
	    <meta property="og:image" content="{{asset('images/sella-img.png')}}"/>
	    <meta property="og:url" content="{{ Request::url() }}"/>
	    <meta property="og:site_name" content="Sella"/>
	    <meta property="og:type" content="article"/>
	    <meta property="og:description" content="Sella helps you to re-stock your shop at the best prices. You can order for the products you sell from the comfort of your shop and you get the stock in 24 hours."/>

	    {{-- Twitter Section --}}
	    <meta name="twitter:title" content="Get Sella" />
	    <meta name="twitter:image" content="{{asset('images/sella-img.png')}}" />
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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
			html {
				font-size: 14px;
			}

			html, body {
				background-color: #E5E5E5;
			}

			.container {
				max-width: 960px;
			}

			.pricing-header {
				max-width: 700px;
			}

			.card-deck .card {
				min-width: 220px;
			}
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

			.right-badge {
				position: fixed;
				right: 0;
				z-index: 999;
				right: 120px;
			}

			.right-badge h2 {
				color: #1B213E;
				font-weight: bold;
				font-size: 63px;
				line-height: 100px;
				margin-top: 150px;
			}

			.right-badge p {
				font-size: 18px;
				line-height: 30px;
				color: #000000;
			}

			.left-badge {
				position: fixed;
				left: 0;
				top: 0;
				width: 50%;
				background-image: url({{asset('images/retail-store-image.png')}});
				/*background: #1B213E;*/
				/*mix-blend-mode: normal;*/
				/*opacity: 0.9;*/
				background-size:cover;
				box-shadow:inset 0 0 0 2000px #1b213ef0;
				height: 100vh;
			}

			.left-badge h2 {
				color: #1B213E;
				font-weight: bold;
				font-size: 83px;
				line-height: 100px;
				margin-top: 150px;
				/* or 108% */
			}

			.left-badge p {
				font-size: 20px;
				line-height: 30px;
				color: #000000;
			}


			.footer-bg {
				position: fixed;
				top: 0;
				margin-top: 385px;
				width: 100vw;
			}

			.front-logo {
				position: relative;
				z-index: 999;
			}

			@media (min-width: 768px) {
				html {
					font-size: 16px;
				}
			}

			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 3.5rem;
				}
			}

			@media (max-width: 768px) {
				.right-badge {
					position: none !important;
				}

				.right-badge h2 {
					color: #1B213E;
					font-weight: bold;
					font-size: 41px;
					line-height: 50px;
					/* or 108% */
				}

				.right-badge p {
					font-size: 10px;
					line-height: 15px;
					color: #000000;
				}

				.left-badge {
					position: none !important;
					left: 0;
					top: 0;
					width: 100%;
					background-image: url({{asset('images/retail-store-image.png')}});
					/*background: #1B213E;*/
					/*mix-blend-mode: normal;*/
					/*opacity: 0.9;*/
					background-size:cover;
					box-shadow:inset 0 0 0 2000px #1b213ef0;
					height: 100vh;
				}

				.left-badge h2 {
					color: #1B213E;
					font-weight: bold;
					font-size: 41px;
					line-height: 50px;
					/* or 108% */
				}

				.left-badge p {
					font-size: 20px;
					line-height: 35px;
					color: #000000;
				}

				.right-badge {
					display: none;
				}

				.hidden-mobile {
					display: inline-block !important;
				}
			}
		</style>
	</head>
	<body>
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-5 mb-3">
			<h5 class="my-0 mr-md-auto font-weight-normal">
				<a href="{{url('/')}}" class="front-logo">
					<img src="{{asset('images/sella-logo.png')}}">
				</a>
			</h5>
			<nav class="my-2 my-md-0 mr-md-3">
				<a class="p-2 text-dark" href="{{url('/')}}">Back</a>
			</nav>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="left-badge col-md-6">
							<div class="px-5 py-4">
								<h2 class="text-white">
									Need Help? 
									Contact Us
									today
								</h2>

								<p class="hidden-mobile text-white py-5" style="display: none;">
									Phone: <a href="tell:+2348133381474" target="_blank" class="">
										+234 813 338 1474
									</a> <br />
									Email: <a href="mailto:info@getsella.com" target="_blank" class="">
										info@getsella.com
									</a>
								</p>

								<a href="javascript:void(0);" onclick="toPlayStore()" class="py-5">
									<img src="{{asset('images/googleplaystore.png')}}">
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="right-badge">
								<h2>
									Reach Us By
								</h2>

								<p>
									Phone: <a href="tell:+2348133381474" target="_blank" class="">
										+234 813 338 1474
									</a> <br />
									Email: <a href="mailto:info@getsella.com" target="_blank" class="">
										info@getsella.com
									</a>
								</p>
							</div>
						</div>
					</div>
					<img src="{{asset('images/bg-filled.png')}}" class="footer-bg">
				</div>
			</div>
		</div>
	</body>
</html>
