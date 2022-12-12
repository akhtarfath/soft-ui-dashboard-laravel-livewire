@if (auth()->guard('mahasiswa')->user() ||
    auth()->guard('dosen')->user())
	@include('layouts.navbars.auth.sidebar-item.sidebar-item-akademik')
@elseif(auth()->user())
	@include('layouts.navbars.auth.sidebar-item.sidebar-item-admin')
@endif
