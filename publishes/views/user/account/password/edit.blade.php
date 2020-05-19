@extends('layouts.app')

@section('page_title', 'Ganti Password')

@section('content')
	<x-breadcrumb :links="$breadcrumb"/>
	<x-code-base-block title="Ganti Password">
		@if (session('success'))
			<x-alert type="success">
				{{ session('success') }}
			</x-alert>
		@endif

		<form action="{{ route('account.password') }}" method="POST">
			@csrf
			@method('PUT')
			<x-form-group-text type="password" label="Password Sekarang" name="current_password" id="fieldCurrentPassword" :message="$errors->first('current_password')"/>
			<hr>
			<x-form-group-text type="password" label="Password Baru" name="password" id="fieldPassword" :message="$errors->first('password')"/>
			<x-form-group-text type="password" label="Konfirmasi Password" name="password_confirmation" id="fieldPasswordConfirmation" :message="$errors->first('password_confirmation')"/>

			<div class="form-group">
				<button type="submit" class="btn btn-alt-primary">Simpan</button>
			</div>
		</form>
	</x-code-base-block>
@endsection
