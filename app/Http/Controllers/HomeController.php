<?php

namespace App\Http\Controllers;

use App\Request;
use App\TechnicalTask;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $requests = Request::where('user_id', auth()->id())->paginate(3);
        $technicalTasks = TechnicalTask::where('user_id', auth()->id())->paginate(3);

       /* $data = array('name'=>"Virat Gandhi");
        Mail::send('emails.send', $data, function($message) {
            $message->subject('Laravel Basic Testing Mail');
        });*/

        return view('home')->with([
            'titles' => 'ЛНР - личный кабинет',
            'requests' => $requests,
            'technicalTasks' => $technicalTasks,
        ]);
    }
}
