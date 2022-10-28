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
		<link rel="stylesheet" href="{{ asset('libs/bower/font-awesome/css/font-awesome.min.css') }}" />
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
		@if (auth()->user()->role == 'admin') 
		<section class=" tg-haslayout">
				<div class="container">
                <div class="row " style="margin-top:25px;" >
					<h3><i class="fa fa-book"></i> Checked out Books</a></h3>
					</div>
				 
					<div class="row">
					
                                       <!-- <h4 class="m-b-md"></h4>-->
                                        <div class="table-responsive" style="margin-bottom:40px;">
                                            <div id="default-datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="bookstable" class="display compact book_datatable" style="width:700%">
                                                            <thead>
                                                                <tr>
                                                                    <th width="2%">ID</th>
																	<th>Reader</th>
																	<th>ISBN</th>
																	<th>Book Title</th>
																	<th width="30%">Checked Out Date</th>
																	<th width="30%">Exp. Check in Date</th>
																	<th>Days Rem/Over</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                
                                                            </tbody>
                                                            
                                                        </table>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
					</div>
				</div>
			</section>
			@endif
			<section class=" tg-haslayout">
				<div class="container">
                <div class="row " style="margin-top:25px;" >
					<h3><i class="fa fa-book"></i> Books</a></h3>
					</div>
					 
					<div class="row">
					<div class="row">
                                         @if(session()->has('status'))
                                            <div class="alert alert-success">
                                                {{ session()->get('status') }}
                                            </div>
                                            @endif
                                    </div>
                                       <!-- <h4 class="m-b-md"></h4>-->
                                        <div class="table-responsive" style="margin-bottom:40px;">
                                            <div id="default-datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="bookstable" class="display compact book_datatable" style="width:700%">
                                                            <thead>
                                                                <tr>
                                                                    <th width="2%">ID</th>
                                                                    <th width="30%">Cover Image</th>
																	<th>Title</th>
                                                                    <th>ISBN</th>
                                                                    <th>Publisher</th>
																	<th>date added</th>
                                                                    <th width="">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                
                                                            </tbody>
                                                            
                                                        </table>

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
							<span class="tg-copyright">2022 All Rights Reserved By &copy; Book Library</span>
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