@extends('layouts.app')

@section('page_title', 'Buat Pengguna Baru')

@section('content')
	<x-breadcrumb :links="$breadcrumb"/>
	<x-code-base-block title="Buat Pengguna Baru">
		<form action="{{ route('users.store') }}" method="POST">
			@include('admin.users.partials.form', ['user' => ''])
		</form>
	</x-code-base-block>
@endsection