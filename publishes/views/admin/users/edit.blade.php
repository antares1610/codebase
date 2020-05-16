@extends('layouts.app')

@section('page_title', 'Edit Pengguna')

@section('content')
	<x-breadcrumb :links="$breadcrumb"/>
	<x-code-base-block title="Edit Pengguna">
		<form action="{{ route('users.update', ['user' => $user]) }}" method="POST">
			@method('PUT')
			@include('admin.users.partials.form', ['user' => $user, 'edit' => true])
		</form>
	</x-code-base-block>
@endsection