@extends('layouts.app-auth')

@section('page_title', 'Reset Password')

@section('content')
	<x-code-base-auth-header>Reset Password</x-code-base-auth-header>

	<!-- Reset Form -->
	<form method="POST" action="{{ route('password.update') }}">
		@csrf
		<input type="hidden" name="token" value="{{ $token }}">
		<x-code-base-input-text label="E-Mail" name="email" id="fieldEmail" :value="$email ?? old('email')" :message="$errors->first('email')"/>
		<x-code-base-input-text type="password" label="Password Baru" name="password" id="fieldPassword" :value="old('password')" :message="$errors->first('password')"/>
		<x-code-base-input-text type="password" label="Ulangi Password" name="password_confirmation" id="fieldPasswordConfirmation" :value="old('password_confirmation')" :message="$errors->first('password_confirmation')"/>

		<div class="form-group">
			<button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
				<i class="fa fa-asterisk mr-10"></i> Reset Password
			</button>
		</div>
	</form>
	<!-- END Reset Form -->
@endsection