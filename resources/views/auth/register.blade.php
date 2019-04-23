@extends('layouts.sign')

@section('register_content')
  <div class="container">
    <div class="row justify-content-center vh-100 align-items-center">
      <div class="col-lg-8">
        <form method="POST" action="{{ route('register') }}" class="position-relative form-registration">
          @csrf
          <div class="form-authorization__bg__image"></div>
          <div class="form-row mb-3">
            <div class="form-authorization-registration__header col-10 text-center"><h2 class="form-authorization-registration__header__h2">Регистрация</h2></div>
            <a href="{{url('/')}}"
               class="form-authorization__fa__icon col-2 d-flex justify-content-center align-items-center"><i
                  class="fas fa-home form-authorization__fa__icon__style  rounded"></i>
            </a>
          </div>

          <div class="form-group form-row">
            <label class="form-registration__text__label__bluer col-md-3" for="name">Имя</label>
            <input id="name" type="text" class="form-control col-md-9  form-registration-authorization__style__input {{ $errors->has('name') ? ' is-invalid' : '' }}"
                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @if ($errors->has('name'))
              <span class="invalid-feedback text-right" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
          </div>
          <div class="form-group form-row">
            <label class="form-registration__text__label__bluer col-md-3" for="email">Почта</label>
            <input id="email" type="email" class="form-control col-md-9 form-registration-authorization__style__input  {{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" value="{{ old('email') }}" required autocomplete="email">

            @if ($errors->has('email'))
              <span class="invalid-feedback text-right" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
          </div>
          <div class="form-group form-row">
            <label class="form-registration__text__label__bluer col-md-3" for="password">Пароль</label>
            <input id="password" type="password"
                   class="form-control col-md-9 form-registration-authorization__style__input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required
                   autocomplete="new-password">

            @if ($errors->has('password'))
              <span class="invalid-feedback text-right" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
          </div>
          <div class="form-group form-row">
            <label class="form-registration__text__label__bluer col-md-3" for="password-confirm">Повторите пароль</label>
            <input id="password-confirm" type="password" class="form-control form-registration-authorization__style__input col-md-9" name="password_confirmation" required
                   autocomplete="new-password">
          </div>
          <div class="form-row">
            <div class="col-lg-12 text-lg-right mt-3">
              <button id="form-registration-submit" type="submit"
                      class=" form-registration__btn__submit btn"><i class="far fa-edit"></i> Зарегистрироваться
              </button>
            </div>
          </div>
          <div class="form-row mt-3">
            <div class="col-12 form-registration__btn__link__login text-center"><a
                  href="{{ route('login')}}"><i class="fas fa-door-open"></i> Войти</a></div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
