<aside
	class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-xl fixed-start ms-3 my-3 border-0"
	id="sidenav-main" style="z-index: 0 !important;">
	<div class="sidenav-header">
		<i aria-hidden="true"
			class="fas fa-times text-secondary position-absolute end-0 d-none d-xl-none top-0 cursor-pointer p-3 opacity-5"
			id="iconSidenav"></i>
		<a class="align-items-center d-flex navbar-brand text-wrap m-0" href="{{ route('dashboard') }}">
			<img alt="..." class="navbar-brand-img h-100"
				src="{{ asset('assets/img/uhamka/uhamka_logo.png') }}">
			<span class="ms-3 font-weight-bold">SIBIMA UHAMKA</span>
		</a>
	</div>
	<hr class="horizontal dark mt-0">
	<div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
		<ul class="navbar-nav">
			<li class="nav-link mb-0">
				<a aria-pressed="true" class="btn btn-primary btn-md active px-5 text-white"
					href="https://sso.uhamka.ac.id" role="button" target="_blank"> Single Sign On
				</a>
			</li>
			<li class="nav-item pb-2">
				<a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
					href="{{ route('dashboard') }}">
					<div
						class="icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center bg-white text-center shadow">
						<i class="fas fa-meteor"
							style="width: 12px; {{ Route::currentRouteName() == 'dashboard' ? '' : 'color: #004b85 !important; font-size: 15px;' }}"></i>
					</div>
					<span class="nav-link-text ms-1"> Dashboard </span>
				</a>
			</li>

			<li class="nav-item mt-3">
				<h6 class="ps-4 ms-2 text-uppercase font-weight-bolder opacity-6 text-xs">
					{{ __("Menu's") }}
				</h6>
			</li>
			@livewire('components.sidebar-menu-item')
		</ul>
	</div>
	<div class="sidenav-footer mx-3 mt-3 pt-3">
		<div class="card card-background card-background-mask-secondary shadow-none" id="sidenavCard">
			<div class="full-background"
				style="background-image: url('../assets/img/curved-images/white-curved.jpeg')">
			</div>
			<div class="card-body w-100 p-3 text-left">
				<div
					class="icon icon-shape icon-sm d-flex align-items-center justify-content-center border-radius-md mb-3 bg-white text-center shadow">
					<i class="fab fa-whatsapp"
						style="color: #004b85 !important; font-size: 19px; top: 0px !important;"></i>
				</div>
				<div class="docs-info">
					<h6 class="up mb-0 text-white">Butuh Bantuan?</h6>
					<p class="font-weight-bold text-xs">Silakan hubungi Call Center</p>
					<a class="btn btn-white btn-sm w-100 mb-0" href="https://wa.me/+6287726269479" target="_blank">
						{{ __('Chat Sekarang') }}
					</a>
				</div>
			</div>
		</div>
	</div>
</aside>
