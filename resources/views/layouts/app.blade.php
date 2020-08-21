<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v4.1.1">
		<title>Starter Template · Bootstrap</title>

		<link rel="canonical" href="https://ngdb.test">

		<!-- Bootstrap core CSS -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<!-- Favicons -->
		<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
		<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
		<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
		<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
		<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
		<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
		<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
		<meta name="theme-color" content="#563d7c">

		@yield('head')
	</head>

	<body>
		@yield('content')
	</body>
</html>