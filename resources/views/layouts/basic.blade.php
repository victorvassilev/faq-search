<html>
<head>
<title>@yield('page_title')</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/bootstrap-theme.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" />
@yield('custom_header_content')
</head>
<body>
@yield('content')
</body>
</html>
