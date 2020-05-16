@extends('layouts.app')

@section('page_title', 'Pengaturan')

@section('content')
	<x-breadcrumb :links="$breadcrumb"/>
	<x-code-base-block title="Pengaturan">
		<div class="form-row">
			@foreach ($settings as $setting)
				<div class="col-12 col-md-4 col-lg-3">
					<div class="form-group">
						<a href="{{ route('settings.edit', ['setting' => $setting]) }}" class="btn btn-alt-info btn-block mb-2">
							{{ $setting->name }}
						</a>
					</div>
				</div>
			@endforeach
		</div>
	</x-code-base-block>
@endsection
