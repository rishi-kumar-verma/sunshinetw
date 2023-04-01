@extends('layout')
@section('content')

<!--============================
		Contact Page Header
	=============================-->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Gallery</h1>
				<ul class="list-unstyled">
					<li><a href="#">Home</a></li>
					<li class="active">Gallery</li>
				</ul>
			</div>
		</div>
	</div>
</section><!-- Ends: .page-header -->

<!--============================
		Teacher Page Content
	=============================-->
<section class="portfolio-wrapper">
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
					<div class="portfolio-content">
						<div class="row">
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-1.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-2.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-3.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-4.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-5.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-6.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-7.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-8.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-9.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-1.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-2.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
							<div class="col-sm-3">
								<figure>
									<img src="resources/images/portfolio/portfolio-3.jpg" alt="" class="img-responsive">
									<figcaption>
										<div>
											<p><a href="#">Presentation</a></p>
											<h3><a href="#">Portfolio Title Here</a></h3>
										</div>
									</figcaption>
								</figure>
							</div><!-- Ends: .col-sm-3 -->
						</div>
					</div><!-- Ends: .portfolio-content -->
					
					<div class="blog-pagination">
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li class="active"><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div><!-- Ends: .blog-pagination -->
				</div><!-- Ends: .col-md-12 -->

			</div>
		</div>
    
</section><!-- Ends: .contact-wrapper -->

@endsection