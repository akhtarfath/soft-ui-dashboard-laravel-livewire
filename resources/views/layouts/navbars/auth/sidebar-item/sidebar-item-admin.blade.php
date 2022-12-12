<li class="nav-item pb-2">
	<a class="nav-link {{ Route::currentRouteName() == 'laporan-bimbingan' ? 'active' : '' }}"
		href="{{ route('laporan-bimbingan') }}">
		<div
			class="icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center bg-white text-center shadow">
			<i class="fas fa-folder"
				style="width: 12px; {{ Route::currentRouteName() == 'laporan-bimbingan' ? '' : 'color: #004b85 !important; font-size: 15px;' }}"></i>
		</div>
		<span class="nav-link-text ms-1"> Laporan Bimbingan </span>
	</a>
</li>
<li class="nav-item pb-2">
	<a class="nav-link {{ Route::currentRouteName() == 'pengaturan' ? 'active' : '' }}"
		href="{{ route('pengaturan') }}">
		<div
			class="icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center bg-white text-center shadow">
			<i class="fas fa-cogs"
				style="width: 12px; {{ Route::currentRouteName() == 'pengaturan' ? '' : 'color: #004b85 !important; font-size: 15px;' }}"></i>
		</div>
		<span class="nav-link-text ms-1"> Pengaturan </span>
	</a>
</li>
