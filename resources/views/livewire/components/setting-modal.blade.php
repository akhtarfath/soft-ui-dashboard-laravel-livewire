<!-- Modal -->
@if ($modalToggle)
	<form class="modal {{ $modalToggle ? 'fade show d-block' : '' }}"
		wire:submit.prevent="{{ $isDeleteAdmin
		    ? 'deleteAdmin'
		    : ($isSettingTanggal
		        ? 'storeSettingTanggal'
		        : (!$isSettingTanggal && !$isEditAdmin
		            ? 'storeSettingAdmin'
		            : ($isEditAdmin && !$isSettingTanggal
		                ? 'updateSettingAdmin'
		                : 'updateSettingTanggal'))) }}">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabel">
						<i class="{{ $modalIcon }} me-2"></i>
						<span class="text-black">{{ $modalTitle }}</span>
					</h1>
					<button class="btn-close d-flex text-black" type="button" wire:click="setModalToggle()">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body row">
					@if (!$isDeleteAdmin)
						@if ($isSettingTanggal)
							<div class="col-sm-12 col-md-6 mb-3">
								<label for="tanggalMulai">Tanggal Mulai</label>
								<input class="form-control" id="tanggalMulai" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
									placeholder="Tanggal Mulai" type="date" wire:model.debounce.1000ms="tanggalMulai">
								@error('tanggalMulai')
									<div class="text-danger">{{ $message }}</div>
								@enderror
							</div>
							<div class="col-sm-12 col-md-6 mb-3">
								<label for="tanggalSelesai">Tanggal Selesai</label>
								<input class="form-control" id="tanggalSelesai" min="{{ $tanggalMulai }}"
									placeholder="Tanggal Selesai" type="date" wire:model.debounce.1000ms="tanggalSelesai">
								@error('tanggalSelesai')
									<div class="text-danger">{{ $message }}</div>
								@enderror
							</div>
							<div class="col-sm-12 mb-3">
								<label for="pengumuman">Pengumuman</label>
								<textarea class="form-control" id="pengumuman" wire:model.debounce.1000ms="pengumuman"></textarea>
								<script type="text/javascript" wire:ignore.self>
									CKEDITOR.replace('pengumuman', {
										language: "id",
										removeButtons: [
											'Image',
											'About'
										],
										height: '250px'
									});
								</script>
								@error('pengumuman')
									<div class="text-danger">{{ $message }}</div>
								@enderror
							</div>
							<input type="hidden" value="{{ $settingId }}" wire:model="settingId">
						@else
							@if ($adminId == null)
								<div class="col-sm-12 col-md-6 mb-3">
									<label for="pilihAdmin"> Pilih Admin </label>
									<select class="form-control" id="pilihAdmin" wire:model="pilihAdmin">
										<option value="">-- PILIH ADMIN --</option>
										@foreach ($adminUsers as $adminUser)
											<option value="{{ $adminUser->UNAME }}">{{ strtoupper($adminUser->NAMA) }}</option>
										@endforeach
									</select>
									@error('pilihAdmin')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
							@else
								<div class="col-sm-12 col-md-6 mb-3">
									<label for="pilihAdmin"> Nama Admin </label>
									<input class="form-control" disabled type="text" value="{{ strtoupper($adminData->name) }}">
								</div>
							@endif
							<div class="col-sm-12 col-md-6 mb-3">
								<label for="pilihFakultas"> Pilih Fakultas </label>
								<select class="form-control" id="pilihFakultas" wire:model="pilihFakultas">
									<option value="">-- PILIH FAKULTAS --</option>
									@foreach ($fakultas as $fak)
										<option
											{{ isset($adminData) ? ($adminData->fakultas_handle == $fak->KODEFAK ? 'selected' : '') : '' }}
											value="{{ $fak->KODEFAK }}">
											{{ strtoupper($fak->NAMAFAK) }}
											({{ strtoupper($fak->SINGKATAN) }})
										</option>
									@endforeach
								</select>
								@error('pilihFakultas')
									<div class="text-danger">{{ $message }}</div>
								@enderror
							</div>
						@endif
					@else
						<div class="col-sm-12 py-5 text-center">
							<h5 style="font-weight: 500;">Apakah anda yakin ingin menghapus admin ini?</h5>
							<h4 class="mb-0 text-black">- {{ $adminData->name }} -</h4>
						</div>
					@endif
				</div>
				<div class="modal-footer {{ !$isSettingTanggal ? 'd-flex' : '' }}"
					style="{{ !$isSettingTanggal ? 'justify-content: space-between;' : '' }}">
					<div class="form-check form-switch">
						@if (!$isDeleteAdmin)
							@if (!$isSettingTanggal)
								<input class="form-check-input" id="adminStatus" type="checkbox" wire:model="adminStatus">
								<label class="form-check-label" for="adminStatus">
									{{ $adminStatus ? 'Aktif' : 'Tidak Aktif' }}
								</label>
							@endif
						@endif
					</div>
					<div class="">
						<button class="btn btn-secondary mb-0" type="button" wire:click="setModalToggle()">
							BATAL
						</button>
						<button class="btn btn-primary mb-0" type="submit">
							SUBMIT
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	{{--  modal backdrop  --}}
	<div class="modal-backdrop fade show" wire:click="setModalToggle()"></div>
@endif
