@extends('layout')
@section('content')

<!--============================
		Contact Page Header
	=============================-->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<h1>Our Mentors</h1>
					<ul class="list-unstyled">
						<li><a href="#">Home</a></li>
						<li class="active">Mentors</li>
					</ul>
			</div>
		</div>
	</div>
</section><!-- Ends: .page-header -->

<!--============================
		Teacher Page Content
	=============================-->
<section class="all-teachers-wrapper">
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
				<div class="col-md-12">
					<div class="teachers-four-wrapper row">
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/anjali.jpg" alt="" class="img-responsive">
									<!--<figcaption>
										<ul class="list-unstyled">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</figcaption> -->
								</figure>
								<div >
									<h4>Mrs. Anjali Tandon</h4>
									<span>Co-ordinator</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/rashmi.jpg" alt="" class="img-responsive">
									<!--<figcaption>
										<ul class="list-unstyled">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</figcaption> -->
								</figure>
								<div>
									<h4>Ms. Rashmi Verma</h4>
									<span>Staff Secretary</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/aquib.jpg" alt="" class="img-responsive">
									<!--<figcaption>
										<ul class="list-unstyled">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</figcaption> -->
								</figure>
								<div >
									<h4>Mr. Mohd. Aquib</h4>
									<span>Tech.lead</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/mahi.jpg" alt="" class="img-responsive">
									<!--<figcaption>
										<ul class="list-unstyled">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</figcaption> -->
								</figure>
								<div>
									<h4>Ms. Mahi Verma</h4>
									<span>Member</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/saba.jpg" alt="" class="img-responsive">
									<!--<figcaption>
										<ul class="list-unstyled">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</figcaption> -->
								</figure>
								<div>
									<h4>Ms. Saba Fatima</h4>
									<span>Member</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/sumayla.jpg" alt="" class="img-responsive">
									<!--<figcaption>
										<ul class="list-unstyled">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</figcaption> -->
								</figure>
								<div >
									<h4>Mrs. Sumayla</h4>
									<span>Member</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/naveen.jpg" alt="" class="img-responsive">
									<!--<figcaption>
										<ul class="list-unstyled">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</figcaption> -->
								</figure>
								<div >
									<h4>Mr. Naveen Shukla</h4>
									<span>Member</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						</div><!-- Ends: .col-sm-3 -->
					</div><!-- Ends: .teachers-four-wrapper -->
				
					
					
				</div><!-- Ends: .col-md-12 -->

			</div>
	
    
</section><!-- Ends: .contact-wrapper -->

@endsection