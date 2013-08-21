<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GCS Annotations XML Generator</title>
	{{ HTML::style('css/normalize.css') }}
	{{ HTML::style('css/foundation.css') }}
	{{ HTML::script('js/vendor/custom.modernizr.js') }}
	{{ HTML::script('js/vendor/zepto.js') }}
	{{ HTML::script('js/foundation.min.js') }}
	{{ HTML::script('js/foundation/foundation.alerts.js') }}
</head>
<body>
	@include('layouts.nav')

	@yield('main')
</body>
</html>