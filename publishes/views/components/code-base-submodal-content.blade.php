<div class="block block-themed block-transparent mb-0">
	<div class="block-header bg-primary-dark">
		<h3 class="block-title" id="{{ $id }}Label">{{ $title }}</h3>
		<div class="block-options">
			<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
				<i class="si si-close"></i>
			</button>
		</div>
	</div>
	<div class="block-content">
		{{ $slot }}
	</div>
</div>