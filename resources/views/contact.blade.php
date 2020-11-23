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
