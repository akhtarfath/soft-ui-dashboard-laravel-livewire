<nav
	class="navbar navbar-main navbar-expand-lg position-absolute w-100 z-index-2 bg-transparent px-4 shadow-none">
	<div class="container-fluid py-1">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb ps-2 me-sm-6 me-5 mb-0 bg-transparent pb-0 pt-1">
				<li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Pages</a>
				</li>
				<li aria-current="page" class="breadcrumb-item active text-capitalize text-sm text-white">
					{{ str_replace('-', ' ', Route::currentRouteName()) }}</li>
			</ol>
			<h6 class="font-weight-bolder ms-2 text-capitalize text-white">
				{{ str_replace('-', ' ', Route::currentRouteName()) }}</h6>
		</nav>
		<div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
			<div class="ms-md-auto pe-md-3 d-flex align-items-center">
				<div class="input-group">
					<span class="input-group-text text-body"><i aria-hidden="true" class="fas fa-search"></i></span>
					<input class="form-control" placeholder="Type here..." type="text">
				</div>
			</div>
			<ul class="navbar-nav justify-content-end">
				<li class="nav-item d-flex align-items-center">
					<a class="nav-link text-body font-weight-bold px-0" href="javascript:;">
						<livewire:auth.logout />
					</a>
				</li>
				<li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
					<a class="nav-link p-0 text-white" href="javascript:;">
						<a class="nav-link text-body p-0" href="javascript:;" id="iconNavbarSidenav">
							<div class="sidenav-toggler-inner">
								<i class="sidenav-toggler-line bg-white"></i>
								<i class="sidenav-toggler-line bg-white"></i>
								<i class="sidenav-toggler-line bg-white"></i>
							</div>
						</a>
					</a>
				</li>
				<li class="nav-item d-flex align-items-center px-3">
					<a class="nav-link p-0 text-white" href="javascript:;">
						<i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
					</a>
				</li>
				<li class="nav-item dropdown pe-2 d-flex align-items-center">
					<a aria-expanded="false" class="nav-link p-0 text-white" data-bs-toggle="dropdown"
						href="javascript:;" id="dropdownMenuButton">
						<i class="fa fa-bell cursor-pointer"></i>
					</a>
					<ul aria-labelledby="dropdownMenuButton" class="dropdown-menu dropdown-menu-end ms-n4 px-2 py-3">
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="javascript:;">
								<div class="d-flex py-1">
									<div class="my-auto">
										<img class="avatar avatar-sm me-3" src="../assets/img/team-2.jpg">
									</div>
									<div class="d-flex flex-column justify-content-center">
										<h6 class="font-weight-normal mb-1 text-sm">
											<span class="font-weight-bold">New message</span> from Laur
										</h6>
										<p class="text-secondary mb-0 text-xs">
											<i class="fa fa-clock me-1"></i>
											13 minutes ago
										</p>
									</div>
								</div>
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="javascript:;">
								<div class="d-flex py-1">
									<div class="my-auto">
										<img class="avatar avatar-sm bg-gradient-dark me-3"
											src="../assets/img/small-logos/logo-spotify.svg">
									</div>
									<div class="d-flex flex-column justify-content-center">
										<h6 class="font-weight-normal mb-1 text-sm">
											<span class="font-weight-bold">New album</span> by Travis Scott
										</h6>
										<p class="text-secondary mb-0 text-xs">
											<i class="fa fa-clock me-1"></i>
											1 day
										</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a class="dropdown-item border-radius-md" href="javascript:;">
								<div class="d-flex py-1">
									<div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
										<svg height="12px" version="1.1" viewBox="0 0 43 36" width="12px"
											xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
											<title>credit-card</title>
											<g fill-rule="evenodd" fill="none" id="Basic-Elements" stroke-width="1" stroke="none">
												<g fill-rule="nonzero" fill="#FFFFFF" id="Rounded-Icons"
													transform="translate(-2169.000000, -745.000000)">
													<g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
														<g id="credit-card" transform="translate(453.000000, 454.000000)">
															<path class="color-background"
																d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
																id="Path" opacity="0.593633743"></path>
															<path class="color-background"
																d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"
																id="Shape"></path>
														</g>
													</g>
												</g>
											</g>
										</svg>
									</div>
									<div class="d-flex flex-column justify-content-center">
										<h6 class="font-weight-normal mb-1 text-sm">
											Payment successfully completed
										</h6>
										<p class="text-secondary mb-0 text-xs">
											<i class="fa fa-clock me-1"></i>
											2 days
										</p>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
