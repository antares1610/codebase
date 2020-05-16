@extends('layouts.app-auth')

@section('page_title', 'Verifikasi Alamat E-Mail')

@section('content')
	<div class="text-center">
		<!-- Header -->
		<div class="px-30 pt-10 pb-30">
			<a class="link-effect font-w700" href="{{ route('home') }}">
				<span class="font-size-xl">{{ setting('app.name') }}</span>
			</a>
			<h1 class="h3 font-w700 mt-30 mb-10">Verifikasi Alamat E-Mail</h1>
			<h2 class="h5 font-w400 text-muted mb-30">
				E-mail harus terverifikasi sebelum melanjutkan. 
				Jika belum menerima e-mail verifikasi, klik tombol di bawah untuk mengirim ulang.
			</h2>
		</div>
		<!-- END Header -->

	    <!-- Send Form -->
	    <form class="js-validation-lock px-30" action="{{ route('verification.resend') }}" method="POST">
	    	@csrf

			@if (session('resent'))
				<x-alert type="success">
					E-mail verifikasi yang baru telah dikirim
				</x-alert>
			@endif
	    	
	        <div class="form-group">
	            <button type="submit" class="btn btn-sm btn-hero btn-alt-secondary">
	                <i class="si si-envelope mr-10"></i> Kirim Ulang
	            </button>
	        </div>
	    </form>
	    <!-- END Send Form -->
	</div>
@endsection