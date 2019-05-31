<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //return view admin panel
    public function index()
    {
        return view('admin/adminpanel');
    }
}
