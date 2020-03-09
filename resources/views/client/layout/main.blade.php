<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Kuteshop is new Html theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Html theme, with multiple versions for homepage and multiple templates for sub pages as well" />
	<meta name="keywords" content="kuteshop,7uptheme" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />
	<title>Kute Shop | Home Style 4</title>
	@include('client/layout/style')
	<!-- <link rel="stylesheet" type="text/css" href="css/rtl.css" media="all"/> -->
</head>
<body style="background:#f4f4f4">
<div class="wrap">
	@include('client/layout/header')
	<!-- End Header -->
	@yield('content')
	
	<!-- End Content -->
	@include('client/layout/footer')
	<!-- End Newsletter Popup -->
	<a href="#" class="radius scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>
@include('client/layout/script')
</body>
</html>