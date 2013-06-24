<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GCS Annotations XML Generator</title>
	{{ HTML::style('css/normalize.css') }}
	{{ HTML::style('css/foundation.css') }}
	{{ HTML::script('js/vendor/modernizr.js') }}
	{{ HTML::script('js/foundation.min.js') }}
</head>
<body>
	@include('layouts.nav')

	@yield('main')
</body>
</html>