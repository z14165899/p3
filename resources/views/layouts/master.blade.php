<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'Project 3')
    </title>

	<meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href="/css/index.css" type='text/css' rel='stylesheet'>
    

    @stack('head')

</head>
<body>

	<section>
		@yield('content')
	</section>

    @stack('body')

</body>
</html>