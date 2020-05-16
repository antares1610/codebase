@extends('layouts.app-auth')

@section('page_title', 'Reset Password')

@section('content')
	<x-code-base-auth-header>Reset Password</x-code-base-auth-header>

	<!-- Reminder Form -->
	<form class="js-validation-reminder px-30" action="{{ route('password.email') }}" method="POST">
		@csrf

		@if (session('status'))
			<x-alert type="success">
				{{ session('status') }}
			</x-alert>
		@endif

		<x-code-base-input-text label="E-Mail" name="email" id="fieldEmail" :value="old('email')" :message="$errors->first('email')"/>

		<div class="form-group">
			<button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
				<i class="fa fa-asterisk mr-10"></i> Reset Password
			</button>
			<div class="mt-30">
				<a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('login') }}">
					<i class="fa fa-user text-muted mr-5"></i> Masuk
				</a>
			</div>
		</div>
	</form>
	<!-- END Reminder Form -->
@endsection