<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="/images/yonetim/img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>İçerik Yönetim Paneli</title>

	<link href="/css/yonetim/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    @yield('header')
</head>

<body>
	@include('yonetim.layouts.partials.sidebar')


			</div>
		</nav>

		<div class="main">
			@include('yonetim.layouts.partials.topnav')

			<main class="content">
                @yield('content')

			</main>

			@include('yonetim.layouts.partials.footer')
		</div>
	</div>

	<script src="/js/yonetim/app.js"></script>




    @yield('footer')



</body>



</html>
