@extends('layouts.app')

@section('page_title', 'Edit Role')

@section('content')
	<x-breadcrumb :links="$breadcrumb"/>
	<x-code-base-block title="Edit Role">
		<form method="POST" action="{{ route('roles.update', ['role' => $role]) }}">
			@method('PUT')
			@include('admin.roles.partials.form', ['role' => $role])
		</form>
	</x-code-base-block>
@endsection
