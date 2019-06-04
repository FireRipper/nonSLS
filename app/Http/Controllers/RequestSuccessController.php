<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestSuccessController extends Controller
{
    //
    public function index(){
        return abort(404);
    }
}
