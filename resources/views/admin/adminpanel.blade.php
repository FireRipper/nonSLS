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
        <div class="card content-admin-card">
          <div class="card-header content-admin-card__header bg-card-header__blue">
            <h2 class="content-admin-card__header__h2 text-uppercase mb-0">Входящие</h2>
          </div>
          <div class="card-body content-admin-card__body">
            <p class="content-admin-card__body__text">В данном разделе:</p>
            <ul class="list-group list-group-flush content-admin-card__body__list">
              <li class="list-group-item">1. Заявки всех пользователей находяться в табдице</li>
              <li class="list-group-item">2. Возможно <strong> просмотреть заявку</strong>, кликнуть на <b>"Перейти"</b>  в конце строки</li>
              <li class="list-group-item">3. Возможно <strong> отправить заявку в раздел</strong> "Прочитаные"</li>
              <li class="list-group-item">4. Возможно <strong>копировать e-mail</strong> пользователя просто нажать на строку e-mail!</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mt-sm-3 mb-lg-0">
        <div class="card content-admin-card">
          <div class="card-header content-admin-card__header bg-card-header__green">
            <h2 class="content-admin-card__header__h2 text-uppercase mb-0">Прочитаные</h2>
          </div>
          <div class="card-body content-admin-card__body">
            <p class="content-admin-card__body__text">В данном разделе:</p>
            <ul class="list-group list-group-flush content-admin-card__body__list">
              <li class="list-group-item">1. Заявки всех пользователей находяться в табдице</li>
              <li class="list-group-item">2. Возможно <strong> просмотреть заявку</strong>, кликнуть на <b>"Перейти"</b>  в конце строки</li>
              <li class="list-group-item">3. Возможно <strong> отправить заявку в раздел</strong> "Прочитаные"</li>
              <li class="list-group-item">4. Возможно <strong>копировать e-mail</strong> пользователя просто нажать на строку e-mail!</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mt-sm-3 mb-lg-0">
        <div class="card content-admin-card">
          <div class="card-header content-admin-card__header bg-card-header__indigo">
            <h2 class="content-admin-card__header__h2 text-uppercase mb-0">Техническое задание</h2>
          </div>
          <div class="card-body content-admin-card__body">
            <p class="content-admin-card__body__text">В данном разделе:</p>
            <ul class="list-group list-group-flush content-admin-card__body__list">
              <li class="list-group-item">1. Расположена <b>форма</b> на странице для ввода таких данных: <b>"E-mail пользователя"</b> и <b>"Техническое задание для пользователя"</b></li>
              <li class="list-group-item">2. Вводим <b>"E-mail пользователя"</b> для отправки технического задания <b>конкретному пользователю</b></li>
              <li class="list-group-item">3. Вводим <b>"Техническое задание"</b> которое было <b>сформировано при разговоре</b> клиента со специалистом</li>
              <li class="list-group-item">4. <b>Отпрвляються данные</b> для пользователя <b>после заполнения всех полей</b></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mt-sm-3 mb-lg-0">
        <div class="card content-admin-card">
          <div class="card-header content-admin-card__header bg-card-header__red">
            <h2 class="content-admin-card__header__h2 text-uppercase mb-0">Пользователи</h2>
          </div>
          <div class="card-body content-admin-card__body">
            <p class="content-admin-card__body__text">В данном разделе:</p>
            <ul class="list-group list-group-flush content-admin-card__body__list">
              <li class="list-group-item">1. Все <b>зарегистрированные</b> пользователи</li>
              <li class="list-group-item">2. Возможно <strong> просмотреть заявку</strong>, кликнуть на <b>"Перейти"</b>  в конце строки</li>
              <li class="list-group-item">3. Возможно <strong> отправить заявку в раздел</strong> "Прочитаные"</li>
              <li class="list-group-item">4. Возможно <strong>копировать e-mail</strong> пользователя просто нажать на строку e-mail!</li>
            </ul>
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
