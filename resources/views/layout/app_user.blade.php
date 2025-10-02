<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials_user/head')
</head>

<body>
	<!-- Spinner Start -->
	<div id="spinner"
		class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	@include('partials_user.topbar')

	@yield('content')

	@include('partials_user.footer')

</body>
</html>