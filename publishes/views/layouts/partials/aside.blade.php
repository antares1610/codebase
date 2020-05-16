<!-- Side Overlay-->
<aside id="side-overlay">
	<!-- Side Header -->
	<div class="content-header content-header-fullrow">
		<div class="content-header-section align-parent">

			<!-- Close Side Overlay -->
			<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
			<button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
				<i class="fa fa-times text-danger"></i>
			</button>
			<!-- END Close Side Overlay -->

			@auth
				<!-- User Info -->
				<div class="content-header-item">
					<a class="img-link mr-5" href="{{ route('profile.my_profile') }}">
						<img class="img-avatar img-avatar32" src="{{ Auth::user()->avatar() }}" alt="Avatar">
					</a>
					<a class="align-middle link-effect text-primary-dark font-w600" href="{{ route('profile.my_profile') }}">{{ Auth::user()->name }}</a>
				</div>
				<!-- END User Info -->
			@endauth

		</div>
	</div>
	<!-- END Side Header -->


	<!-- Side Content -->
	<div class="content-side">
	</div>
	<!-- END Side Content -->
</aside>
<!-- END Side Overlay -->