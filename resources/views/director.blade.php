@extends('layout')
@section('content')

<!--============================
		Contact Page Header
	=============================-->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<h1>ABOUT US</h1>
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
						<h2 style="color: #80cd36; text-align:center; margin-bottom: 50px">About Director-Manager</h2>
				</div>
			    
			    <div class="col-md-5 col-sm-6 about-ds-image">
	            	<img src="resources/images/director.jpg" alt="" class="img-responsive">
	                </div>
			    
	            <div class="col-md-7 col-sm-6 about-ds-content">
	                
	                
	                
					
					
					
					
					
                    
					<div><p>A Postgraduate in Technology, Education and Business Management, with over 15 years of qualitative
                        experience in teaching and administration. A school management professional, his career contour spans
                        over 12 years with K-12 schools – start–ups, established and turnarounds - of which 8 years have been in
                        school administration. Rich experience in entire gamut of school administration inclusive of curriculum 
                        planning, teacher training and development of managerial aspects of School Education.

                    </p> </div>
                    <div><p>His greatest strengths which helped him to achieve a successful head position are his logical and critical
                            thinking, ability to solve the problem quickly and efficiently, excellent communication skills and
                            management ability.
                    </p> </div>
                    <div><p>Well versed with modern pedagogy and educational practices and offering years of achievement and    
                            experience in developing student centric environment, geared towards maximizing learning experiences.
                            Adept at development of work programmes for students and teachers. Expertise in school projects right
                            from inception till functioning of a fully operational Senior Secondary School. 
                    </p></div>
                    
                    <div class="section-header03">
						<h3><span></span></h3><br> <br> <br> <br>
						<h3 style="color: #80cd36"><span> Er. Shikhar Chaturvedi</span> </h3>
						<h3><span> Director-Manager</span> </h3>
						
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