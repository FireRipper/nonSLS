@extends('layouts/admin')
{{--<form action="javascript:void(0)" class="d-none">--}}
{{--  @csrf--}}
{{--</form>--}}

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
        <div>
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
        </div>
    </div>
  </main>
@endsection