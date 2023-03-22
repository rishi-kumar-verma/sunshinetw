@extends('layout')
@section('content')

<!--============================
		Contact Page Header
	=============================-->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Contact</h1>
				<ul class="list-unstyled">
					<li><a href="#">Home</a></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
</section><!-- Ends: .page-header -->

<!--============================
		Contact Content
	=============================-->
<section class="contact-wrapper">
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
			<div class="col-sm-7">
				<div class="contact-one-form">
					<h2>Write Your Message Here</h2>
					<form method="post" action="{{url('upload_details')}}" id="contact-form">
						@csrf
						<div class="form-group row">
							<div class="col-sm-6">
								<input type="text" name="firstname" value="" placeholder="Full name" required>
							</div>
							<div class="col-sm-6">
								<input type="email" name="email" value="" placeholder="Email" required>
							</div>
							<div class="col-sm-6">
								<input type="text" name="subject" value="" placeholder="Subject" required>
							</div>
							<div class="col-sm-6">
								<input type="text" name="phone" value="" placeholder="Phone *" required>
							</div>
							<div class="col-sm-12">
								<textarea name="message" placeholder="write.."></textarea>
							</div>
							<div class="col-sm-12">
								<button type="submit">Send Message</button>
							</div>
						</div>
						<div id="form-messages"></div>
					</form>
				</div><!-- Ends: .contact-one-form -->
			</div><!-- Ends: .col-sm-7 -->
			<div class="col-sm-5">
				<div class="contact-map">
					<h2>Find Our Location</h2>
					<iframe height="415" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d890.5466391222844!2d79.01574617968137!3d26.770322600643006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3975df2dd29db4eb%3A0x28d86886917885e!2sSUNSHINE%20SCHOOL!5e0!3m2!1sen!2sin!4v1678795944530!5m2!1sen!2sin" allowfullscreen>
					</iframe>
				</div>
			</div><!-- Ends: .col-sm-5 -->
			<div class="col-sm-12">
				<div class="contact-boxes row">
					<div class="col-sm-4">
						<i class="fa fa-phone"></i>
						<h3>Call Us</h3>
						<p>Phone: +91-7505625664</p>
					</div>
					<div class="col-sm-4">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>info@sunshinetw.in</p>
					</div>
					<div class="col-sm-4">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>Near Pachraha Kunj, Etawah, India, 206001</p>
					</div>
				</div>
			</div><!-- Ends: .col-sm-12 -->
		</div>
	</div>
</section><!-- Ends: .contact-wrapper -->

@endsection