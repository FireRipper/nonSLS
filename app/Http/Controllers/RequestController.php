<?php

namespace App\Http\Controllers;
use App\Request;
use App\Http\Requests\StatementRequest;

class RequestController extends Controller
{
    //
    public function index()
    {
        return view('admin/adminrequest');
    }

    public function store(StatementRequest $request)
    {
        $requestModel = new Request();
        $requestModel->service = $request->service;
        $requestModel->task = $request->task;
        $requestModel->user_id = auth()->id();
        $requestModel->save();

        return redirect()->route('request');
    }

    public function show()
    {
        // get request + all reports
    }
}
