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
			<div class="tg-middlecontainer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong class="tg-logo"><a href="#"><img src="{{ asset('images/logo.png') }}" alt="company name here"></a></strong>
							<div class="tg-searchbox">
								<form class="tg-formtheme ">
									<fieldset>
									<button type="button" class="tg-btn tg-active pt-5" data-toggle="modal" onclick="modalCenter();" data-target="#Started">Get Strated</button>
									</fieldset>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
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
									<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
										<ul>
										 
										<li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Home</a>
										</li>
										<li><a href="#" data-toggle="modal" onclick="modalCenter();" data-target="#Started">login/Register</a></li>
										<li class="menu-item-has-children">
											<a href="#">Authors</a>
										</li>
										<li><a href="#">About Us</a></li>
										 
										<li><a href="#">Contact</a></li>
										 
									</ul>
									</div>
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
		<div id="tg-homeslider" class="tg-homeslider tg-homeslidervtwo tg-haslayout owl-carousel">
			<div class="item" data-vide-bg="poster: images/slider/img-03.jpg" data-vide-options="position: 0% 50%">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
							<div class="tg-slidercontent">
								<figure class="tg-authorimg"><img src="images/img-03.png" alt="image description"></figure>
								<h1>Search your favourite Book</h1>
								<div class="tg-description">
								</div>
								<div class="tg-btns">
									<button type="button" class="tg-btn tg-active pt-5" onclick="modalCenter();" style="margin-top:5px;margin-right:4px;" data-toggle="modal" data-target="#Started">Get Strated</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item" data-vide-bg="poster: images/slider/img-03.jpg" data-vide-options="position: 0% 50%">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
							<div class="tg-slidercontent">
								<figure class="tg-authorimg"><img src="images/img-03.png" alt="image description"></figure>
								<h1>Search your favourite Book</h1>
								<div class="tg-description">
								</div>
								<div class="tg-btns">
								<button type="button" class="tg-btn tg-active pt-5" onclick="modalCenter();" style="margin-top:5px;margin-right:4px;" data-toggle="modal" data-target="#Started">Get Strated</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>Some Great Books</span>Picked By Authors</h2>
								<a class="tg-btn" href="javascript:void(0);">View All</a>
							</div>
						</div>
						<div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
							<div class="item">
								<div class="tg-postbook">
									<figure class="tg-featureimg">
										<div class="tg-bookimg">
											<div class="tg-frontcover"><img src="images/books/img-10.jpg" alt="image description"></div>
										</div>
										<div class="tg-hovercontent">
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua enim adia minim veniam, quis nostrud.</p>
											</div>
											<strong class="tg-bookpage">Book Pages: 206</strong>
											<strong class="tg-bookcategory">Category: Adventure, Fun</strong>
											<strong class="tg-bookprice">Price: $23.18</strong>
											<div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
										</div>
									</figure>
									<div class="tg-postbookcontent">
										<div class="tg-booktitle">
											<h3><a href="javascript:void(0);">Seven Minutes In Heaven</a></h3>
										</div>
										<span class="tg-bookwriter">By: <a href="javascript:void(0);">Sunshine Orlando</a></span>
										<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
											<i class="fa fa-shopping-basket"></i>
											<em>Add To Basket</em>
										</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="tg-postbook">
									<figure class="tg-featureimg">
										<div class="tg-bookimg">
											<div class="tg-frontcover"><img src="images/books/img-11.jpg" alt="image description"></div>
										</div>
										<div class="tg-hovercontent">
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua enim adia minim veniam, quis nostrud.</p>
											</div>
											<strong class="tg-bookpage">Book Pages: 206</strong>
											<strong class="tg-bookcategory">Category: Adventure, Fun</strong>
											<strong class="tg-bookprice">Price: $23.18</strong>
											<div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
										</div>
									</figure>
									<div class="tg-postbookcontent">
										<div class="tg-booktitle">
											<h3><a href="javascript:void(0);">Slow And Steady Wins The Race</a></h3>
										</div>
										<span class="tg-bookwriter">By: <a href="javascript:void(0);">Drusilla Glandon</a></span>
										<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
											<i class="fa fa-shopping-basket"></i>
											<em>Add To Basket</em>
										</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="tg-postbook">
									<figure class="tg-featureimg">
										<div class="tg-bookimg">
											<div class="tg-frontcover"><img src="images/books/img-12.jpg" alt="image description"></div>
										</div>
										<div class="tg-hovercontent">
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua enim adia minim veniam, quis nostrud.</p>
											</div>
											<strong class="tg-bookpage">Book Pages: 206</strong>
											<strong class="tg-bookcategory">Category: Adventure, Fun</strong>
											<strong class="tg-bookprice">Price: $23.18</strong>
											<div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
										</div>
									</figure>
									<div class="tg-postbookcontent">
										<div class="tg-booktitle">
											<h3><a href="javascript:void(0);">There’s No Time Like The Present</a></h3>
										</div>
										<span class="tg-bookwriter">By: <a href="javascript:void(0);">Patrick Seller</a></span>
										<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
											<i class="fa fa-shopping-basket"></i>
											<em>Add To Basket</em>
										</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="tg-postbook">
									<figure class="tg-featureimg">
										<div class="tg-bookimg">
											<div class="tg-frontcover"><img src="images/books/img-10.jpg" alt="image description"></div>
										</div>
										<div class="tg-hovercontent">
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua enim adia minim veniam, quis nostrud.</p>
											</div>
											<strong class="tg-bookpage">Book Pages: 206</strong>
											<strong class="tg-bookcategory">Category: Adventure, Fun</strong>
											<strong class="tg-bookprice">Price: $23.18</strong>
											<div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
										</div>
									</figure>
									<div class="tg-postbookcontent">
										<div class="tg-booktitle">
											<h3><a href="javascript:void(0);">Seven Minutes In Heaven</a></h3>
										</div>
										<span class="tg-bookwriter">By: <a href="javascript:void(0);">Sunshine Orlando</a></span>
										<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
											<i class="fa fa-shopping-basket"></i>
											<em>Add To Basket</em>
										</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="tg-postbook">
									<figure class="tg-featureimg">
										<div class="tg-bookimg">
											<div class="tg-frontcover"><img src="images/books/img-11.jpg" alt="image description"></div>
										</div>
										<div class="tg-hovercontent">
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua enim adia minim veniam, quis nostrud.</p>
											</div>
											<strong class="tg-bookpage">Book Pages: 206</strong>
											<strong class="tg-bookcategory">Category: Adventure, Fun</strong>
											<strong class="tg-bookprice">Price: $23.18</strong>
											<div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
										</div>
									</figure>
									<div class="tg-postbookcontent">
										<div class="tg-booktitle">
											<h3><a href="javascript:void(0);">Slow And Steady Wins The Race</a></h3>
										</div>
										<span class="tg-bookwriter">By: <a href="javascript:void(0);">Drusilla Glandon</a></span>
										<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
											<i class="fa fa-shopping-basket"></i>
											<em>Add To Basket</em>
										</a>
									</div>
								</div>
							</div>
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
							<span class="tg-paymenttype"><img src="images/paymenticon.png" alt="image description"></span>
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
	<script>
	function modalCenter() {
        $('#Started').css({
            'display': 'flex',
            'justify-content': 'center',
            'align-items': 'center'
        })
    }
	</script>
	<script src="{{ asset('js/jquery-library.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.vide.min.js') }}"></script>
	
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/parallax.js') }}"></script>
	
	<script src="{{ asset('js/appear.js') }}"></script>
	
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>