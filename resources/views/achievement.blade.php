@extends('layout')
@section('content')

<!--============================
		Contact Page Header
	=============================-->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>ALL ACHIEVEMENTS</h1>
				<ul class="list-unstyled">
					<li><a href="#">Home</a></li>
					<li class="active">AchievementS</li>
				</ul>
			</div>
		</div>
	</div>
</section><!-- Ends: .page-header -->

<!--============================
		Teacher Page Content
	=============================-->
<section class="blog-wrapper blog02">
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
				<div class="col-md-9 col-sm-8">
					<div class="blog-six-content">
						<div class="blog-posts">
							<div class="row">
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/avantika.png" alt="" class="img-responsive">
											</div>
											<!--<figcaption>
												<ul class="list-unstyled">
													<li>14 Jan, 2017</li>
													<li><i class="fa fa-heart-o"></i> 45</li>
												</ul>
											</figcaption>
											-->
										</figure>
										<div class="blog-excerpt">
											<h3><a>Rashtriya Mahatma Samman</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/event/chambal.png" alt="" class="img-responsive">
											</div>
											<!--<figcaption>
												<ul class="list-unstyled">
													<li>14 Jan, 2017</li>
													<li><i class="fa fa-heart-o"></i> 45</li>
												</ul>
											</figcaption>
											-->
										</figure>
										<div class="blog-excerpt">
											<h3><a>Chambal Literary Festival</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/event/kasif.png" alt="" class="img-responsive">
											</div>
											<!--<figcaption>
												<ul class="list-unstyled">
													<li>14 Jan, 2017</li>
													<li><i class="fa fa-heart-o"></i> 45</li>
												</ul>
											</figcaption>
											-->
										</figure>
										<div class="blog-excerpt">
											<h3><a>K Asif Chambal International Film Festival</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/event/safari.png" alt="" class="img-responsive">
											</div>
										</figure>
										<div class="blog-excerpt">
											<h3><a>Etawah Safari Park</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								
								
								
								
							</div>
						</div><!-- ends: .blog-posts -->
					</div><!-- Ends: .blog-six-content -->
					
				</div><!-- Ends: .col-md-9/.col-sm-8 -->
				
				
			</div>
		</div>
</section><!-- Ends: .contact-wrapper -->

@endsection