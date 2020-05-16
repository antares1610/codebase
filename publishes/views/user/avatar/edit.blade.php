@extends('layouts.app')

@section('page_title', 'Ganti Avatar')

@section('content')
	<x-breadcrumb :links="$breadcrumb"/>
	<x-code-base-block title="Ganti Avatar">
		<x-avatar :url="$user->avatar()" size="200"/>
		<hr>

		<form action="{{ route('avatar.edit') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<x-file id="fieldAvatar" name="avatar" :message="$errors->first('avatar')"/>

			<div class="form-group">
				<button type="submit" class="btn btn-alt-primary">Simpan</button>
			</div>
		</form>
	</x-code-base-block>
@endsection
