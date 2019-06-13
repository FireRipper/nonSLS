@extends('layouts/admin')

@section('admin_request')
  <main role="main" class="col-lg-12 px-4 bg-light">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="content-admin__h2">Заявки от пользователей</h2>
    </div>
    <div class="row">
      <div class="col-12 content-admin__request__pagination">{{$requests}}</div>
      <div class="col-12">
        <form action="javascript:void(0)" class="d-none">
          @csrf
        </form>
        <div>
          <table id="content-admin__request__table" class="table table-hover table-responsive content-admin__request__table__border__radius">
            <thead class="content-admin__request__thead">
            <tr>
              <th scope="col" class="content-admin__request__table__thead__th">#</th>
              <th scope="col" class="content-admin__request__table__thead__th">Пользователь</th>
              <th scope="col" class="content-admin__request__table__thead__th">E-mail</th>
              <th scope="col" class="content-admin__request__table__thead__th">Услуга</th>
              <th scope="col" class="content-admin__request__table__thead__th">Техническое задание</th>
              <th scope="col" class="content-admin__request__table__thead__th">Дата создания</th>
              <th scope="col" class="content-admin__request__table__thead__th">Перейти</th>
            </tr>
            </thead>
            <tbody class="content-admin__request__tbody">
            @foreach($requests as $request)
              <tr>
                <th scope="row" class="content-admin__request__table__th">{{ $request->id }}</th>
                <th scope="row" class="content-admin__request__table__th">{{ $request->userFirstName . ' ' . $request->userLastName}}</th>
                <th scope="row" class="content-admin__request__table__th copy-email_user">{{ $request->userEmail }}</th>
                <th scope="row" class="content-admin__request__table__th">{{ $request->service }}</th>
                <th scope="row" class="content-admin__request__table__th">{{ $request->task }}</th>
                <th scope="row" class="content-admin__request__table__th">{{ $request->created_at }}</th>
                <th scope="row"><a href="{{ route('admin-report', $request->id) }}" role="button" class="btn content-admin-request__btn">Перейти</a></th>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
@endsection