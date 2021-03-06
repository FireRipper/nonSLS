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
@php $currentRoute = Route::currentRouteName()
    @endphp
<div class="wrapper">
  <!-- Sidebar  -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <h3 class="sidebar-header__h3">Laboratory of non-standard solutions</h3>
      <strong class="sidebar-header__strong">LNSS</strong>
    </div>
    <ul class="list-unstyled components sidebar-list__ul">
      <li class="sidebar-list-ul__li
          @if($currentRoute === 'admin')
          active
          @endif">
        <a href="{{route('admin')}}" class="sidebar-list-ul-li__a">
          <i class="fas fa-home sidebar-admin__i"></i>
          <span class="sidebar-list-ul-li-a__span">
            Главная
          </span>
        </a>
      </li>
      <li class="sidebar-list-ul__li
             @if($currentRoute === 'admin-request' || $currentRoute === 'admin-read-request' || $currentRoute === 'admin-report')
            active active-requests
            @endif">
        <a href="#pageSubmenu"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dropdown-toggle-requests sidebar-list-ul-li__a">
          <i class="fas fa-mail-bulk sidebar-admin__i"></i>
          <span class="sidebar-list-ul-li-a__span">
            Заявки
          </span>
        </a>
        <ul class="collapse list-unstyled sidebar-list__submenu__ul" id="pageSubmenu">
          <li class="sidebar-list__submenu__li">
            <a href="{{route('admin-request')}}" class="sidebar-list-ul-li__a sidebar-list-ul-li__submenu__a">Входящие</a>
          </li>
          <li class="sidebar-list__submenu__li">
            <a href="{{route('admin-read-request')}}" class="sidebar-list-ul-li__a sidebar-list-ul-li__submenu__a">Прочитаные</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-list-ul__li
            @if($currentRoute === 'admin-task')
            active
            @endif ">
        <a href="{{route('admin-task')}}" class="sidebar-list-ul-li__a">
          <i class="fas fa-tasks sidebar-admin__i"></i>
          <span class="sidebar-list-ul-li-a__span">
            Технические задания
          </span>
        </a>
      </li>
      <li class="sidebar-list-ul__li
          @if($currentRoute === 'admin-user')
          active
          @endif">
        <a href="{{route('admin-user')}}" class="sidebar-list-ul-li__a">
          <i class="fas fa-address-book sidebar-admin__i"></i>
          <span class="sidebar-list-ul-li-a__span">
            Пользователи
          </span>
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
          <span class="content-admin__span">Скрыть меню</span>
        </button>
        <button class="btn content-admin__btn__toggle d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-justify"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link content-admin-navbar__a px-sm-3" href="{{route('main')}}">Сайт</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('panel_content')
    @yield('admin_request')
    @yield('admin_technical_task')
    @yield('admin_users')
    @yield('admin_report')
    @yield('admin_read_request')
  </div>
</div>
<script type="application/javascript" src="{{asset('js/app.js')}}"></script>
<script type="application/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>
