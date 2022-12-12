@php $page = explode('-', Route::currentRouteName()); @endphp
<main class="main-content border-radius-lg mt-1">
	<nav class="navbar navbar-main navbar-expand-lg border-radius-xl mx-4 px-0 shadow" id="navbarBlur"
		navbar-scroll="true"
		style="position: fixed; top: 70px; width: -webkit-fill-available !important; z-index: 999 !important; backdrop-filter: blur(10px);">
		<div class="container-fluid py-1 px-3">
			<nav aria-label="breadcrumb" class="card shadow-none" style="background: white !important;">
				<div class="card-body py-2">
					<ol class="breadcrumb me-sm-6 me-5 mb-0 bg-transparent px-0 pb-0 pt-1">
						<li class="breadcrumb-item text-md">
							<span class="text-dark opacity-5">Halaman</span>
						</li>
						<li aria-current="page" class="breadcrumb-item text-dark active text-capitalize text-sm">
							{{ $page[0] }}
							{{ isset($page[1]) ? (strlen($page[1]) != 3 ? $page[1] : strtoupper($page[1])) : '' }}
						</li>
					</ol>
					<h6 class="font-weight-bolder text-capitalize mb-0">
						{{ $page[0] }}
						{{ isset($page[1]) ? (strlen($page[1]) != 3 ? $page[1] : strtoupper($page[1])) : '' }}
					</h6>
				</div>
			</nav>
			<div class="collapse navbar-collapse mt-sm-0 me-md-0 me-sm-4 d-flex justify-content-end mt-2"
				id="navbar">
				<ul class="navbar-nav justify-content-end card d-flex shadow-none"
					style="background: white !important; width: max-content !important;">
					<li class="nav-item d-flex align-items-center card-body py-0">
						<span class="nav-link text-body font-weight-bo ld px-0">
							<livewire:auth.logout />
						</span>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</main>
