@foreach ($sidebarItems as $item)
	<li class="nav-item pb-2">
		<a class="nav-link {{ Route::currentRouteName() == $item->setting_route ? 'active' : '' }}"
			href="{{ route($item->setting_route) }}">
			<div
				class="icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center bg-white text-center shadow">
				<i class="{{ $item->setting_icon }}"
					style="width: 12px; {{ Route::currentRouteName() == $item->setting_route ? '' : 'color: #004b85 !important; font-size: 15px;' }}"></i>
			</div>
			<span class="nav-link-text ms-1"> {{ $item->setting_text }} </span>
		</a>
	</li>
@endforeach
