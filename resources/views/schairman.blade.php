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
						<h2 style="color: #80cd36; text-align:center; margin-bottom: 50px">About Society Adhyaksh</h2>
				</div>
			    
			    <div class="col-md-5 col-sm-6 about-ds-image">
	            	<img src="resources/images/schairman.jpg" alt="" class="img-responsive">
	                </div>
			    
	            <div class="col-md-7 col-sm-6 about-ds-content">
	                
	                
	                
					
					
					
					
					
                    
					<div><p>Shri Mukesh Chaturvedi inherited the salubrious and benevolent legacy from his august forefathers.
                        They were men of lofty ideals and uncompromising upholders of the liberty of individual conscience. He
                        has contributed his might to realize the intellectual dreams of the Chaturvedi family for invigorating the
                        education progress in the area.

                    </p> </div>
                    <div><p>He has shown unalloyed dedication to the cause and spread of quality
                        education. His vowed mission is to enlighten and vitalize the pedantic capabilities of the young minds
                        and widen the horizons of their thoughts and feelings.
                    </p> </div>
                    
                    
                    <div class="section-header03">
						<h3><span></span></h3>
						<h3 style="color: #80cd36"><span> Shri Mukesh Chaturvedi </span> </h3>
						<h3><span> Socitey Adhyaksh</span> </h3>
						
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