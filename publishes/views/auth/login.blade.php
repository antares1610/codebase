@extends('layouts.app-auth')

@section('page_title', 'Masuk')

@section('content')
	<x-code-base-auth-header>Masuk</x-code-base-auth-header>
								
	<!-- Sign In Form -->
	<form class="js-validation-signin px-30" action="{{ route('login') }}" method="POST">
		@csrf

		<x-code-base-input-text label="E-Mail" name="email" id="fieldEmail" :value="old('email')" :message="$errors->first('email')"/>
		<x-code-base-input-text type="password" label="Password" name="password" id="fieldPassword" :value="old('password')" :message="$errors->first('password')"/>

		@php
			if (old('_token')) {
				if (old('remember')) {
					$checked = true;
				}
				else {
					$checked = false;
				}
			}
			else {
				$checked = true;
			}
		@endphp
		<div class="form-group row">
			<div class="col-12">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="checkboxRemember" name="remember" {{ $checked ? 'checked' : '' }}>
					<label class="custom-control-label" for="checkboxRemember">Tetap masuk</label>
				</div>
			</div>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
				<i class="si si-login mr-10"></i> Masuk
			</button>
			<div class="mt-30">
				@if (Route::has('register'))
					<a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('register') }}">
						<i class="fa fa-plus mr-5"></i> Daftar
					</a>
				@endif

				@if (Route::has('password.request'))
					<a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('password.request') }}">
						<i class="fa fa-warning mr-5"></i> Lupa Password
					</a>
				@endif
			</div>
		</div>
	</form>
	<!-- END Sign In Form -->
@endsection