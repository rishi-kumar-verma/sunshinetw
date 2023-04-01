@extends('layout')
@section('content')

<!--============================
		Contact Page Header
	=============================-->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<h1>All Events</h1>
					<ul class="list-unstyled">
						<li><a href="#">Home</a></li>
						<li class="active">Events</li>
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
												<img src="resources/images/childrenday.jpg" alt="" class="img-responsive">
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
											<h3><a>Children's Day</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/christmas.jpg" alt="" class="img-responsive">
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
											<h3><a>Christmas Day</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/ind.jpg" alt="" class="img-responsive">
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
											<h3><a>School Trip</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/yoga.jpg" alt="" class="img-responsive">
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
											<h3><a>International Yoga Day</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/repub.jpg" alt="" class="img-responsive">
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
											<h3><a>Republic Day</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/trip1.jpg" alt="" class="img-responsive">
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
											<h3><a>School Trip</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/trip2.jpg" alt="" class="img-responsive">
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
											<h3><a>School Trip</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/trip2.jpg" alt="" class="img-responsive">
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
											<h3><a>School Trip</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/trip3.jpg" alt="" class="img-responsive">
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
											<h3><a>School Trip</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/trip4.jpg" alt="" class="img-responsive">
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
											<h3><a>School Trip</a></h3>
											<!--<p>Lorem ipsum dolor sit amet, consectetuer no adipiscing elit, sed diam nonuy my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi enim ad minim venia quam erat volutpat.</p> -->
											<!--<a href="#" class="view-more-btn">Read More <i class="fa fa-angle-right"></i></a> -->
										</div>
									</div>
								</div><!-- ends: .col-sm-4 -->
								
								<div class="col-sm-6">
									<div class="single-blog">
										<figure>
											<div class="blog-thumb">
												<img src="resources/images/trip5.jpg" alt="" class="img-responsive">
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
											<h3><a>School Trip</a></h3>
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