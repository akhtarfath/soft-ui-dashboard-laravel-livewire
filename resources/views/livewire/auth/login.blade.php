<section>
	<div class="page-header section-height-75 pt-6 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
					<div class="card card-plain mt-8">
						<div class="card-header bg-transparent pb-0 text-left">
							<h3 class="font-weight-bolder text-info text-gradient">{{ __('Selamat Datang') }}</h3>
							<p class="mb-0">
								Silahkan gunakan akun <strong>Akademik</strong> untuk melanjutkan
								<strong>SIBIMA</strong>
							</p>
						</div>
						<div class="card-body">
							<form action="#" method="POST" role="form text-left" wire:submit.prevent="login">
								<div class="mb-3">
									<label for="email">{{ __('NIM / KODE DOSEN') }}</label>
									<div class="@error('email')border border-danger rounded-3 @enderror">
										<input aria-describedby="email-addon" aria-label="Email" class="form-control" id="email"
											placeholder="NIM / KODE DOSEN" type="text" wire:model="email">
									</div>
									@error('email')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="mb-3">
									<label for="password">{{ __('Password') }}</label>
									<div class="@error('password')border border-danger rounded-3 @enderror">
										<input aria-describedby="password-addon" aria-label="Password" class="form-control"
											id="password" placeholder="Password" type="password" wire:model="password">
									</div>
									@error('password')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-check form-switch">
									<input class="form-check-input" id="rememberMe" type="checkbox" wire:model="remember_me">
									<label class="form-check-label" for="rememberMe">{{ __('Ingat Saya') }}</label>
								</div>
								<div class="text-center">
									<button class="btn bg-gradient-info w-100 mt-4 mb-0" type="submit">{{ __('Sign in') }}</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="oblique position-absolute h-100 d-md-block d-none me-n8 top-0"
						style="width: 60% !important; right: -5rem !important;">
						<div class="oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6 bg-cover"
							style="background-image:url({{ asset('assets/img/uhamka/feb.jpg') }}); background-position: right top;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
