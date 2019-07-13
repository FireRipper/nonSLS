<?php

namespace App\Http\Controllers;

use App\Http\Requests\TechnicalTaskRequest;
use App\TechnicalTask;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class TechnicalTaskController extends Controller
{
    //
    public function index()
    {
        return view('admin/admintechnicaltask');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TechnicalTaskRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            $technicalTaskModel = new TechnicalTask();

            $technicalTaskModel->user_id = $user->id;
            $technicalTaskModel->text = $request->textarea;
            $is_Saved = $technicalTaskModel->save();

            return redirect()->route('admin-task')->with('success', 'Техническое задание отправлено пользователю ' .
                ($user->name));
        } else {
            return redirect()->route('admin-task')->with('fail', 'Пользователя с email-ом ' .
                ($request->email) . ' не существует!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
