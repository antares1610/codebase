<div class="block">
	<div class="block-header block-header-default">
		<h3 class="block-title">{{ $title }}</h3>
	</div>
	<div {{ $attributes->merge(['class' => 'block-content']) }}>
		{{ $slot }}
	</div>
</div>