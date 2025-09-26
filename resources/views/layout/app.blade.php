<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials/head')
</head>

<body>
	<div id="preloader">
		<div class="loader">
			<div class="dots">
				<div class="dot mainDot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>

		</div>
	</div>
	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper" class="wallet-open active">
	
		<!--* Topbar *-->
		@include('partials.topbar')

		<!--* Sidebar **-->
		@include('partials.sidebar')



		<div class="content-body">
			 @yield('content')
		</div>

	@include('partials/footer')
</body>

</html>