<?php

namespace App\Http\Controllers;

use App\Report;
use App\Request as Statement;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * @param Request $request
     * @param int $requestId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, int $requestId)
    {
        $statements = Statement::select(
            [
                'requests.*',
                'users.name as userFirstName',
                'users.last_name as userLastName',
                'users.email as userEmail'
            ]
        )
            ->leftJoin('users', 'users.id', '=', 'requests.user_id')
            ->where('requests.id', $requestId)->get();

        /* $reports = Report::select([
             'reports.*',
             'users.name',
             'users.last_name',
             'users.email',
             'requests.service',
             'requests.task'
         ])
             ->leftJoin('users', 'users.id', '=', 'reports.user_id')
             ->leftJoin('requests', 'requests.id', '=', 'reports.request_id')
             ->where('request_id', $requestId)->get();*/

        return view('admin/adminreport', [
            'statements' => $statements,
        ]);
    }
}
