<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Library</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/transitions.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/color-purple.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	<script src="{{ asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('alert/sweetalert.css') }}">
</head>
<body class="tg-home tg-homevtwo">
	 
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-headervtwo tg-haslayout">
		@include('components/logout') 
			<div class="tg-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-navigationholder">
								<nav id="tg-nav" class="tg-nav">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									@include('components/navigation-links') 
								</nav>
								 
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
	 
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			 
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						 
						  
							 
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Picked By Author End
			*************************************-->
			 
			<!-- Modal login/register -->
			<!-- Button trigger modal -->

			<!-- Modal -->
			<div class="modal fade" id="Started" tabindex="-1" role="dialog" aria-labelledby="StartModalLabel"  aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				 
				<div class="modal-body text-center">
				<div class="img-fluid" style="padding-bottom:15px;"><img src="{{ asset('images/logo.png') }}" /></div>
					<p class="text-center"> Login to proceed if you are an existing user</p>
					<p class="text-center"> For new users use the register button </p>
					
				<a href="{{ route('register') }}" type="button" class="tg-btn">Register</a>
				<a href="{{ route('login') }}" type="button" class="tg-btn tg-active">Login</a>
				</div>
				 
				</div>
			</div>
			</div>	 
			 
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			 
			</div>
			 
			<div class="tg-footerbar">
				<a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i class="icon-chevron-up"></i></a>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-copyright">2021 All Rights Reserved By &copy; Book Library</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	 
	<script src="{{ asset('js/jquery-library.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.vide.min.js') }}"></script>
	
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/parallax.js') }}"></script>
	
	<script src="{{ asset('js/appear.js') }}"></script>
	
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('alert/sweetalert.js') }}"></script>
	<script src="{{ asset('js/logout.js') }}"></script>
</body>
</html>