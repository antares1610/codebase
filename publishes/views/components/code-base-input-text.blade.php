<div class="form-group row {{ $invalid ? 'is-invalid' : '' }}">
	<div class="col-12">
		<div class="form-material floating">
			<input type="{{ $type }}" class="form-control" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}">
			<label for="{{ $id }}">{{ $label }}</label>
		</div>
		@if ($invalid)
			<span class="invalid-feedback">{{ $message }}</span>
		@endif
	</div>
</div>