@extends('layouts.sign')

@section('login_content')
  <div class="container">
    <div class="row justify-content-center vh-100 align-items-center">
      <div class="col-lg-6 ">
        <form method="POST" action="{{ route('login') }}" class="form-authorization position-relative">
          @csrf
          <div class="form-authorization__bg__image"></div>
          <div class="form-row mb-2">
            <div class="form-authorization-registration__header col-10 text-center"><h2 class="form-authorization-registration__header__h2">Авторизация</h2></div>
            <a href="{{url('/')}}"
               class="form-authorization__fa__icon col-2 d-flex justify-content-center align-items-center"><i
                  class="fas fa-home form-authorization__fa__icon__style  rounded"></i>
            </a>
          </div>

          <div class="form-group col-lg-12">
            <label class="form-authorization__text__label__bluer" for="email">Введите e-mail</label>
            <input id="email" type="email"
                   class="form-registration-authorization__style__input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
          </div>
          <div class="form-group col-lg-12">
            <label for="password" class="form-authorization__text__label__bluer">Введите пароль </label>
            <input id="password" type="password"
                   class="form-control form-registration-authorization__style__input form-control__color__shadow__lighter{{ $errors->has('password') ? ' is-invalid' : '' }} "
                   name="password" required
                   autocomplete="current-password">

            @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
          </div>
          <div class="form-group row">
            <div class="col-12 text-center">
              <div class="form-check custom-control custom-checkbox">
                <input class="form-check-input custom-control-input" type="checkbox" name="remember"
                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label custom-control-label form-authorization__remember__text" for="remember">
                  Запомнить меня
                </label>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-12 mt-3 text-center">
              <button type="submit" class=" form-authorization__btn__submit btn px-lg-5">Авторизироваться</button>
              @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  Забыли пароль?
                </a>
              @endif
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
