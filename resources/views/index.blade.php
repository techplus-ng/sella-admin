<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v4.1.1">
		<title>Pricing example · Bootstrap</title>
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

			.left-badge h2 {
				color: #1B213E;
				font-weight: bold;
				font-size: 93px;
				line-height: 100px;
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
				.left-badge h2 {
					color: #1B213E;
					font-weight: bold;
					font-size: 41px;
					line-height: 50px;
					/* or 108% */
				}

				.left-badge p {
					font-size: 10px;
					line-height: 15px;
					color: #000000;
				}
				.right-badge {
					display: none;
				}
			}
		</style>
	</head>
	<body>
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-5 mb-3">
			<h5 class="my-0 mr-md-auto font-weight-normal">
				<a href="{{url('/')}}" class="">
					<img src="{{asset('images/sella-logo.png')}}">
				</a>
			</h5>
			<nav class="my-2 my-md-0 mr-md-3">
				<a class="p-2 text-dark" href="{{url('contact')}}">Contact Us</a>
			</nav>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-5">
							<div class="left-badge px-4 py-4 mt-5">
								<h2 class="py-2">
									Re-stock 
									your store
									with sella
								</h2>

								<p class="py-2">
									Get products delivered to your store directly 
									at best prices from top FMCG brands.
								</p>

								<a href="javascript:void(0);" onclick="toPlayStore()" class="py-2">
									<img src="{{asset('images/googleplaystore.png')}}">
								</a>

								<p class="py-4">
									2020 Xordium Ltd. <span class="text-danger">Privacy Policy</span>
								</p>
							</div>
						</div>
						<div class="col-md-7">
							<div class="right-badge">
								<img src="{{asset('images/sella-img.png')}}" width="auto" height="600">
							</div>
						</div>
					</div>
					<img src="{{asset('images/bg-filled.png')}}" class="footer-bg">
				</div>
			</div>
		</div>
	</body>
</html>
