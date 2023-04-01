@extends('layout')
@section('content')

<!--============================
		Contact Page Header
	=============================-->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>BECOME A TEACHER</h1>
				<ul class="list-unstyled">
					<li><a href="#">Home</a></li>
					<li class="active">Teacher Registration</li>
				</ul>
			</div>
		</div>
	</div>
</section><!-- Ends: .page-header -->

<!--============================
		Teacher Page Content
	=============================-->
<section class="teacher-registration-wrapper">
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
			    <div><h2>Thank you showing interest! Unfortunately, at this time, we don't have any job vacancies .</h2>
			     </div>   
			</div> 
		</div>
    
</section><!-- Ends: .contact-wrapper -->

@endsection