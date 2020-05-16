<nav class="breadcrumb bg-white push">
	<a class="breadcrumb-item" href="{{ route('home') }}">Beranda</a>
	@foreach ($links as $link_text => $link_url)
		@if (empty($link_url))
			<span class="breadcrumb-item active">{{ $link_text }}</span>
		@else
			<a class="breadcrumb-item" href="{{ $link_url }}">{{ $link_text }}</a>
		@endif
	@endforeach
</nav>