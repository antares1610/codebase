<!-- Sidebar -->
<nav id="sidebar">
	<!-- Sidebar Content -->
	<div class="sidebar-content">


		<!-- Side Header -->
		<div class="content-header content-header-fullrow px-15">

			<!-- Mini Mode -->
			<div class="content-header-section sidebar-mini-visible-b">
				<!-- Logo -->
				<span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
					<span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
				</span>
				<!-- END Logo -->
			</div>
			<!-- END Mini Mode -->

			<!-- Normal Mode -->
			<div class="content-header-section text-center align-parent sidebar-mini-hidden">

				<!-- Close Sidebar, Visible only on mobile screens -->
				<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
				<button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
					<i class="fa fa-times text-danger"></i>
				</button>
				<!-- END Close Sidebar -->

				<!-- Logo -->
				<div class="content-header-item">
					<a class="link-effect font-w700" href="{{ route('home') }}">
						<span class="font-size-xl text-primary">{{ setting('app.name') }}</span>
					</a>
				</div>
				<!-- END Logo -->

			</div>
			<!-- END Normal Mode -->

		</div>
		<!-- END Side Header -->


		@auth
			<!-- Side User -->
			<div class="content-side content-side-full content-side-user px-10 align-parent">

				<!-- Visible only in mini mode -->
				<div class="sidebar-mini-visible-b align-v animated fadeIn">
					<img class="img-avatar img-avatar32" src="{{ Auth::user()->avatar() }}" alt="Avatar">
				</div>
				<!-- END Visible only in mini mode -->

				<!-- Visible only in normal mode -->
				<div class="sidebar-mini-hidden-b text-center">

					<a class="img-link" href="{{ route('profile.my_profile') }}">
						<img class="img-avatar" src="{{ Auth::user()->avatar() }}" alt="Avatar">
					</a>

					<ul class="list-inline mt-10">
						<li class="list-inline-item">
							<a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="{{ route('profile.my_profile') }}">
								{{ Auth::user()->name }}
							</a>
						</li>
						<li class="list-inline-item">
							<a class="link-effect text-dual-primary-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<i class="si si-logout"></i>
							</a>
						</li>
					</ul>

				</div>
				<!-- END Visible only in normal mode -->

			</div>
			<!-- END Side User -->


			<!-- Side Navigation -->
			<div class="content-side content-side-full">
				<ul class="nav-main">
					<li>
						<a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Beranda</span></a>
					</li>

					<li class="{{ in_array(Route::currentRouteName(), ['profile.my_profile', 'profile.edit', 'avatar.edit']) ? 'open' : '' }}">
						<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span class="sidebar-mini-hide">Profil</span></a>
						<ul>
							<li>
								<a href="{{ route('profile.my_profile') }}" class="{{ Route::currentRouteName() == 'profile.my_profile' ? 'active' : '' }}">Lihat Profil</a>
							</li>
							<li>
								<a href="{{ route('profile.edit') }}" class="{{ Route::currentRouteName() == 'profile.edit' ? 'active' : '' }}">Edit Profil</a>
							</li>
							<li>
								<a href="{{ route('avatar.edit') }}" class="{{ Route::currentRouteName() == 'avatar.edit' ? 'active' : '' }}">Ganti Avatar</a>
							</li>
						</ul>
					</li>

					<li class="{{ in_array(Route::currentRouteName(), ['account.password']) ? 'open' : '' }}">
						<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-wrench"></i><span class="sidebar-mini-hide">Pengaturan Akun</span></a>
						<ul>
							<li>
								<a href="{{ route('account.password') }}" class="{{ Route::currentRouteName() == 'account.password' ? 'active' : '' }}">Ganti Password</a>
							</li>
						</ul>
					</li>

					@can('access', 'admin')
						<li class="nav-main-heading">
							<span class="sidebar-mini-visible">AD</span>
							<span class="sidebar-mini-hidden">Admin</span>
						</li>

						@if (Gate::allows('access', 'users.index') || Gate::allows('access', 'users.create'))
							<li class="{{ in_array(Route::currentRouteName(), ['users.index', 'users.create']) ? 'open' : '' }}">
								<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-users"></i><span class="sidebar-mini-hide">Pengguna</span></a>
								<ul>
									@can('access', 'users.index')
										<li>
											<a href="{{ route('users.index') }}" class="{{ Route::currentRouteName() == 'users.index' ? 'active' : '' }}">Daftar Pengguna</a>
										</li>
									@endcan

									@can('access', 'users.create')
										<li>
											<a href="{{ route('users.create') }}" class="{{ Route::currentRouteName() == 'users.create' ? 'active' : '' }}">Buat Pengguna</a>
										</li>
									@endcan
								</ul>
							</li>
						@endif

						@if (Gate::allows('access', 'roles.index') || Gate::allows('access', 'roles.create'))
							<li class="{{ in_array(Route::currentRouteName(), ['roles.index', 'roles.create']) ? 'open' : '' }}">
								<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-users"></i><span class="sidebar-mini-hide">Roles</span></a>
								<ul>
									@can('access', 'roles.index')
										<li>
											<a href="{{ route('roles.index') }}" class="{{ Route::currentRouteName() == 'roles.index' ? 'active' : '' }}">Daftar Roles</a>
										</li>
									@endcan

									@can('access', 'roles.create')
										<li>
											<a href="{{ route('roles.create') }}" class="{{ Route::currentRouteName() == 'roles.create' ? 'active' : '' }}">Buat Role</a>
										</li>
									@endcan
								</ul>
							</li>
						@endif

						@can('access', 'settings')
							<li class="{{ Route::currentRouteName() == 'settings.edit' ? 'open' : '' }}">
								<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-wrench"></i><span class="sidebar-mini-hide">Pengaturan Aplikasi</span></a>
								<ul>
									@foreach (App\Setting::orderBy('position', 'asc')->get() as $setting)
										<li>
											<a href="{{ route('settings.edit', ['setting' => $setting]) }}" class="{{ Request::is('settings/' . $setting->slug) ? 'active' : '' }}">{{ $setting->name }}</a>
										</li>
									@endforeach
								</ul>
							</li>
						@endcan
					@endcan
				</ul>
			</div>
			<!-- END Side Navigation -->
		@else
			<!-- Side Navigation -->
			<div class="content-side content-side-full">
				<ul class="nav-main">
					<li>
						<a href="{{ route('home') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Beranda</span></a>

						@if (Route::has('register'))
							<a href="{{ route('register') }}"><i class="si si-login"></i><span class="sidebar-mini-hide">Daftar</span></a>
						@endif

						<a href="{{ route('login') }}"><i class="si si-login"></i><span class="sidebar-mini-hide">Masuk</span></a>
					</li>
				</ul>
			</div>
			<!-- END Side Navigation -->
		@endauth
	</div>
	<!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->