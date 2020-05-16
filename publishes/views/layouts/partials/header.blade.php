<!-- Header -->
<header id="page-header">


	<!-- Header Content -->
	<div class="content-header">

		<!-- Left Section -->
		<div class="content-header-section">
			
			<!-- Toggle Sidebar -->
			<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
			<button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
				<i class="fa fa-navicon"></i>
			</button>
			<!-- END Toggle Sidebar -->

		</div>
		<!-- END Left Section -->

		<!-- Right Section -->
		<div class="content-header-section">

			@auth
				<!-- User Dropdown -->
				<div class="btn-group" role="group">

					<button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-user d-sm-none"></i>
						<span class="d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
						<i class="fa fa-angle-down ml-5"></i>
					</button>

					<div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
						<a class="dropdown-item" href="{{ route('profile.my_profile') }}">
							<i class="si si-user mr-5"></i> Profil
						</a>

						<div class="dropdown-divider"></div>

						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							<i class="si si-logout mr-5"></i> Keluar
						</a>
					</div>
				</div>
				<!-- END User Dropdown -->
			@endauth

			<!-- Toggle Side Overlay -->
			<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
			<button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
				<i class="fa fa-tasks"></i>
			</button>
			<!-- END Toggle Side Overlay -->

		</div>
		<!-- END Right Section -->
	</div>
	<!-- END Header Content -->


	<!-- Header Loader -->
	<!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
	<div id="page-header-loader" class="overlay-header bg-primary">
		<div class="content-header content-header-fullrow text-center">
			<div class="content-header-item">
				<i class="fa fa-sun-o fa-spin text-white"></i>
			</div>
		</div>
	</div>
	<!-- END Header Loader -->


</header>
<!-- END Header -->