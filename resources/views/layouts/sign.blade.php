<!doctype html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <title>{{ config('app.name', 'nonSLS') }}</title>
</head>
<body>
@yield('login_content')
@yield('register_content')
<script type="application/javascript" src="{{asset('js/app.js')}}"></script>
<script type="application/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>