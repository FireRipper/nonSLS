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
<div class="wrapper">
  <!-- Sidebar  -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <h3>Laboratory of non-standard solution</h3>
      <strong>LNSS</strong>
    </div>

    <ul class="list-unstyled components">
      <li class="active">
        <a href="{{route('admin')}}">
          <i class="fas fa-home sidebar-admin__i"></i>
          Главная
        </a>
      </li>
      <li>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="fas fa-mail-bulk sidebar-admin__i"></i>
          Заявки
        </a>
        <ul class="collapse list-unstyled" id="pageSubmenu">
          <li>
            <a href="{{route('admin-request')}}">Входящие</a>
          </li>
          <li>
            <a href="javascript:void(0)">Прочитаные</a>
          </li>
        </ul>
        <a href="{{route('admin-task')}}">
          <i class="fas fa-tasks sidebar-admin__i"></i>
          Технические задания
        </a>
      </li>
      <li>
        <a href="{{route('admin-user')}}">
          <i class="fas fa-address-book sidebar-admin__i"></i>
          Пользователи
        </a>
      </li>
      <li>
        <a href="{{route('admin-report')}}">
          <i class="fas fa-clipboard-list sidebar-admin__i"></i>
          Отчеты
        </a>
      </li>
    </ul>
  </nav>

  <!-- Page Content  -->
  <div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
          <i class="fas fa-align-left"></i>
          <span>Скрыть меню</span>
        </button>
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