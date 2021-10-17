<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>@yield('title')</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<link rel="stylesheet" href="css/mite-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<!-- Container -->
    @yield('content')
	<!-- End Container -->

	<div class="preloader">
		<img alt="" src="images/loader.gif">
	</div>

	<script src="js/mite-plugins.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en"></script>
	<script src="js/gmap3.min.js"></script>
	<script src="js/script.js"></script>

</body>
</html>
