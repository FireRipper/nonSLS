<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::paginate(20);

        return view('admin/adminusers', ['users' => $users]);
    }
}
