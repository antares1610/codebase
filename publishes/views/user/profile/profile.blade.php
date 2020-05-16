@extends('layouts.app')

@section('page_title')
	Profil {{ $user->name }}
@endsection

@push('content_top')
	<!-- User Info -->
	<div class="bg-image bg-image-bottom" style="background-image: url('{{ asset('assets/media/photos/photo13@2x.jpg') }}');">
		<div class="bg-primary-dark-op py-30">
			<div class="content content-full text-center">

				<!-- Avatar -->
				<div class="mb-15">
					<a class="img-link" href="{{ $user->avatar() }}">
						<img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ $user->avatar() }}" alt="Avatar">
					</a>
				</div>
				<!-- END Avatar -->

				<!-- Personal -->
				<h1 class="h3 text-white font-w700 mb-10">
					{{ $user->name }}
				</h1>
				<h2 class="h5 text-white-op">
					{{ $user->role->name }}
				</h2>
				<!-- END Personal -->

				@auth
					@if (Auth::user()->id == $user->id)
						<!-- Actions -->
						<a class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5 px-20" href="{{ route('profile.edit') }}">
							<i class="fa fa-pencil"></i>
						</a>
						<!-- END Actions -->
					@endif
				@endauth
			</div>
		</div>
	</div>
	<!-- END User Info -->
@endpush

@section('content')
@endsection
