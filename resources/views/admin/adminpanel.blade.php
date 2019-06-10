@extends('layouts.admin')

@section('panel_content')
  <main role="main" class="col-12 px-4 bg-light">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="content-admin__h2">Главная</h2>
    </div>
    <div id="content-admin-block-about-for-page" class="row">
      <div class="col-12">
        <form action="javascript:void(0)" class="d-none">
          @csrf
        </form>
      </div>
      <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0 content-admin__mini__block">
        <div class="bg-white content-admin__mini__block__shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
          <div class="flex-grow-1 d-flex align-items-center">
            <div class="dot mr-3 bg-mini-blocks"></div>
            <div class="text">
              <h6 class="mb-0 text__h6">Заявки</h6><span class="text-gray">Входящие</span>
            </div>
          </div>
          <div class="icon text-white bg-mini-blocks"><i class="fab fa-readme"></i></div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0 content-admin__mini__block">
        <div class="bg-white content-admin__mini__block__shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
          <div class="flex-grow-1 d-flex align-items-center">
            <div class="dot mr-3 bg-mini-blocks__green"></div>
            <div class="text">
              <h6 class="mb-0 text__h6">Заявки</h6><span class="text-gray">Прочитаные</span>
            </div>
          </div>
          <div class="icon text-white bg-mini-blocks__green"><i class="fas fa-check"></i></div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0 content-admin__mini__block">
        <div class="bg-white content-admin__mini__block__shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
          <div class="flex-grow-1 d-flex align-items-center">
            <div class="dot mr-3 bg-mini-blocks__indigo"></div>
            <div class="text">
              <h6 class="mb-0 text__h6">Технические задания</h6>
            </div>
          </div>
          <div class="icon text-white bg-mini-blocks__indigo"><i class="fab fa-stack-exchange"></i></div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0 content-admin__mini__block">
        <div class="bg-white content-admin__mini__block__shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
          <div class="flex-grow-1 d-flex align-items-center">
            <div class="dot mr-3 bg-mini-blocks__red"></div>
            <div class="text">
              <h6 class="mb-0 text__h6">Пользователи</h6>
            </div>
          </div>
          <div class="icon text-white bg-mini-blocks__red"><i class="far fa-id-card"></i></div>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mt-sm-3 mb-lg-0">
        <div class="card">
          <div class="card-header">
            <h2 class="h6 text-uppercase mb-0">Входящие</h2>
          </div>
          <div class="card-body">
            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mt-sm-3 mb-lg-0">
        <div class="card">
          <div class="card-header">
            <h2 class="h6 text-uppercase mb-0">Current server uptime</h2>
          </div>
          <div class="card-body">
            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mt-sm-3 mb-lg-0">
        <div class="card">
          <div class="card-header">
            <h2 class="h6 text-uppercase mb-0">Current server uptime</h2>
          </div>
          <div class="card-body">
            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mt-sm-3 mb-lg-0">
        <div class="card">
          <div class="card-header">
            <h2 class="h6 text-uppercase mb-0">Current server uptime</h2>
          </div>
          <div class="card-body">
            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
      {{--<div class="col-sm-3 content-admin__mini__block"></div>
      <div class="col-sm-3 content-admin__mini__block"></div>
      <div class="col-sm-3 content-admin__mini__block"></div>
      <div class="col-sm-3 content-admin__mini__block">Пользователи</div>--}}
    </div>
  </main>
@endsection
