<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset=UTF-8 />
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<link href="{{ asset('assets/img/uhamka/uhamka_logo.png') }}" rel="apple-touch-icon" sizes="76x76">
	<link href="{{ asset('assets/img/uhamka/uhamka_logo.png') }}" rel="icon" type="image/png">
	<title>
		{{ 'SIBIMA UHAMKA | ' }}
		@if (Request::segment(2) != null)
			{{ ucwords(str_replace('-', ' ', Request::segment(2))) }}
		@else
			{{ ucwords(str_replace('-', ' ', Request::segment(1))) }}
		@endif
	</title>
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/js/fontawesome.js') }}"></script>
	<link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/soft-ui-dashboard.css') }}" id="pagestyle" rel="stylesheet" />
	@livewireStyles

	<script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
	<script>
		tinymce.init({
			selector: 'textarea',
		});
	</script>
</head>

<body class="g-sidenav-show bg-gray-100 pt-6 pb-3">
	@if (Request::segment(1) != 'login')
		<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"
			style="margin-top: 130px;">
			{{ $slot }}
		</main>
	@else
		{{ $slot }}
	@endif
	@livewireScripts
	@include('sweetalert::alert')
</body>

</html>
