<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnicalTaskController extends Controller
{
    //
    public function index()
    {
        return view('admin/admintechnicaltask');
    }
}
