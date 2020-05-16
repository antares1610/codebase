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
		<div id="page-container" class="main-content-boxed">
			<!-- Main Container -->
			<main id="main-container">
				<!-- Page Content -->
				<div class="bg-image" style="background-image: url('{{ asset('assets/media/photos/photo34@2x.jpg') }}');">
					<!-- Row -->
					@php
						switch (Route::currentRouteName()) {
							case 'login':
								$color = 'bg-black-op';
								break;
							case 'register':
								$color = 'bg-earth-op';
								break;
							case 'password.request':
								$color = 'bg-default-op';
								break;
							case 'password.reset':
								$color = 'bg-default-op';
								break;
							case 'password.confirm':
								$color = 'bg-pulse-op';
								break;
							default:
								$color = 'bg-black-op';
								break;
						}
					@endphp
					<div class="row mx-0 {{ $color }}">
						<!-- Col 1 -->
						<div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
							<div class="p-30 invisible" data-toggle="appear">
								<p class="font-size-h3 font-w600 text-white">
									{{ setting('app.description') }}
								</p>
								<p class="font-italic text-white-op">
									Copyright &copy; {{ now()->year }}
								</p>
							</div>
						</div>
						<!-- END Col 1 -->

						<!-- Col 2 -->
						<div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
							<div class="content content-full">
								@yield('content')
							</div>
						</div>
						<!-- END Col 2 -->
					</div>
					<!-- END Row -->
				</div>
				<!-- END Page Content -->
			</main>
			<!-- END Main Container -->
		</div>
		<!-- END Page Container -->

		<!-- Codebase JS -->
		<script src="{{ asset('assets/js/codebase.core.min.js') }}"></script>
		<script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
		@stack('scripts')
	</body>
</html>