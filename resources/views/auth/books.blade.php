<!doctype html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Library - Books</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('libs/bower/font-awesome/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/transitions.css') }}">
	<link rel="stylesheet" href="{{ asset('alert/sweetalert.css') }}">
	<link href="{{ asset('css/dark.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/color-purple.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	<script src="{{ asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('libs/misc/datatables/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
	<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
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
			 
			<section class=" tg-haslayout">
				<div class="container">
                <div class="row " style="margin-top:25px;" >
					<h3><i class="fa fa-book"></i> Books</a></h3>
					</div>
					<div class="row"  style="margin-bottom:10px;">
					<button type="button" class="tg-btn tg-active pt-5" data-toggle="modal"   data-target="#addModal">Add New Book</button>
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
                                                                    <th>Revison No</th>
                                                                    <th>Publisher</th>
																	<th>author</th>
																	<th>Genre</th>
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

<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="#" class="form-horizontal" method="POST">
                                <div class="modal-content">
                                    <div class="modal-header  " style="background-color:#b22565;">
                                        <h5 class="modal-title" id="umodal-title" style="color:white">Modify User</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-danger alert-dismissible" id="merror" style="display:none;">
                                            <strong id='merror_msg'></strong>
                                        </div>
                                         <div class="modal-body">
                                      
                                        <form id="form">
										
                                            <div class="row">
                                                <div class="col-md-2">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="Group">Title</label>
                                                       <input type="text" class="form-control" id="title2" name="title" required />
                                                    </div>

													<div class="form-group">
                                                        <label for="Group">ISBN</label>
                                                       <input type="Number" class="form-control" id="isbn2" name="isbn" required />
                                                    </div>
													<div class="form-group">
                                                        <label for="Group">Revison Number</label>
                                                       <input type="Number" class="form-control" id="revision_number2" name="revision_number" required />
                                                    </div>
													<div class="form-group">
                                                        <label for="Group">Publisher</label>
                                                       <input type="text" class="form-control" id="publisher2" name="publisher" required />
                                                    </div>
													<div class="form-group">
                                                        <label for="Group">Publication Date</label>
                                                       <input type="date" class="form-control" id="pub_date2" name="pub_date" required />
                                                    </div>

													<div class="form-group">
                                                        <label for="Group">Author</label>
                                                       <input type="text" class="form-control" id="author2" name="author"required />
                                                    </div>

													<div class="form-group">
                                                        <label for="Group">Genre</label>
                                                      <select name="genre" id="genre2" required>
														<option value="">Choose</option>
														<option>Art & Photography</option>
														<option>Biography</option>
														<option>Fiction</option>
														<option>Science</option>
														<option>Fantasy & Horror</option>
														<option>Others</option>
													  </select>
                                                    </div>
													<div class="form-group">
                                                        <label for="Group">Change Cover Image</label>
														<input type="file" id="image2" name="image"  required class="form-control" 
							style="border-top-style: hidden; border-right-style: hidden;
							    border-left-style: hidden; border-bottom-style: groove;"/>
                                                    </div>
													<input type="hidden" name="oldpic" id="oldpic" value="">
													<input type="hidden" name="bookid" id="bookid" value="">
													<div class="mb-5 text-center">
								<button type="button" id="bookupdate" style="background-color:#b22565; color:white;" class="btn btn-md pull-right">Update </button>
                           </div>

													
                                                </div>
                                              
                                            </div>
                                        </form>

                                    </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
			<!--************************************
					Picked By Author End
			*************************************-->
			 
			<!-- Modal login/register -->
			<!-- Button trigger modal -->

			<!-- Modal -->
			<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="#" class="form-horizontal" id="reset-modal" autocomplete="off" method="POST">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#b22565;">
                                        <h5 class="modal-title"  style="color:white">Add New Book</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-danger alert-dismissible" id="rerror" style="display:none;">
                                            <strong id='rerror_msg'></strong>
                                        </div>
                                        <form id="form">
										
                                            <div class="row">
                                                <div class="col-md-2">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="Group">Title</label>
                                                       <input type="text" class="form-control" id="title" name="title" required/ >
                                                    </div>

													<div class="form-group">
                                                        <label for="Group">ISBN</label>
                                                       <input type="Number" class="form-control" id="isbn" name="isbn" required/ >
                                                    </div>
													<div class="form-group">
                                                        <label for="Group">Revison Number</label>
                                                       <input type="Number" class="form-control" id="revision_number" name="revision_number" required/ >
                                                    </div>
													<div class="form-group">
                                                        <label for="Group">Publisher</label>
                                                       <input type="text" class="form-control" id="publisher" name="publisher" required/>
                                                    </div>
													<div class="form-group">
                                                        <label for="Group">Publication Date</label>
                                                       <input type="date" class="form-control" id="pub_date" name="pub_date" required/ >
                                                    </div>

													<div class="form-group">
                                                        <label for="Group">Author</label>
                                                       <input type="text" class="form-control" id="author" name="author"required/ >
                                                    </div>

													<div class="form-group">
                                                        <label for="Group">Genre</label>
                                                      <select name="genre" id="genre" required/>
														<option value="" >Choose</option>
														<option>Art & Photography</option>
														<option>Biography</option>
														<option>Fiction</option>
														<option>Science</option>
														<option>Fantasy & Horror</option>
														<option>Others</option>
													  </select>
                                                    </div>
													<div class="form-group">
                                                        <label for="Group">Cover Page Image</label>
														<input type="file" id="image" name="image"  class="form-control" 
							style="border-top-style: hidden; border-right-style: hidden;
							    border-left-style: hidden; border-bottom-style: groove;"/>
                                                    </div>
													<div class="mb-5 text-center">
								<button type="button" id="btnadd" style="background-color:#b22565; color:white;" class="btn btn-md pull-right">Add </button>
                           </div>

													
                                                </div>
                                              
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </form>
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
	<script src="{{ asset('js/jquery.vide.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/parallax.js') }}"></script>
	<script src="{{ asset('js/appear.js') }}"></script>
	 
	 
	<script src="{{ asset('libs/misc/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('alert/sweetalert.js') }}"></script>
	<script src="{{ asset('js/logout.js') }}"></script>
	
	<script src="{{ asset('js/custom2.js') }}"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src=" https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
</body>
</html>