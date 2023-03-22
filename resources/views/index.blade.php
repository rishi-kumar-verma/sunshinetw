@extends('layout')
@section('content')
<!--==================
		Slider
	===================-->
<section class="slider">
	<div class="rev_slider_wrapper">
		<div id="rev_slider_1" class="rev_slider" style="display:none">

			<!-- BEGIN SLIDES LIST -->
			<ul>
				<li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="resources/images/slide04-thumb.jpg">
					<div class="su-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="resources/images/slide01.jpg" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" data-x="left" data-hoffset="0" data-y="center" data-voffset="-70" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; text-transform:capitalize; font-family:'Roboto Slab', serif; white-space: nowrap; font-weight:600;">Take The First Step
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" data-x="left" data-hoffset="0" data-y="center" data-voffset="10" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; text-transform:capitalize; font-family:'Roboto Slab', serif; white-space: nowrap; font-weight:600;">To Knowledge With Us
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption font-lora sfb tp-resizeme letter-space-5" data-x="left" data-hoffset="0" data-y="center" data-voffset="-160" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 7; font-size:20px; color:#fff; font-family:'Roboto Slab', serif; max-width: auto; max-height: auto; white-space: nowrap; font-weight:500;">The Goal Of Education Is The Advancement of Knowledge
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption lfb tp-resizeme" data-x="left" data-hoffset="0" data-y="center" data-voffset="120" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 8;"><a href="aboutus.html" class="el-btn-regular slider-btn-left">About Us</a> <a href="contact.html" class="el-btn-regular">Contact Us</a>
					</div>
				</li>
				<li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="resources/images/slide05-thumb.jpg">
					<div class="su-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="resources/images/slide02.jpg" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" data-x="left" data-hoffset="0" data-y="center" data-voffset="-70" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; text-transform:capitalize; font-family:'Roboto Slab', serif; white-space: nowrap; font-weight:600;">Take The First Step
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" data-x="left" data-hoffset="0" data-y="center" data-voffset="10" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; text-transform:capitalize; font-family:'Roboto Slab', serif; white-space: nowrap; font-weight:600;">To Knowledge With Us
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption font-lora sfb tp-resizeme letter-space-5" data-x="left" data-hoffset="0" data-y="center" data-voffset="-160" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 7; font-size:20px; color:#fff; font-family:'Roboto Slab', serif; max-width: auto; max-height: auto; white-space: nowrap; font-weight:500;">The Goal Of Education Is The Advancement of Knowledge
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption lfb tp-resizeme" data-x="left" data-hoffset="0" data-y="center" data-voffset="120" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 8;"><a href="aboutus.html" class="el-btn-regular slider-btn-left">Know More</a> <a href="contact.html" class="el-btn-regular">Contact Us</a>
					</div>
				</li>
			</ul><!-- END SLIDES LIST -->

		</div><!-- END SLIDER CONTAINER -->
	</div><!-- END SLIDER CONTAINER WRAPPER -->
</section>

<!--==================
		About
	===================-->
<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 about-text">
				<h2>Welcome To <span>Sunshine</span></h2>
				<p>Sunshine School prides itself on the quality of its educational programmes, the professionalism of its
					staff, the enthusiasm of its students and the high level of support provided by parents and
					community members. We are an open school and we actively seek participation and involvement
					from the whole school community.</p>
				<p>The school commenced in 1982. Sunshine School always focuses on
					providing quality education and the best values to their students that help them become future
					leaders.</p>
				<a href="aboutus.html" class="el-btn-regular">Read More</a>
			</div>
			<div class="col-sm-5">
				<div class="about-image">
					<img src="resources/images/about-img.jpg" alt="" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .about -->

<!--==================
		Courses
	===================-->

<!--==================
		Achievements
	===================-->
<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header">
				<h2>Our <span> Achievements</span></h2>
				<!--<span><img src="resources/images/edu-icon.png" alt=""></span> -->
			</div><!-- ends: .section-header -->

			<div class="col-sm-12 blog-posts">
				<div class="row">
					<div class="col-sm-4">
						<div class="single-blog">
							<figure>
								<div class="blog-thumb">
									<img src="resources/images/avantika.png" alt="" class="img-responsive">
								</div>
								<!--<figcaption>
										<p class="post-date">1st July</p>
										<a href="" class="post-category">Marketing</a>
									</figcaption> -->
							</figure>
							<div class="blog-excerpt">
								<h3><a>RASHTRIYA MAHATMA SAMMAN</a></h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer sits adipisic ing elit, sed diam nonummy nbh diam.</p>
									<a href="">Read More <i class="fa fa-long-arrow-right"></i></a> -->
							</div>
						</div>
					</div><!-- ends: .col-sm-4 -->
					<div class="col-sm-4">
						<div class="single-blog">
							<figure>
								<div class="blog-thumb">
									<img src="resources/images/event/chambal.png" alt="" class="img-responsive">
								</div>
								<!--<figcaption>
										<p class="post-date">1st July</p>
										<a href="" class="post-category">Marketing</a>
									</figcaption> -->
							</figure>
							<div class="blog-excerpt">
								<h3><a>CHAMBAL LITERARY FESTIVAL</a></h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer sits adipisic ing elit, sed diam nonummy nbh diam.</p>
									<a href="">Read More <i class="fa fa-long-arrow-right"></i></a> -->
							</div>
						</div>
					</div><!-- ends: .col-sm-4 -->

					<div class="col-sm-4">
						<div class="single-blog">
							<figure>
								<div class="blog-thumb">
									<img src="resources/images/event/kasif.png" alt="" class="img-responsive">
								</div>
								<!--<figcaption>
										<p class="post-date">1st July</p>
										<a href="" class="post-category">Marketing</a>
									</figcaption> -->
							</figure>
							<div class="blog-excerpt">
								<h3><a>K Asif Chambal International Film FestivalL</a></h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer sits adipisic ing elit, sed diam nonummy nbh diam.</p>
									<a href="">Read More <i class="fa fa-long-arrow-right"></i></a> -->
							</div>
						</div>
					</div><!-- ends: .col-sm-4 -->

					<br><br>

					<div>
						<a href="achievement.html" class="el-btn-regular">View All</a>
					</div>

				</div>
			</div><!-- ends: .blog-posts -->
		</div>
	</div>
</section><!-- ends: .blog -->

<!--==================
		Testimonial
	===================-->
<section class="testimonial">
	<div class="container">
		<div class="row">
			<div id="testimonial-carousel" class="owl-carousel testimonial-carousel col-sm-12">
				<div class="testimonial-single">
					<div class="client-image">
						<img src="resources/images/s01.jpg" alt="" class="img-responsive img-circle">
					</div>
					<div class="client-content">
						<p>“A Postgraduate in Technology, Education and Business Management, with over 15 years of qualitative
							experience in teaching and administration. ”</p>
						<h3 class="client-info">Er.Shikhar Chaturvedi, <span>Director-Manager</span></h3>
					</div>
				</div><!-- ends: .testimonial-single -->
				<div class="testimonial-single">
					<div class="client-image">
						<img src="resources/images/s02.jpg" alt="" class="img-responsive img-circle">
					</div>
					<div class="client-content">
						<p>“I am honored to lead a school with such persevering students, an extremely dedicated staff, and a supportive school community. ”</p>
						<h3 class="client-info">Mrs. Manisha Chaturvedi, <span>Chairman</span></h3>
					</div>
				</div><!-- ends: .testimonial-single -->


			</div>
		</div>
	</div>
</section><!-- ends: .testimonial -->

<!--==================
		Achievements
	===================-->
<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header">
				<h2>Our <span> Event</span></h2>
			</div><!-- ends: .section-header -->

			<div class="col-sm-12 blog-posts">
				<div class="row">
					<div class="col-sm-4">
						<div class="single-blog">
							<figure>
								<div class="blog-thumb">
									<img src="resources/images/childrenday.jpg" alt="" class="img-responsive">
								</div>
							</figure>
							<div class="blog-excerpt">
								<h3><a>Children's Day</a></h3>
							</div>
						</div>
					</div><!-- ends: .col-sm-4 -->
					<div class="col-sm-4">
						<div class="single-blog">
							<figure>
								<div class="blog-thumb">
									<img src="resources/images/christmas.jpg" alt="" class="img-responsive">
								</div>

							</figure>
							<div class="blog-excerpt">
								<h3><a>Christmas Day</a></h3>

							</div>
						</div>
					</div><!-- ends: .col-sm-4 -->

					<div class="col-sm-4">
						<div class="single-blog">
							<figure>
								<div class="blog-thumb">
									<img src="resources/images/ind.jpg" alt="" class="img-responsive">
								</div>

							</figure>
							<div class="blog-excerpt">
								<h3><a>School Trip</a></h3>

							</div>
						</div>
					</div><!-- ends: .col-sm-4 -->

					<a href="events.html" class="el-btn-regular">View All</a>


				</div>
			</div><!-- ends: .blog-posts -->
		</div>
	</div>
</section><!-- ends: .blog -->

@endsection