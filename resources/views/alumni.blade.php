@extends('layout')
@section('content')

<!--============================
		Contact Page Header
	=============================-->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>OUR ALUMNI</h1>
				<ul class="list-unstyled">
					<li><a href="#">Home</a></li>
					<li class="active">Alumni</li>
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
									<img src="resources/images/index06/Deep.jpg" alt="" class="img-responsive">
									
								</figure>
								<div class="teacher-info">
									<h4><a>Deepa Malik</a></h4>
									<span>MBA-DMS IIT Delhi, Maersk India Pvt Ltd</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Shrey.jpg" alt="" class="img-responsive">
									
								</figure>
								<div class="teacher-info">
									<h4><a>Shrey</a></h4>
									<span>MBA , Senior officer Zydus, Cadilla.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Rahul.jpg" alt="" class="img-responsive">
									
								</figure>
								<div class="teacher-info">
									<h4><a>Rahul</a></h4>
									<span>MCA, Own Business Pharma.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Anvita.jpg" alt="" class="img-responsive">
									
								</figure>
								<div class="teacher-info">
									<h4><a>Anvita Singh Chauhan</a></h4>
									<span>PGDBM in Banking Management, Anand Rathi Shares and stock brokers
limited.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Mudit.jpg" alt="" class="img-responsive">
									
								</figure>
								<div class="teacher-info">
									<h4><a>Mudit Chaturvedi</a></h4>
									<span>PhD, General Manager Jagran Prakashan Ltd.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Nitin.jpg" alt="" class="img-responsive">
									
								</figure>
								<div class="teacher-info">
									<h4><a>Nitin Bajpai</a></h4>
									<span>MCA Assistant, Vice-President Max life insurance Pvt Ltd.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Dhirendra.jpg" alt="" class="img-responsive">
									
								</figure>
								<div class="teacher-info">
									<h4><a>Dhirendra Chauhan</a></h4>
									<span>M.Phil, PhD, Associate Professor higher Education UP.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Ruchi.jpg" alt="" class="img-responsive">
									
								</figure>
								<div class="teacher-info">
									<h4><a>Ruchi</a></h4>
									<span>MBA, Assistant Professor Ram Swaroop Management Institute.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Kapil.jpg" alt="" class="img-responsive">
								</figure>
								<div class="teacher-info">
									<h4><a>Kapil Chaturvedi</a></h4>
									<span>MBA Owner, Vinkare life sciences Pvt ltd.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Amit.jpg" alt="" class="img-responsive">
								</figure>
								<div class="teacher-info">
									<h4><a>Amit Chauhan</a></h4>
									<span>MBA, Associate Consultant HCL Technologies Ltd.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/VIjant.jpg" alt="" class="img-responsive">
								</figure>
								<div class="teacher-info">
									<h4><a>Vijant Gupta</a></h4>
									<span>B.Pharma, ASM Intensive Healthcare.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Rizwaan.jpg" alt="" class="img-responsive">
								</figure>
								<div class="teacher-info">
									<h4><a>Rizwan</a></h4>
									<span>B.Pharma,<br> MBA, ASM in Medical.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Wahid.jpg" alt="" class="img-responsive">
								</figure>
								<div class="teacher-info">
									<h4><a>Wahid Hussain</a></h4>
									<span>B.tech, Business</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Juhi.jpg" alt="" class="img-responsive">
								</figure>
								<div class="teacher-info">
									<h4><a>Juhi</a></h4>
									<span>M.com</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/nishant1.jpg" alt="" class="img-responsive">
								</figure>
								<div class="teacher-info">
									<h4><a>Nishant Bansal</a></h4>
									<span>MBA, Associate Consultant Ogilvy.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						<div class="col-sm-3">
							<div class="teacher-single">
								<figure>
									<img src="resources/images/index06/Nivedita.jpg" alt="" class="img-responsive">
								</figure>
								<div class="teacher-info">
									<h4><a>Nivedita Pathak</a></h4>
									<span>PhD Medical Oncology, AIIMS New Delhi.</span>
								</div>
							</div><!-- Ends: .teacher-single -->
						</div><!-- Ends: .col-sm-3 -->
						
						
						
						

			        </div><!-- Ends: .teachers-four-wrapper -->
			        
			        
				</div><!-- Ends: .col-md-12 -->

			</div>
		</div>
</section><!-- Ends: .contact-wrapper -->

@endsection