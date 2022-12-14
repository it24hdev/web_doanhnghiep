<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="/upload/images/common_img/logo-icon.png" rel="shortcut icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('title')
    <meta name="description" content="Phương Đông VMA - trung tâm đào tạo ngoại ngữ Trung Quốc">
    <meta name="keywords" content="Đào tạo ngữ Hán, giao tiếp tiếng Trung, kỹ năng máy tính văn phòng, lao động nước ngoài">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/asset/lib/fontAwesomePro5/css/all.min.css">
    <link rel="stylesheet" href="/asset/lib/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/asset/lib/OwlCarousel/dist/assets/owl.theme.default.min.css">

	<link rel="stylesheet" href="{{asset('asset/css/header-home.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/footer.css')}}">
    @yield('css')
</head>
<body>
	@yield('header')
	@yield('menu-mobile')
	@yield('slider')
	@yield('content')
	@yield('footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('asset/js/header-home.js')}}"></script>
    <script src="/lib/OwlCarousel/dist/owl.carousel.min.js"></script>
    @yield('js')
</body>
</html>
