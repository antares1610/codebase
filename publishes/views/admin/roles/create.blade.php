@extends('layouts.app')

@section('page_title', 'Buat Role')

@section('content')
	<x-breadcrumb :links="$breadcrumb"/>
	<x-code-base-block title="Buat Role">
		<form method="POST" action="{{ route('roles.store') }}">
			@include('admin.roles.partials.form', ['role' => ''])
		</form>
	</x-code-base-block>
@endsection
