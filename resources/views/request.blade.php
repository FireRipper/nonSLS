@extends('layouts/main')

@section('request_content')
  <div id="content" class="mt-3 mb-3">
    <div class="container">
      <div id="request-content" class="row justify-content-center shadow-sm">
        <h1 class="request-content-header-h1 col-12 mt-4 mb-sm-5 mb-3">Процедура подачи заявления на получение
          услуг</h1>
        @if(Route::has('login'))
          @auth
          @else
            <p class="request-content__text col-11 text-danger rounded d-flex justify-content-around align-items-center">
              Для того что бы отправить заявление Вам нужно зарегистрироваться или
              войти (если Вы уже зарегистрированы)!<a href="{{ route('login')}}"
                                                      class="request-content__link__auth rounded">Войти</a></p>
          @endauth
        @endif
        <div
            class="col-sm-3 request-content__block__for__image__man__write__request mt-lg-5 mb-lg-5 d-flex align-items-center">
          <div class="request-content__image__man__write__request"></div>
        </div>
        <div class="col-lg-9 mt-lg-5 mt-2">
          <h3 class="request-content__h3"> Для того что бы подать заявление, нужно заполнить форму ниже! </h3>
          <p class="request-content__what__do__p">Что вам нужно сделать:</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item request-content__what__do__li">1. Зарегистрироваться или
              авторизоваться на сайте(если Вы уже зарегистрированы).
            </li>
            <li class="list-group-item request-content__what__do__li">2. Выберите услугу из списка - данное
              поля отображает услугу которую вы выбрали получателю заявления.
            </li>
            <li class="list-group-item request-content__what__do__li">3. Заполните поле "Техническое
              задание" - расскажите вообщем что бы Вы хотели сделать на объекте,
              укажите место нахождение (где необходимо проводить работы по уставовке оборудования),
              укажите желаемый срок в днях.
            </li>
            <li class="list-group-item request-content__what__do__li">4. Нажмите кнопку "Отправить".
            </li>
          </ul>
        </div>
        @if($message = Session::get('success'))
          <div class="col-sm-6 col-12 request-content-alert__success text-center position-absolute">
            <p class="request-content-alert__success__p"><i class="fas fa-clipboard-check"></i> {{$message}}</p>
          </div>
        @endif
        <h3 class="col-12 text-center request-content__h3__request mt-2 mb-3"><i class="fas fa-paperclip"></i>
          Заява</h3>
        <div class="col-lg-8 mb-sm-5 request-content__form">
          <form id="request-content__form__request" method="post" action="{{url('request')}}">
            @csrf
            <div class="form-group">
              <label for="select-service" class="request-content__form__request__label">Выберите услугу из
                списка</label>
              <select id="select-service" name="service" class="form-request form-control request-content__form__request__select">
                <option class="request-content__form__request__select__option" selected>Выберите...</option>
                <option class="request-content__form__request__select__option">Установка Систем Видеонаблюдения</option>
                <option class="request-content__form__request__select__option">Установка Охранной Сигнализации</option>
                <option class="request-content__form__request__select__option">Установка Мини-АТС</option>
                <option class="request-content__form__request__select__option">Установка Систем Контроля Доступа</option>
                <option class="request-content__form__request__select__option">Установка Домофонных Систем</option>
              </select>
            </div>
            <div class="form-group">
              <label for="textarea-technical-task" class="request-content__form__request__label">Техническое
                задание</label>
              <textarea class="form-control request-content__form__request__textarea {{$errors->has('task') ? 'is-invalid' : ''}}"
                        id="textarea-technical-task" name="task"
                        rows="3" placeholder="Опишите что и где именно нужно установить..."></textarea>
              @if ($errors->has('task'))
                <span class="invalid-feedback text-right" role="alert">
                  <strong>{{ $errors->first('task', 'Поле техническое задание обязательно для заполнения')}}</strong>
                </span>
              @endif
            </div>
            <div class="form-group">
              <div class="col-lg-12 text-lg-right mt-3">
                @if (Route::has('login'))
                  @auth
                    <button id="request-content-form-submit" type="submit"
                            class="request-content-form-submit__btn btn px-lg-5">Отправить
                    </button>
                  @endauth
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
