@extends('layouts.app')

@section('page_title', 'Ganti Password')

@section('content')
	<x-breadcrumb :links="$breadcrumb"/>
	<x-codebase-block title="Ganti Password">
		<x-alert type="success" class="mb-2" :closeable="false">Password berhasil diganti</x-alert>

		<div class="form-group">
			<a href="{{ route('home') }}" class="btn btn-outline-secondary">&laquo; Beranda</a>
		</div>
	</x-codebase-block>
@endsection
