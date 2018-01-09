<!doctype html>
<html lang="{{ app()->getlocale() }}">
<head>
	<title>Master title</title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="icon.png">
	<!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/jquery.fullpage.css">
</head>
<body>



  
  @yield('main')
  



  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery.easings.min.js"></script>
  <script src="/js/scrolloverflow.min.js"></script>
  <script src="/js/jquery.fullpage.min.js"></script>
  
  <script src="/js/app.js"></script>

</body>
</html>
