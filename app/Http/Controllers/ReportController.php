<?php

namespace App\Http\Controllers;

use App\Request as Statement;
use Carbon\Carbon;
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
        $statement = Statement::with('files.requestImages')->select(
            [
                'requests.*',
                'users.name as userFirstName',
                'users.last_name as userLastName',
                'users.email as userEmail'
            ]
        )
            ->leftJoin('users', 'users.id', '=', 'requests.user_id')
            ->where('requests.id', $requestId)
            ->firstOrFail();

        // Update read timestamp on every read
        $statement->read_at = Carbon::now();
        $statement->save();

        return view('admin/adminreport', [
            'statement' => $statement,
        ]);
    }
}
