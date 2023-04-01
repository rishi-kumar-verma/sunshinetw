@extends('layout')
@section('content')

<!--============================
		Contact Page Header
	=============================-->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h1>About Us</h1>
					<ul class="list-unstyled">
						<li><a href="#">Home</a></li>
						<li class="active">About</li>
					</ul>
			</div>
		</div>
	</div>
</section><!-- Ends: .page-header -->

<!--============================
		Teacher Page Content
	=============================-->
<section class="about-ds">
	@if(session()->has('message'))
	<div class="alert alert-success">
		{{ session()->get('message') }}
	</div>
	@endif
	@if($errors->any())
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</div>
	@endif
	<div class="container">
			<div class="row">
			    
			    
			    <div> 
						<h2 style="color: #80cd36; text-align:center; margin-bottom: 50px">A Tribute To Our Founder</h2>
				</div>
			    
			    <div class="col-md-5 col-sm-6 about-ds-image">
	            	<img src="resources/images/founder.jpg" alt="" class="img-responsive">
	                </div>
			    
	            <div class="col-md-7 col-sm-6 about-ds-content">
	                
	                
	                
					
					
					
					
					<div><p>The founder of the school was a great man. He was a great person not because he was wealthy and powerful but because he was a man of great compassion, intellect and abiding commitment to humanity. One cannot say that he was here yesterday but today there is vacuum, because great souls remain eternal and alive with us through out.</p></div>
                    
					<div><p>It was his dream to make this institution a centre of excellence and temple of learning where children of the surrounding villages can have the facility of availing modern education without much financial burden. His love and concern for children and their welfare had been par excellence. One can find in him the qualities of head and heart.
                    </p> </div>
                    <div><p>Even though he is not with us in his physical form, his presence can be felt through his blessings in our entire endeavor.
                    </p> </div>
                    
                    <div class="section-header03">
						<!--<h3><span>Founder,</span></h3> -->
						<h3 style="color: #80cd36"><span> Late.Capt. V.N Chaturvedi</span> </h3>
						<h3><span> Founder</span> </h3>
						
					</div> 
					
					<!--<a href="#" class="rm-btn el-btn-regular">Read More</a> -->
            	</div>
	            <!--<div class="col-md-5 col-sm-6 about-ds-image">
	            	<img src="resources/images/principal.jpg" alt="" class="img-responsive">
	            </div> -->
	            
            	
			</div>
		</div>
</section><!-- Ends: .contact-wrapper -->

@endsection