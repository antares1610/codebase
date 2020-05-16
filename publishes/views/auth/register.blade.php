@extends('layouts.app-auth')

@section('page_title', 'Daftar')

@section('content')
	<x-code-base-auth-header>Daftar</x-code-base-auth-header>

	<!-- Sign Up Form -->
	<form class="js-validation-signup px-30" action="{{ route('register') }}" method="POST">
		@csrf

		<x-code-base-input-text label="Nama" name="name" id="fieldName" :value="old('name')" :message="$errors->first('name')"/>
		<x-code-base-input-text label="E-Mail" name="email" id="fieldEmail" :value="old('email')" :message="$errors->first('email')"/>
		<x-code-base-input-text type="password" label="Password" name="password" id="fieldPassword" :value="old('password')" :message="$errors->first('password')"/>
		<x-code-base-input-text type="password" label="Ulangi Password" name="password_confirmation" id="fieldPasswordConfirmation" :value="old('password_confirmation')" :message="$errors->first('password_confirmation')"/>		

	    <div class="form-group">
	        <button type="submit" class="btn btn-sm btn-hero btn-alt-success">
	            <i class="fa fa-plus mr-10"></i> Daftar
	        </button>
	        <div class="mt-30">
	            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('login') }}">
	                <i class="fa fa-user text-muted mr-5"></i> Masuk
	            </a>
	        </div>
	    </div>
	</form>
	<!-- END Sign Up Form -->
@endsection