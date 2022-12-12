<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
	<div class="container-fluid py-4">
		<div class="row">
			@foreach ($settingItems as $item)
				<div class="col-sm-12 col-md-4 my-3">
					<button class="card" style="background: #fff !important; cursor: pointer;" type="button"
						wire:click="setModalToggle(
							'{{ $item->setting_text }}',
							'{{ $item->setting_route }}',
							'{{ $item->setting_icon }}',
							'{{ true }}',
							'{{ $item->id }}'
						)">
						<div class="card-body p-3">
							<div class="row">
								<div class="col-9 d-flex" style="align-items: center;">
									<div class="numbers" style="text-align: left;">
										<h5 class="font-weight-bolder mb-2 text-black">
											{{ $item->setting_text }}
										</h5>
										<p class="font-weight-bold text-muted mb-0 text-sm">
											Tanggal Mulai - Selesai & Pengumuman {{ $item->setting_text }}
										</p>
									</div>
								</div>
								<div class="col-3 text-end" style="display: flex; align-items: center; justify-content: end;">
									<div class="icon icon-shape bg-gradient-primary border-radius-md text-center shadow">
										<i aria-hidden="true" class="{{ $item->setting_icon }} text-lg opacity-10"
											style="margin-top: 5px;"></i>
									</div>
								</div>
							</div>
						</div>
					</button>
				</div>
			@endforeach
			<div class="col-sm-12 col-md-12 border-radius-lg mt-5">
				<div class="card" style="background: #fff !important;">
					<div class="card-header d-flex" style="justify-content: space-between;">
						<h5 class="mb-0 text-black" style="font-weight: 900;">
							Admin Fakultas
						</h5>
						<button class="btn btn-primary" type="button"
							wire:click="setModalToggle('Tambah Admin Fakultas', 'tambah-admin-fakultas', 'fas fa-user-plus')">
							Tambah Admin
						</button>
					</div>
					<div class="card-body">
						<div class="table-responsive border-radius-lg">
							<table class="align-items-center table-striped table-borderless mb-0 table"
								style="border-collapse: collapse !important;">
								<thead class="bg-gradient-primary">
									<tr>
										<th class="text-uppercase font-weight-bolder text-center text-xs text-white">
											#
										</th>
										<th class="text-uppercase font-weight-bolder text-center text-xs text-white">
											Username
										</th>
										<th class="text-uppercase font-weight-bolder text-center text-xs text-white">
											Nama Admin
										</th>
										<th class="text-uppercase font-weight-bolder text-center text-center text-xs text-white">
											Nama Fakultas
										</th>
										<th class="text-uppercase font-weight-bolder text-center text-center text-xs text-white">
											Status
										</th>
										<th class="text-uppercase font-weight-bolder text-center text-center text-xs text-white">
											Opsi
										</th>
									</tr>
								</thead>
								<tbody class="text-black">
									@forelse ($admins as $admin)
										<tr>
											<td class="py-3 text-center align-middle text-sm">
												{{ $loop->iteration }}
											</td>
											<td class="py-3 text-center align-middle text-sm">
												{{ $admin->email }}
											</td>
											<td class="py-3 text-center align-middle text-sm">
												{{ $admin->name }}
											</td>
											<td class="py-3 text-center align-middle text-sm">
												{{ $admin->fakultas->NAMAFAK }}
											</td>
											<td class="py-3 text-center align-middle text-sm">
												<span
													class="badge badge-sm {{ $admin->status == 'active' ? 'bg-gradient-success' : 'bg-gradient-danger' }}">
													{{ $admin->status == 'active' ? 'AKTIF' : 'NON-AKTIF' }}
												</span>
											</td>
											<td class="py-3 text-center align-middle text-sm">
												<button class="btn btn-sm btn-info mx-1 mb-0" type="button"
													wire:click="setModalToggle(
														'Ubah Admin Fakultas',
														'ubah-admin-fakultas',
														'fas fa-user-edit',
														'{{ false }}',
														'{{ null }}',
														'{{ true }}',
														'{{ $admin->id }}'
													)">
													Ubah
												</button>
												<button class="btn btn-sm btn-danger mx-1 mb-0"
													type="button"wire:click="setModalToggle(
														'Hapus Admin Fakultas',
														'hapus-admin-fakultas',
														'fas fa-user-minus',
														'{{ false }}',
														'{{ null }}',
														'{{ false }}',
														'{{ $admin->id }}',
														'{{ true }}'
													)">
													Hapus
												</button>
											</td>
										</tr>
									@empty
										<tr>
											<td class="py-3 text-center align-middle text-sm" colspan="5">
												Tidak ada data
											</td>
										</tr>
									@endforelse
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('livewire.components.setting-modal')
</main>
