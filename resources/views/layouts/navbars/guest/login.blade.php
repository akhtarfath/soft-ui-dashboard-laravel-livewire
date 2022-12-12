<nav
	class="navbar navbar-expand-lg blur-rounded z-index-3 position-absolute start-0 end-0 top-0 my-3 mx-4 py-2 shadow blur">
	<div class="container-fluid">
		<a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="{{ route('login') }}">
			SIBIMA UHAMKA
		</a>
		<button aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"
			class="navbar-toggler ms-2 shadow-none" data-bs-target="#navigation" data-bs-toggle="collapse"
			type="button">
			<span class="navbar-toggler-icon mt-2">
				<span class="navbar-toggler-bar bar1"></span>
				<span class="navbar-toggler-bar bar2"></span>
				<span class="navbar-toggler-bar bar3"></span>
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navigation">
			<ul class="navbar-nav mx-auto">
				@if (auth()->user())
					<li class="nav-item">
						<a aria-current="page" class="nav-link text-dark d-flex align-items-center me-2 active"
							href="{{ route('dashboard') }}">
							<i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
							Dashboard
						</a>
					</li>
				@else
					<li class="nav-item">
						<img alt="uhamka" height="75" src="{{ asset('assets/img/uhamka/uhamka_logo.png') }}"
							width="75">
					</li>
				@endif
			</ul>
			<ul class="navbar-nav d-lg-block d-none">
				<li class="nav-item">
					<a class="btn btn-sm btn-round me-1 bg-gradient-dark mb-0" href="https://sso.uhamka.ac.id"
						target="_blank">
						Single Sign On
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
