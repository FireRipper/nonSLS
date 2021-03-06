@extends('layouts/admin')

@section('admin_technical_task')
  <main role="main" class="col-lg-12 px-4 bg-light">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="content-admin__h2">Формирование технического задания</h2>
    </div>
    <div class="row">
      @if($message = Session::get('success'))
        <div class="col-lg-6 offset-lg-3 offset-1 col-10 technical-task__alert__success text-center position-absolute">
          <p class="technical-task__alert__success__p"><i class="fas fa-check-circle technical-task__alert__success__i"></i> {{ $message }}</p>
        </div>
        @elseif($message = Session::get('fail'))
        <div class="col-lg-6 offset-lg-3 offset-1 col-10 technical-task__alert__fail text-center position-absolute">
          <p class="technical-task__alert__fail__p"><i class="fas fa-times-circle technical-task__alert__fail__i"></i> {{ $message }}</p>
        </div>
      @endif
      <div class="col-md-10 offset-md-1">
        <form id="content-admin-technical-task" action="{{ route('admin-task-apply') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="content-admin-technical-task__e-mail" class="content-admin-technical-task__label">Введите e-mail пользователя</label>
            <input type="email" class="form-control content-admin-technical-task__style__input {{ $errors->has('email') ? ' is-invalid' : '' }}" id="content-admin-technical-task__e-mail"
                   aria-describedby="content-admin-report__e-mail__help" name="email" placeholder="Введите e-mail">
            @if ($errors->has('email'))
              <span class="invalid-feedback text-right" role="alert">
                  <strong>{{ $errors->first('email', 'Поле email должно быть заполнено!') }}</strong>
              </span>
            @endif
            <small id="content-admin-technical-task__e-mail__help" class="form-text text-muted">E-mail пользователя находиться в разделе "Заявки от пользователей"!</small>
          </div>
          <div class="form-group">
            <label for="content-admin-technical-task__style__textarea" class="content-admin-technical-task__label">Распишите сформированое техническое задание</label>
            <textarea class="form-control content-admin-technical-task__style__textarea {{ $errors->has('textarea') ? ' is-invalid' : '' }}" name="textarea" id="content-admin-technical-task__style__textarea" rows="12" placeholder="Техническое задание для пользователя ..."></textarea>
            @if ($errors->has('textarea'))
              <span class="invalid-feedback text-right" role="alert">
                  <strong>{{ $errors->first('textarea', 'Поле техническое задание должно быть заполнено!') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <button type="submit" class="btn content-admin-technical-task__submit mb-2"><i class="fas fa-plus-circle"></i> Добавить тех. задание пользователю на страницу</button>
          </div>
        </form>
      </div>
    </div>
  </main>
  @endsection
