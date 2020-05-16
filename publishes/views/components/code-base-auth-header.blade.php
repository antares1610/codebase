<!-- Header -->
<div class="px-30 py-10">
	<a class="link-effect font-w700" href="{{ route('home') }}">
		<span class="font-size-xl">{{ setting('app.name') }}</span>
	</a>
	<h1 class="h3 font-w700 mt-30 mb-10">{{ $slot }}</h1>
</div>
<!-- END Header -->