<?php

namespace App\Http\Controllers;

use App\Request;
use App\Http\Requests\UserRequest;
use App\User;

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
        $requests = Request::where('user_id', auth()->id())->paginate(5);

        return view('home')->with([
            'titles' => 'ЛНР - личный кабинет',
            'requests' => $requests,
        ]);
    }


    public function update(UserRequest $request, int $id){

        $user = User::findOfFail($id);
        $user->name = $request->get('first_name');
        $user->middle_name = $request->get('middle_name');
        $user->last_name = $request->get('last_name');
        $user->phone_number = $request->get('phone_number');
        $user->email = $request->get('email');
        $is_Saved = $user->save();

        return redirect()->route('home')->with('success', 'Data updated');
    }
}
