@extends('layouts/admin')

@section('admin_technical_task')
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 bg-light">
    <div class="chartjs-size-monitor"
         style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
      <div class="chartjs-size-monitor-expand"
           style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
      </div>
      <div class="chartjs-size-monitor-shrink"
           style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
      </div>
    </div>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="content-admin__h2">Формирование технического задания</h2>
    </div>
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <form id="content-admin-technical-task" action="javascript:void(0)" method="post">
          @csrf
          <div class="form-group">
            <label for="content-admin-technical-task__e-mail" class="content-admin-technical-task__label">Введите e-mail пользователя</label>
            <input type="email" class="form-control content-admin-technical-task__style__input {{ $errors->has('email') ? ' is-invalid' : '' }}" id="content-admin-technical-task__e-mail"
                   aria-describedby="content-admin-report__e-mail__help" placeholder="Введите e-mail" autofocus>
            @if ($errors->has('email'))
              <span class="invalid-feedback text-right" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
            <small id="content-admin-technical-task__e-mail__help" class="form-text text-muted">E-mail пользователя находиться в разделе "Заявки от пользователей"!</small>
          </div>
          <div class="form-group">
            <label for="content-admin-technical-task__style__textarea" class="content-admin-technical-task__label">Распишите сформированое техническое задание</label>
            <textarea class="form-control content-admin-technical-task__style__textarea" id="content-admin-technical-task__style__textarea" rows="12" placeholder="Техническое задание для пользователя ..."></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn content-admin-technical-task__submit mb-2"><i class="fas fa-plus-circle"></i> Добавить тех. задание пользователю на страницу</button>
          </div>
        </form>
      </div>
    </div>
  </main>
  @endsection