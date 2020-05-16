@extends('layouts.app')

@section('page_title', 'Profil Tidak Ditemukan')

@section('content')
	<x-code-base-block title="Profil Tidak Ditemukan">
		<x-alert type="warning" :closeable="false">URL profil salah. Profil tidak ditemukan.</x-alert>
	</x-code-base-block>
@endsection
