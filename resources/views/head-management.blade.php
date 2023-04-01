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
						<h2 style="color: #80cd36; text-align:center; margin-bottom: 50px">Head Of Management</h2>
				</div>
			    
			    <div class="col-md-5 col-sm-6 about-ds-image">
	            	<img src="resources/images/head.jpg" alt="" class="img-responsive">
	                </div>
			    
	            <div class="col-md-7 col-sm-6 about-ds-content">
	                
	                
	                
					
					
					
						<div><p>Expertise in Human Resource Management having more then 7+ years experience into various HR disciplines.
Promoted to fulfill a broad range of HR functions, including recruiting and training employees, administering
benefits, overseeing disciplinary action and managing HR records. Mrs. Ruchi Chaturvedi is ultimately responsible
for taking managerial decisions for the day to day operation of the school.

                    </p> </div>
					
                    
					<div><p>It is obvious that our educational system is to promote and meet spiritual needs, to mould the
character of young people on moral and spiritual values and develop a balanced, well rounded and
human personality.

                    </p> </div>
                    <div><p>Sunshine School has gained its fame and reputation from the brilliant academic performance, various
sports activities, hard work of its entire staff and the success of its alumni in all walks of life.
                    </p> </div>
                    <div><p>It is a common belief that good education is that which helps to build good character and personality
of a child. It is obvious that our education system is to promote and meet spiritual needs, to mould
the character of young people on moral and spiritual values and develop a balanced, well rounded
and human personality.
                    </p></div>
                    <div><p>The students need to be treated like a friend and a teacher should be more of a counsellor. The world
changes and the trends are different but the relation of a teacher and the student remains the same.
Teachers are the role models and need to do their best for grooming the future of a student.

                    </p> </div>
                    
                    <div class="section-header03">
						<h3><span></span></h3><br> <br>
						<h3 style="color: #80cd36"><span> Mrs. Ruchi Chaturvedi</span> </h3>
						<h3><span> Head Of Management</span> </h3>
						
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