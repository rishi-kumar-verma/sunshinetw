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
						<h2 style="color: #80cd36; text-align:center; margin-bottom: 50px">From the Chairman's Desk</h2>
				</div>
			    
			    <div class="col-md-5 col-sm-6 about-ds-image">
	            	<img src="resources/images/principal.jpg" alt="" class="img-responsive">
	                </div>
			    
	            <div class="col-md-7 col-sm-6 about-ds-content">
	                
	                
	                
					
					
					
					
					<div><p>Dear Sunshine Students and Families,</p></div>
                    
					<div><p>I am honored to lead a school with such persevering students, an extremely
                        dedicated staff, and a supportive school community. I feel very fortunate to
                        be part of this school and to support the students and families.
                        I have been dedicated to the field of education for more than twenty-five
                        years. Prior to becoming the principal here, I worked with students from
                        Kindergarten through 8th grade in a variety of roles. I am thrilled to utilize my
                        skills as an educational leader at Sunshine School and work with you as a
                        partner in education to ensure your child's success.
                    </p> </div>
                    <div><p>I view education as a life-long process and continue to learn every year from
                        our students, teachers, and parents at Sunshine. Most importantly, I believe
                        that students are at the center of all school-related decisions. Because the
                        relationships between families and the school are vital to the success of our
                        students, I encourage you to become involved in every way possible. I look
                        forward to meeting you soon!
                    </p> </div>
                    
                    <div class="section-header03">
						<h3><span>Sincerely,</span></h3>
						<h3 style="color: #80cd36"><span> Mrs.Manisha Chaturvedi</span> </h3>
						<h3><span> Chairman</span> </h3>
						
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