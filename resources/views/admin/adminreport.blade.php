@extends('layouts/admin')

@section('admin_report')
  <main role="main" class="col-lg-12 px-4 bg-light">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="content-admin__h2">Отчёты</h2>
    </div>
    <div class="row">
      @foreach($reports as $report)
        <div class="col-12">
          <div class="content-admin__request__content col-lg-10 mt-sm-3 offset-lg-1 mb-3">
            <span class="content-admin__request__span col-12 text-center d-block">
              <i class="fas fa-paperclip"></i> Заявка от {{ $report->name . ' ' . $report->last_name}}
            </span>
            <table class="table">
              <tbody>
              <tr>
                <th scope="row" class="content-admin__request__table__th">E-mail</th>
                <td class="content-admin__request__table__td copy-value">{{ $report->email }}</td>
              </tr>
              <tr>
                <th scope="row" class="content-admin__request__table__th">Услуга</th>
                <td class="content-admin__request__table__td">{{ $report->service }}</td>
              </tr>
              <tr>
                <th scope="row" class="content-admin__request__table__th">Техническое задание</th>
                <td class="content-admin__request__table__td">
                  {{ $report->task }}
                </td>
              </tr>
              <tr>
                <th scope="row" class="content-admin__request__table__th">Дата подачи</th>
                <td class="content-admin__request__table__td">{{ $report->created_at }}</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      @endforeach
      <h4 class="content-admin-report__h4 col-md-10 offset-md-1 ">Сформируйте отчёт для пользователя</h4>
      <div class="col-md-10 mb-sm-3 offset-md-1 content-admin-report__form">
        <form id="content-admin-report" action="javascript:void(0)" method="post">
          @csrf
          <div class="add">
            <div class= "block-report form-row mb-sm-3 align-items-center" id="report_1">
              <div class="block-material col-lg-8">
                <label for="content-admin-report__style__textarea" class="content-admin-report__label">Материалы</label>
                <textarea class="form-control content-admin-report__style__textarea" id="content-admin-report__style__textarea" rows="2" placeholder="Материалы используемые при работе..."></textarea>
              </div>
              <div class="block-units col-lg-4">
                <label for="content-admin-report__units" class="content-admin-report__label">Единица измерения(шт., м, кг, г)</label>
                <input type="text" class="form-control content-admin-report__style__input {{ $errors->has('text') ? ' is-invalid' : '' }}" id="content-admin-report__units"
                       placeholder="Например, 34 шт. или 150 м">
                @if ($errors->has('text'))
                  <span class="invalid-feedback text-right" role="alert">
                  <strong>{{ $errors->first('text') }}</strong>
              </span>
                @endif
              </div>
              <div class="block-price col-lg-4 offset-lg-8">
                <label for="content-admin-report__price" class="content-admin-report__label">Цена (метариал, вып.работа)</label>
                <input type="text" class="form-control content-admin-report__style__input {{ $errors->has('text') ? ' is-invalid' : '' }}" id="content-admin-report__price"
                       placeholder="Введите цену за материал, проделанную работу...">
                @if ($errors->has('text'))
                  <span class="invalid-feedback text-right" role="alert">
                  <strong>{{ $errors->first('text') }}</strong>
              </span>
                @endif
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-4">
              <label for="content-admin-report__btn__add" class="content-admin-report__label">Добавить ещё поля</label>
              <div id="content-admin-report__btn__add" class="content-admin-report__btn__add__input"><i class="fas fa-plus-circle"></i> Добавить поля</div>
            </div>
            <div class="col-lg-4">
              <label for="content-admin-report__btn__del" class="content-admin-report__label">Удалить поля</label>
              <div id="content-admin-report__btn__del" class="content-admin-report__btn__del__input"><i class="fas fa-minus-circle"></i> Удалить поля</div>
            </div>
            <div class="col-lg-12 mt-3">
              <button  type="submit" class="btn content-admin-report__submit">Оправить отчёт пользователю</button>
            </div>
          </div>
        </form>
      </div>
      {{--<div class="col-md-10 offset-md-1">
        <table id="content-admin__request__table" class="table table-hover table-responsive content-admin__request__table__border__radius">
          <thead class="content-admin__request__thead">
          <tr>
            <th scope="col" class="content-admin__request__table__thead__th">#</th>
            <th scope="col" class="content-admin__request__table__thead__th">Материал</th>
            <th scope="col" class="content-admin__request__table__thead__th">Единица измерения</th>
            <th scope="col" class="content-admin__request__table__thead__th">Цена за метариал</th>
            <th scope="col" class="content-admin__request__table__thead__th">Дата создания отчёта</th>
          </tr>
          </thead>
          <tbody class="content-admin__request__tbody">
          @foreach($reports as $report)
            <tr>
              <th scope="row" class="content-admin__request__table__th">{{ $report->id }}</th>
              <th scope="row" class="content-admin__request__table__th">{{ $report->text }}</th>
              <th scope="row" class="content-admin__request__table__th">{{ $report->units }}</th>
              <th scope="row" class="content-admin__request__table__th">{{ $report->price }}</th>
              <th scope="row" class="content-admin__request__table__th">{{ $report->created_at }}</th>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>--}}
    </div>
  </main>
@endsection