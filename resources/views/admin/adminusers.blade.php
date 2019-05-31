@extends('layouts/admin')

@section('admin_users')
  <main role="main" class="col-lg-12 px-4 bg-light">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="content-admin__h2">Список пользователей</h2>
    </div>
    <div class="row">
      <div class="col-12 content-admin__user__pagination">{{$users}}</div>
      <div class="col-12">
        <form action="javascript:void(0)" class="d-none">
          @csrf
        </form>
        <div class="content-admin__user__table__border__radius table-responsive">
          <table id="content-admin__user__table" class="table table-hover">
            <thead class="content-admin__user__thead">
            <tr>
              <th scope="col" class="content-admin__user__table__thead__th">#</th>
              <th scope="col" class="content-admin__user__table__thead__th">Имя</th>
              <th scope="col" class="content-admin__user__table__thead__th">Фамилия</th>
              <th scope="col" class="content-admin__user__table__thead__th">Отчество</th>
              <th scope="col" class="content-admin__user__table__thead__th">E-mail</th>
              <th scope="col" class="content-admin__user__table__thead__th">Дата регистрации</th>
            </tr>
            </thead>
            <tbody class="content-admin__user__tbody">
            @foreach($users as $user)
              <tr>
                <th scope="row" class="content-admin__user__table__th">{{ $user->id}}</th>
                <td class="content-admin__user__table__td">{{ $user->name }}</td>
                <td class="content-admin__user__table__td">{{ $user->middle_name }}</td>
                <td class="content-admin__user__table__td">{{ $user->last_name }}</td>
                <td class="content-admin__user__table__td">{{ $user->email }}</td>
                <td class="content-admin__user__table__td">{{ $user->created_at }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
  @endsection