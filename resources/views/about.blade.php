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
			<div class="col-md-7 col-sm-6 about-ds-content">
				<div class="section-header03">
					<h2>Welcome To <span>Sunshine School</span></h2>
				</div>
				<p>Sunshine School prides itself on the quality of its educational programmes, the professionalism of its
					staff, the enthusiasm of its students and the high level of support provided by parents and
					community members. We are an open school and we actively seek participation and involvement
					from the whole school community.</p>
				<p>The school commenced in 1982. Sunshine School always focuses on
					providing quality education and the best values to their students that help them become future
					leaders.</p>

				<p>Education at Sunshine School integrates academic pursuits in an endeavor to develop the whole
					child. The programs are substantive, comprehensive, and varied with emphasis on basic skills,
					providing a solid foundation for learning.</p>


				<!--<a href="#" class="rm-btn el-btn-regular">Read More</a> -->
			</div>
			<div class="col-md-5 col-sm-6 about-ds-image">
				<img src="resources/images/about01.jpg" alt="" class="img-responsive">
			</div>


		</div>
	</div>

</section><!-- Ends: .contact-wrapper -->
<section class="slider-bottom-services">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="service-box">
					<div class="service-icon">
						<img src="resources/images/icon01.png" alt="" />
					</div>
					<div class="service-info">
						<h3>Skilled Teachers</h3>
						<i class="fa fa-angle-right"></i>
					</div>
				</div>
			</div><!-- Ends: .col-sm-3 -->
			<div class="col-sm-3">
				<div class="service-box">
					<div class="service-icon">
						<img src="resources/images/icon02.png" alt="" />
					</div>
					<div class="service-info">
						<h3>Better Education</h3>
						<i class="fa fa-angle-right"></i>
					</div>
				</div>
			</div><!-- Ends: .col-sm-3 -->
			<div class="col-sm-3">
				<div class="service-box">
					<div class="service-icon">
						<img src="resources/images/icon03.png" alt="" />
					</div>
					<div class="service-info">
						<h3>Complete Development</h3>
						<i class="fa fa-angle-right"></i>
					</div>
				</div>
			</div><!-- Ends: .col-sm-3 -->
			<div class="col-sm-3">
				<div class="service-box">
					<div class="service-icon">
						<img src="resources/images/icon04.png" alt="" />
					</div>
					<div class="service-info">
						<h3>Better Enviroment</h3>

						<i class="fa fa-angle-right"></i>
					</div>
				</div>
			</div><!-- Ends: .col-sm-3 -->
		</div>
	</div>
</section><!-- Ends: .slider-bottom-services -->


<section class="information-cta">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Our <span>Motto</span></h2>
				<p>“Education is a commitment to excellence in Teaching and Learning”</p>
				<!--<a href="#" class="el-btn-regular">Contact Us</a> -->
			</div>
		</div>
	</div>
</section>

<section class="about-ds">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-6 about-ds-content">
				<div class="section-header03">
					<h2>School <span>values</span></h2>
				</div>
				<p>These values were developed in consultation with the school community. The school values are:</p>
				<p>A high standard of teaching and learning</p>
				<p>A safe and welcoming environment</p>
				<p>Family and community involvement</p>
				<p> In addition, critical thinking, decision-making, and a love of
					learning are nurtured. Cultural experiences for appreciation, enrichment, and enjoyment are afforded
					the students. Our goal is to provide a stimulating environment conducive to achieving maximum
					potential for each student.</p>

				<!--<a href="#" class="rm-btn el-btn-regular">Read More</a> -->
			</div>
			<div class="col-md-5 col-sm-6 about-ds-image">
				<img src="resources/images/about02.jpg" alt="" class="img-responsive">
			</div>
		</div>


		<!--<a href="#" class="rm-btn el-btn-regular">Read More</a> -->
	</div>

	</div>
	</div>
</section><!-- Ends: .about-ds -->


@endsection