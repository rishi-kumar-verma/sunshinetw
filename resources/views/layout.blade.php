<!doctype html>
<html class="no-js" lang="en">

@include('head')
<body>
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
  	@include('header')

  	@yield('content')

	@include('footer')
	
	@include('script')
</body>


</html>