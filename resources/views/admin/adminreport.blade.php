@extends('layouts/admin')

@section('admin_report')
  <main role="main" class="col-lg-12 px-4 bg-light">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="content-admin__h2">Отчёты</h2>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="content-admin__request__content col-lg-10 mt-sm-3 offset-lg-1 mb-3">
          <span class="content-admin__request__span col-12 text-center d-block">
            <i class="fas fa-paperclip"></i> Заявка от {{ $statement->userFirstName . ' ' . $statement->userLastName}}
          </span>
          <table class="table">
            <tbody>
            <tr>
              <th scope="row" class="content-admin__request__table__th">Номер заявки</th>
              <td class="content-admin__request__table__td copy-value">{{ $statement->id }}</td>
            </tr>
            <tr>
              <th scope="row" class="content-admin__request__table__th">E-mail</th>
              <td class="content-admin__request__table__td copy-value">{{ $statement->userEmail }}</td>
            </tr>
            <tr>
              <th scope="row" class="content-admin__request__table__th">Услуга</th>
              <td class="content-admin__request__table__td">{{ $statement->service }}</td>
            </tr>
            <tr>
              <th scope="row" class="content-admin__request__table__th">Техническое задание</th>
              <td class="content-admin__request__table__td">
                {{ $statement->task }}
              </td>
            </tr>
            <tr>
              <th scope="row" class="content-admin__request__table__th">Дата подачи</th>
              <td class="content-admin__request__table__td">{{ $statement->created_at }}</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
      @foreach($statement->files as $file)
        {{ $file }}<br><br>
        @foreach($file->requestImages as $image)
          {{ $image }}<br>
        @endforeach
      @endforeach
      <h4 class="content-admin-report__h4 col-md-10 offset-md-1 ">Загрузите отчёт для пользователя</h4>
        <form action="javascript:void(0)" method="post" class="col-sm-10 offset-sm-1">
          <div class="form-row justify-content-md-between">
            <div class="custom-file col-lg-5 form-group">
              <input type="file" class="custom-file-input" id="content-admin-report-form-file">
              <label class="custom-file-label" for="content-admin-report-form-file">Выберите файл</label>
            </div>
            {{--<div class="custom-file col-lg-5 form-group">
              <input type="file" class="custom-file-input" id="content-admin-report-form-image">
              <label class="custom-file-label" for="content-admin-report-form-image">Выберите картинку</label>
            </div>--}}
            <div class="form-group">
              <button type="submit" class="btn content-admin-technical-task__submit mb-2"><i class="fas fa-plus-circle"></i> Добавить отчёт пользователю на страницу</button>
            </div>
          </div>
        </form>
    </div>
  </main>
@endsection
