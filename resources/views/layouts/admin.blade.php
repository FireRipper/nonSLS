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
  <link rel="stylesheet" href="{{asset('css/admin.css')}}" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <title>{{ config('app.name', 'Admin-panel') }}</title>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <nav class="col-lg-2 col-md-3 d-none d-md-block bg-panel sidebar">
      <div class="row brand-admin__panel">
        <div class="col-12 d-flex justify-content-center">
            <div class="brand-admin__panel__text">Laboratory of non-standard solution</div>
        </div>
      </div>
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('admin')}}">
              <i class="fas fa-home sidebar-admin__i"></i>
              Главная <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin-request')}}">
              <i class="fas fa-mail-bulk sidebar-admin__i"></i>
              Заявки
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin-task')}}">
              <i class="fas fa-tasks sidebar-admin__i"></i>
              Технические задания
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin-user')}}">
              <i class="fas fa-address-book sidebar-admin__i"></i>
              Пользователи
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin-report')}}">
              <i class="fas fa-clipboard-list sidebar-admin__i"></i>
              Отчеты
            </a>
          </li>
        </ul>
      </div>
    </nav>
    @yield('panel_content')
    @yield('admin_request')
    @yield('admin_technical_task')
    @yield('admin_users')
    @yield('admin_report')
  </div>
</div>
<script type="application/javascript" src="{{asset('js/app.js')}}"></script>
<script type="application/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>