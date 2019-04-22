<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  //show main page
  public function getMain()
  {

    $titles = 'Лаборатория нестандартных решений';

    return view('welcome')->with('titles', $titles);
  }

/*  //show login registration
  public function registr_user()
  {

    $titles = "ЛНР - Регистрация";

    return view('auth/registration')->with('titles', $titles);
  }

  //show login page
  public function login_user()
  {

    $titles = "ЛНР - Авторизация";

    return view('auth/login')->with('titles', $titles);
  }

  //show success registration user
  public function getRegister()
  {
    return view('emails/register');
  }*/

  //show services page
  public function getServices()
  {
    /*config('app.locale');*/
    $titles = 'Сервисы - Лаборатория нестандртных решений';

    return view('services')->with('titles', $titles);
  }

  //show contact page
  public function getContact()
  {

    $titles = 'Контакты - Лаборатория нестандартных решений';

    return view('contact')->with('titles', $titles);
  }

  //show request page
  public function getRequest()
  {

    $titles = 'Подача заявки - Лаборатория нестандартных решений';

    return view('request')->with('titles', $titles);
  }
}
