<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-focus">
	<head>
		<!-- Required meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
		<link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">
		@stack('styles')

		<title>@yield('page_title')</title>
	</head>
	<body>
		
		<!-- Page Container -->
		<div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll main-content-boxed">
			@include('layouts.partials.aside')
			@include('layouts.partials.sidebar')
			@include('layouts.partials.header')

			<!-- Main Container -->
			<main id="main-container">
				@stack('content_top')

				<!-- Page Content -->
				<div class="content">
					@yield('content')
				</div>
				<!-- END Page Content -->
			</main>
			<!-- END Main Container -->

			@include('layouts.partials.footer')
		</div>
		<!-- END Page Container -->

		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
			@csrf
		</form>

		<!-- Codebase JS -->
		<script src="{{ asset('assets/js/codebase.core.min.js') }}"></script>
		<script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
		@stack('scripts')
	</body>
</html>