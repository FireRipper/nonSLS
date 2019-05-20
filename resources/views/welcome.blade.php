@extends('layouts/main')

@section('main_content')
  <div id="content" class="content">
    <div class="container">
      <div id="content-about-firm" class="row m-2 ">
        <div class="content-about-firm__text__paragraph align-self-center col-12">
          <h1 class="content-about-firm__us__h1 p-3 animated fadeInLeft">О фирме</h1>
          <p class="p-sm-3 pt-0">Наша фирма занимается установкой систем видеонаблюдения, монтаж охранных
            систем и сигнализации
            как со сдачей на пульт охраны так и автономные, установка систем контроля
            доступа для организации контрольно-пропускного режима на любых объектах, установка домофонов,
            видеодомофонов, построение и монтаж телефонных и компьютерных сетей, установка офисных
            АТС любой конфигурации, оказание услуг по обслуживанию систем видеонаблюдения, охранных систем,
            и многое другое.
          </p>
        </div>
      </div>
      {{--block services #2--}}
      <div class="content-services__text__header text-center text-uppercase col-12 mt-sm-3 mb-sm-2">
        <h3 class="mb-lg-3 py-md-2 px-3 font-weight-bold">наши услуги</h3>
      </div>
      <div id="content-services-block">
        <div class="content-services-block__box__service">
          <div class="content-services-block-box-service__thumb"><img src="{{asset('images/main_content/services/pictures/picture_1.png')}}" alt="camera"></div>
          <div class="content-services-block-box-service__details">
            <div class="content-services-block-box-service__details__content">
              <img src="{{asset('images/main_content/services/light_theme/video_camera/video_camera.png')}}"
                   alt="video_camera" class="content-services-block-box-service__details__content__img">
              <h3 class="content-services-block-box-service__details__content__h3">Установка Систем Видеонаблюдения</h3>
              <a href="{{url('services#video_camera')}}" class="content-services-block-box-service__details__content__a">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="content-services-block__box__service">
          <div class="content-services-block-box-service__thumb"><img src="{{asset('images/main_content/services/pictures/picture_2.jpg')}}" alt="alarm_system"></div>
          <div class="content-services-block-box-service__details">
            <div class="content-services-block-box-service__details__content">
              <img src="{{asset('images/main_content/services/light_theme/security_alarm/security_light.png')}}"
                   alt="security" class="content-services-block-box-service__details__content__img">
              <h3 class="content-services-block-box-service__details__content__h3">Охранная Система, Сигнализация</h3>
              <a href="{{url('services#security')}}" class="content-services-block-box-service__details__content__a">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="content-services-block__box__service">
          <div class="content-services-block-box-service__thumb"><img src="{{asset('images/main_content/services/pictures/picture_3.jpg')}}" alt="ats"></div>
          <div class="content-services-block-box-service__details">
            <div class="content-services-block-box-service__details__content">
              <img src="{{asset('images/main_content/services/light_theme/automatic_telephone_station/ats_light.png')}}"
                   alt="ats" class="content-services-block-box-service__details__content__img">
              <h3 class="content-services-block-box-service__details__content__h3">Установка Мини-АТС</h3>
              <a href="{{url('services#mini-ATS')}}" class="content-services-block-box-service__details__content__a">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="content-services-block__box__service">
          <div class="content-services-block-box-service__thumb"><img src="{{asset('images/main_content/services/pictures/picture_4.jpg')}}" alt="ASC"></div>
          <div class="content-services-block-box-service__details">
            <div class="content-services-block-box-service__details__content">
              <img src="{{asset('images/main_content/services/light_theme/access_control_system/ASC_light.png')}}"
                   alt="ASC" class="content-services-block-box-service__details__content__img">
              <h3 class="content-services-block-box-service__details__content__h3">Установка Систем Контроля Доступа</h3>
              <a href="{{url('services#ASC')}}" class="content-services-block-box-service__details__content__a">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="content-services-block__box__service">
          <div class="content-services-block-box-service__thumb"><img src="{{asset('images/main_content/services/pictures/picture_5.png')}}" alt="video_intercom"></div>
          <div class="content-services-block-box-service__details">
            <div class="content-services-block-box-service__details__content">
              <img src="{{asset('/images/main_content/services/light_theme/video_intercom/video_intercom_light.png')}}"
                   alt="video_intercom" class="content-services-block-box-service__details__content__img">
              <h3 class="content-services-block-box-service__details__content__h3">Установка Домофонных Систем</h3>
              <a href="{{url('services#video_intercom')}}" class="content-services-block-box-service__details__content__a">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
      {{--block services #2--}}
      <div id="content-team-card" class="row my-sm-3 justify-content-around">
        <div class="content-team-card__header col-12 text-center text-uppercase mt-5 mb-sm-3">
          <h3 class="py-md-2 px-3 font-weight-bold">Наша команда</h3>
        </div>
        <div class="content-team-card__block col-lg-3 col-sm-5 my-1 text-center animated fadeInUp">
          <div class="row">
            <div class="col-12 content-team-card__block__image">
              <img src="{{asset('images/main_content/team/employee_1.jpg')}}" alt="employee_1">
            </div>
            <div class="col-12 content-team-card__block__text__in__paragraph">
              <p class="content-team-card__block__text__in__paragraph__NSP">
                Мушкин Милорад
              </p>
              <p class="content-team-card__block__text__in__paragraph__position">Директор по вопросам организации технической охраны.</p>
            </div>
          </div>
        </div>
        <div class="content-team-card__block col-lg-3 col-sm-5 my-1 text-center animated fadeInUp">
          <div class="row">
            <div class="col-12 content-team-card__block__image">
              <img src="{{asset('images/main_content/team/employee_2.png')}}" alt="employee_2">
            </div>
            <div class=" col-12 content-team-card__block__text__in__paragraph">
              <p class="content-team-card__block__text__in__paragraph__NSP">
                Фокин Тимофей
              </p>
              <p class="content-team-card__block__text__in__paragraph__position">Заместитель директора, специалист в области электротехники.</p>
            </div>
          </div>
        </div>
        <div class="content-team-card__block col-lg-3 col-md-6 my-1 text-center animated fadeInUp">
          <div class="row">
            <div class="col-12 content-team-card__block__image">
              <img src="{{asset('images/main_content/team/employee_3.png')}}" alt="employee_3">
            </div>
            <div class="col-12 content-team-card__block__text__in__paragraph">
              <p class="content-team-card__block__text__in__paragraph__NSP">
                Толмачёв Виктор
              </p>
              <p class="content-team-card__block__text__in__paragraph__position">Специалист в обсласти монтажных работ.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 content-advantages__block__image">
      <div class="content-advantages__block__background__image col-12">
        <div id="content-advantages-block" class="row text-center">
          <div class="col-12 mt-5 mb-sm-3 content-advantages-block__header">
            <h2 class="d-inline py-2 px-3 font-weight-bold">Преимущества</h2>
          </div>
          <div class="col-md-3 col-sm-6 content-advantages-block__experience mb-sm-5">
            <img src="{{asset('images/main_content/advantages/advantages_10_year.png')}}" alt="experience">
            <h2>10 лет</h2>
            <p>На рынке!</p>
          </div>
          <div class="col-md-3 col-sm-6 content-advantages-block__objects mb-sm-5">
            <img src="{{asset('images/main_content/advantages/advantages_objects.png')}}"
                 alt="object">
            <h2>500</h2>
            <p>Объектов!</p>
          </div>
          <div class="col-md-3 col-sm-6 content-advantages-block__quality mb-sm-5">
            <img src="{{asset('images/main_content/advantages/advantages_quality.png')}}" alt="quality">
            <h2>Высокое</h2>
            <p>Качество работ!</p>
          </div>
          <div class="col-md-3 col-sm-6 content-advantages-block__progress mb-sm-5">
            <img src="{{asset('images/main_content/advantages/advantages__progress.png')}}" alt="progress">
            <h2>Развитие</h2>
            <p>Современые технологии!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="block-comments" class="container mt-sm-3 mb-sm-4">
    <div class="row mt-1">
      <div class="col-12 block-comments__header__text">
        <h2 class="pl-4">Оставьте свой комментарий <i class="fas fa-comment-alt"></i></h2>
      </div>
    </div>
    <hr>
    @if (Route::has('login'))
      @auth
        <div id="form-comments">
          <div class="col-md-9">
            <form action="{{url('/')}}" method="post" id="form-comment-user">
              @csrf
              <div class="form-comment-user__name form-group">
                <label for="formGroupExampleInput">Ваше имя</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                       id="formGroupExampleInput"
                       placeholder="Имя пользователя" name="name" value="{{auth::user()->name}}" required readonly>
                @if ($errors->has('name'))
                  <span class="invalid-feedback text-right" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
              </div>
              <div class="form-comment-user__text form-group">
                <label for="comment">Напишите отзыв</label>
                <textarea class="form-control form-comment-user__textarea {{$errors->has('comment') ? 'is-invalid' : ''}}" name="comment"
                          id="comment"
                          rows="3" placeholder="Ваш комментарий"></textarea>
                @if ($errors->has('comment'))
                  <span class="invalid-feedback text-right" role="alert">
                                        <strong>{{ $errors->first('comment')}}</strong>
                                    </span>
                @endif
              </div>
              <div class="form-group">
                <div class="col-lg-12 mt-3">
                  <button type="submit" class="form-comment__btn__submit btn">Отправить</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      @else
        <div class="row">
          <div class="col-sm-10 text-center">
            <h4 class="block-comments__text__for__no__auth__user">Войдите чтобы оставить свой коментарий</h4>
          </div>
          <div class="col-sm-2  block-comments__btn__login  text-center">
            <a href="{{ route('login') }}" id="block-comments__btn__login">Войти</a>
          </div>
        </div>
      @endauth
    @endif

    <div id="public-user-comment" class="row mt-2 public-user-comment__background">
      <div class="public-user-comment__header__text col-12">
        <h4 class="pl-4">Коментарии</h4>
        <hr>
      </div>
      <div class="col-md-9">
        @if (!count($comments))
          <p class="text-muted">Прокомментируйте первым!</p>
        @endif
        @foreach($comments as $comment)
          <div class="public-user-comment__user__name d-inline">{{ $comment->name }}</div>
          <p class="public-user-comment__user__text">{{ $comment->comment }}</p>
        @endforeach
          {{$comments}}
      </div>
    </div>
  </div>

@endsection