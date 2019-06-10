@extends('layouts.main')

@section('home_content')
  <div id="content">
    <div class="container mt-3 mb-3">
      <div class="row justify-content-center">
        <div class="col-12">
          <div>
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
          </div>
        </div>
      </div>
      <div id="content-home" class="row">
        <div class="col-md-3 content-home__column__menu">
          <img class="content-home__column__menu__img"
               src="{{asset('/images/home_content/private_cab_user.jpg')}}"
               alt="photo">
          <div class="nav flex-column nav-pills pt-1 pb-1 pb-md-5" id="v-pills-tab" role="tablist"
               aria-orientation="vertical">
            <a class="nav-link active content-home__column__menu__link" id="v-pills-home-tab" data-toggle="pill"
               href="#v-pills-home" role="tab"
               aria-controls="v-pills-home" aria-selected="true">Профиль</a>
            <a class="nav-link content-home__column__menu__link" id="v-pills-profile-tab" data-toggle="pill"
               href="#v-pills-profile" role="tab"
               aria-controls="v-pills-profile" aria-selected="false">Заявки</a>
            <a class="nav-link content-home__column__menu__link" id="v-pills-profile-tab" data-toggle="pill"
               href="#v-pills-technical-task" role="tab"
               aria-controls="v-pills-technical-task" aria-selected="false">Техническое задание</a>
            <a class="nav-link content-home__column__menu__link" id="v-pills-messages-tab" data-toggle="pill"
               href="#v-pills-messages" role="tab"
               aria-controls="v-pills-messages" aria-selected="false">Отчёт(ы)</a>
          </div>
          {{--  <a class="" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              Выйти <i class="fas fa-sign-out-alt"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>--}}
        </div>
        <div id="content-home-user" class="col-md-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                 aria-labelledby="v-pills-home-tab">
              <div class="row">
                <h2 class="content-home-user__h2 col-12 text-center mt-md-4 mt-2">Личный
                  кабинет {{auth()->user()->name}}</h2>
                <div class="col-12">
                  <form id="form-home" action="javascript:void(0)" method="POST">
                    <hr class="form-home__user__style__hr">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-lg-4">
                        <label class="form-home__user__style__label" for="form-home__user__first__name">Ваше
                          имя</label>
                        <input id="form-home__user__first__name" type="text" name="first_name"
                               class="form-home__user__style__input form-control"
                               placeholder="Имя" value="{{auth()->user()->name}}">
                      </div>
                      <div class="form-group col-lg-4">
                        <label class="form-home__user__style__label" for="form-home__user__middle__name">Ваша
                          фамилия</label>
                        <input id="form-home__user__middle__name" type="text" name="middle_name"
                               class="form-home__user__style__input form-control"
                               placeholder="Фамилия"
                               value="{{auth()->user()->middle_name}}" {{--pattern="[а-яА-ЯёЁ, a-zA-Z]{2,64}" required--}}>
                        <div class="invalid-feedback">
                          Введите фамилию, используя русские или латинские буквы!
                        </div>
                      </div>
                      <div class="form-group col-lg-4">
                        <label class="form-home__user__style__label" for="form-home__user__lsat__name">Ваше
                          отчество</label>
                        <input id="form-home__user__lsat__name" type="text" name="last_name"
                               class="form-home__user__style__input form-control"
                               placeholder="Отчество"
                               value="{{auth()->user()->last_name}}" {{--pattern="[а-яА-ЯёЁ, a-zA-Z]{2,64}" required--}}>
                        <div class="invalid-feedback">
                          Введите отчество, используя русские или латинские буквы!
                        </div>
                      </div>
                      <div class="form-group col-12">
                        <label class="form-home__user__style__label" for="form-home__user__email">E-mail</label>
                        <input id="form-home__user__email" type="email"
                               class="form-home__user__style__input form-control"
                               placeholder="E-mail" name="email" value="{{auth()->user()->email}}">
                      </div>
                      <div class="form-group col-lg-12 mt-3">
                        <button id="form-home__user__submit" type="submit"
                                class="form-home__user__btn__submit btn px-lg-5">Редактировать
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <div class="row justify-content-center mb-2">
                <h2 class="content-home-user__request__h2 col-12 text-center mt-3 mb-3">Ваши заявки </h2>
                @foreach($requests as $request)
                  <div class="content-home-user__request__content col-lg-10 mt-sm-3">
                    <span class="content-home-user__request__span col-12 text-center d-block">
                      <i class="fas fa-paperclip"></i> Заявка №{{ $request->id }}
                    </span>
                    <table class="table">
                      <tbody>
                      <tr>
                        <th scope="row" class="content-home-user__request__table__th">Услуга</th>
                        <td class="content-home-user__request__table__td">{{ $request->service }}</td>
                      </tr>
                      <tr>
                        <th scope="row" class="content-home-user__request__table__th">Техническое задание</th>
                        <td class="content-home-user__request__table__td">
                          {{ $request->task }}
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="content-home-user__request__table__th">Дата подачи</th>
                        <td class="content-home-user__request__table__td">{{ $request->created_at }}</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                @endforeach
                @if(!count($requests))
                  <div class="col-12 content-home-user__not__have__request">
                    <a class="content-home-user__not__have__request__a text-center" href="{{route('request')}}" title="Нажмите что бы подать заяву">
                      У вас нету отправленных заявок!
                    </a>
                  </div>
                  @endif
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-technical-task" role="tabpanel"
                 aria-labelledby="v-pills-technical-task-tab">
              <div class="row justify-content-center">
                <h2 class="content-home-user__technical__task__h2 col-12 text-center mt-sm-3 mt-1 mb-2">Составленные технические задания </h2>
                <div class="content-home-user__technical__task col-md-11">
                  Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute
                  magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris
                  ipsum
                  velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore
                  Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint
                  minim consectetur qui.
                </div>
              </div>
            </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="row justify-content-center">
                  <h2 class="content-home-user__report__h2 col-12 text-center mt-sm-3 mt-1 mb-2">Составленные отчёт(ы)</h2>
                  <div class="content-home-user__report col-lg-11">
                    Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident
                    laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit
                    et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo
                    est ea veniam consectetur.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
@endsection
