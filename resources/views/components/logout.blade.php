<div class="tg-middlecontainer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
						 
                     		@if(Auth::user()->profile_pic)
                        		<img  style="float:right; padding-top:-5px; border-radius:50%;" width="6%" src="{{ 'data:image/;base64,'.Auth::user()->profile_pic }}" alt="Profile Photo" />
                        	@else
                       	    	<img  style="float:right; padding-top:-5px; border-radius:50%;" width="6%" src="{{ asset('images/noimage.png') }}" alt="Profile Photo" />
                       		@endif
							<strong class="tg-logo"><a href="dashboard"><img src="{{ asset('images/logo.png') }}" alt="company name here"></a></strong>
							<div class="tg-searchbox">
								 
							</div>
						</div>
					</div>
				</div>
			</div>