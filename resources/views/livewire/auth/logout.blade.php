<div class="dropdown">
	<i class="fa fa-user me-sm-1"></i>
	<a class="d-inline d-sm-none px-0" href="#" style="cursor: pointer;" wire:click="logout">
		Sign Out
	</a>
	<span aria-expanded="false" class="d-sm-inline d-none dropdown-toggle dropdown-toggle-split px-0"
		data-bs-toggle="dropdown" style="cursor: pointer;">
		{{ auth()->guard('mahasiswa')->user()
		    ? auth()->guard('mahasiswa')->user()->NAMA
		    : (auth()->guard('dosen')->user()
		        ? auth()->guard('dosen')->user()->NAMADOSEN
		        : (auth()->user()
		            ? auth()->user()->name
		            : '')) }}
	</span>
	<ul class="dropdown-menu dropdown-menu-end">
		<li>
			<a class="dropdown-item d-flex" style="justify-content: space-between; align-items: center;"
				wire:click="logout">
				<i class="fas fa-door-open"></i>
				Sign Out
			</a>
		</li>
	</ul>
</div>
