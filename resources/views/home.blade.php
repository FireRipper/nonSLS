@extends('layouts.main')

@section('home_content')

  @php
  $authUser = auth()->user();
  @endphp
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
               aria-controls="v-pills-messages" aria-selected="false">Отчёт</a>
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
                @if($message = Session::get('success'))
                  <div class="col-lg-6 offset-lg-3 offset-1 col-10 content-home-user__alert__success text-center position-absolute my-2">
                    <p class="content-home-user__alert__success__p"><i class="fas fa-check-circle content-home-user__alert__success__i"></i> {{ $message }}</p>
                  </div>
                @endif
                <h2 class="content-home-user__h2 col-12 text-center mt-md-4 mt-2">Личный
                  кабинет {{$authUser->name}}</h2>
                <div class="col-12">
                  <form id="form-home" action="{{route('profile-update')}}" method="POST">
                    <hr class="form-home__user__style__hr">
                    @method('PUT')
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-lg-4">
                        <label class="form-home__user__style__label" for="form-home__user__first__name">Ваше
                          имя</label>
                        <span class="d-block form-home__user__style__span">{{$authUser->name}}</span>
                        <input id="form-home__user__first__name" type="text" name="first_name"
                               class="form-home__user__style__input form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }} d-none"
                               placeholder="Николай" value="{{$authUser->name}}">
                        @if ($errors->has('first_name'))
                          <span class="invalid-feedback text-right" role="alert">
                           <strong>{{ $errors->first('first_name') }}</strong>
                          </span>
                        @endif
                      </div>
                      <div class="form-group col-lg-4">
                        <label class="form-home__user__style__label" for="form-home__user__middle__name">Ваша фамилия</label>
                        <span class="d-block form-home__user__style__span">
                          @if(empty($authUser->middle_name))
                            Не указано
                          @else
                            {{$authUser->middle_name}}
                          @endif
                        </span>
                        <input id="form-home__user__middle__name" type="text" name="middle_name"
                               class="form-home__user__style__input form-control d-none"
                               placeholder="Кузнецов"
                               value="{{$authUser->middle_name}}">
                      </div>
                      <div class="form-group col-lg-4">
                        <label class="form-home__user__style__label" for="form-home__user__last__name">Ваше
                          отчество</label>
                        <span class="d-block form-home__user__style__span">
                          @if(empty($authUser->last_name))
                            Не указано
                          @else
                            {{$authUser->last_name}}
                          @endif
                        </span>
                        <input id="form-home__user__last__name" type="text" name="last_name"
                               class="form-home__user__style__input form-control d-none"
                               placeholder="Русланович"
                               value="{{$authUser->last_name}}" >
                      </div>
                      <div class="form-group col-lg-4">
                        <label class="form-home__user__style__label" for="form-home__user__phone__number">Ваш
                          номер телефона</label>
                        <span class="d-block form-home__user__style__span">
                          @if(empty($authUser->phone_number))
                            Не указан
                          @else
                            {{$authUser->phone_number}}
                          @endif
                          </span>
                        <input id="form-home__user__phone__number" type="text" name="phone_number"
                               class="form-home__user__style__input form-control d-none {{ $errors->has('phone_number') ? 'is-invalid' : '' }}"
                               placeholder="(099)-234-4332"
                               value="{{$authUser->phone_number}}" >
                          @if ($errors->has('phone_number'))
                            <span class="invalid-feedback text-right" role="alert">
                              <strong>{{ $errors->first('phone_number'), 'Укажите Ваш номер телефона в заданом формате! (например: (099)-234-4332)' }}</strong>
                            </span>
                          @endif
                      </div>
                      <div class="form-group col-lg-8">
                        <label class="form-home__user__style__label" for="form-home__user__email">E-mail</label>
                        <span class="d-block form-home__user__style__span__email">{{$authUser->email}}</span>
                      </div>
                      <div class="form-group col-lg-6 form-home-btn-edit">
                        <div class="form-home__user__btn__edit  px-lg-3 ">
                          <i class="far fa-edit"></i> Редактировать профиль
                        </div>
                      </div>
                      <div class="form-group col-lg-6 offset-lg-6 form-home-btn-submit d-none">
                        <button id="form-home__user__submit" type="submit"
                                class="form-home__user__btn__submit"><i class="far fa-save form-home__user__btn__submit__i"></i> Сохранить
                        </button>
                      </div>
                      <div class="form-group col-lg-4 form-home-btn-cancel d-none">
                        <div class="form-home__user__btn__cancel  px-lg-3 ">
                          Отмена редактирования
                        </div>
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
                <div class="content-home-user__technical__task col-md-11 my-3">
                  @foreach($technicalTasks as $technicalTask)
                    <div class="content-home-user__technical__task__text my-2">
                      {{ $technicalTask->id }})
                      {{ $technicalTask->text }}
                    </div>
                    {{$technicalTasks}}
                    @endforeach
                  @if(!count($technicalTasks))
                    <div class="col-12">На данный момент, у нас нету технического задания составленного специалистом.</div>
                    @endif
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
