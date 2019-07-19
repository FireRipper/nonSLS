<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //show main page
    public function getMain()
    {
        $comments = Comment::select('users.*', 'comments.*')
            ->leftJoin('users', 'users.id', '=', 'comments.user_id')
            ->orderBy('comments.created_at', 'desc')
            ->paginate(5);

        $titles = 'Лаборатория нестандартных решений';

        return view('welcome', [
            'comments' => $comments])->with('titles', $titles);
    }

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
