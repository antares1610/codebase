@extends('layouts.app-auth')

@section('page_title', 'Konfirmasi Password')

@section('content')
	<div class="text-center">
		<!-- Header -->
		<div class="px-30 pt-10 pb-30">
			<a class="link-effect font-w700" href="{{ route('home') }}">
				<span class="font-size-xl">{{ setting('app.name') }}</span>
			</a>
			<h1 class="h3 font-w700 mt-30 mb-10">Konfirmasi Password</h1>
			<h2 class="h5 font-w400 text-muted mb-30">Konfirmasi password sebelum melanjutkan</h2>
			<img class="img-avatar img-avatar96" src="{{ Auth::user()->avatar() }}" alt="Avatar">
		</div>
		<!-- END Header -->

	    <!-- Unlock Form -->
	    <form class="js-validation-lock px-30" action="{{ route('password.confirm') }}" method="POST">
	    	@csrf

	    	<x-code-base-input-text type="password" label="Password" name="password" id="fieldPassword" :value="old('email')" :message="$errors->first('password')"/>

	        <div class="form-group">
	            <button type="submit" class="btn btn-sm btn-hero btn-alt-danger">
	                <i class="si si-lock-open mr-10"></i> Lanjutkan
	            </button>
	        </div>
	    </form>
	    <!-- END Unlock Form -->
	</div>
@endsection