<?php

namespace App\Http\Controllers;
use App\Request;
use App\Http\Requests\StatementRequest;

class RequestController extends Controller
{

    var $bot_api_key = '751772825:AAGVM5PZ2eHmz5IW6S0d53jZigv1SK63Cmw';
    var $api_url = 'https://api.telegram.org/bot';

    //
    public function index()
    {
        $requests = Request::select([
            'requests.*',
            'users.name as userFirstName',
            'users.last_name as userLastName',
            'users.email as userEmail',
            'users.phone_number as userPhone'
        ])
            ->whereNull('read_at')
            ->orderBy('requests.created_at', 'desc')
            ->leftJoin('users', 'users.id', '=', 'requests.user_id')
            ->paginate(15);

        return view('admin/adminrequest', ['requests' => $requests]);
    }

    public function store(StatementRequest $request)
    {
        $chat_id = 246426891;

        $requestModel = new Request();
        $requestModel->service = $request->service;
        $requestModel->task = $request->task;
        $requestModel->user_id = auth()->id();
        $requestModel->save();

        $data = [
            'chat_id' => $chat_id,
            'text' => 'Пользователь: ' . '<i>' . (auth()->user()->name) . '</i>' . "\n"
                        . 'Услуга: ' . '<i>' . ($request->service) . '</i>' . "\n"
                . 'Техническое задание: ' . '<i>' . ($request->task) . '</i>' . "\n",
            'parse_mode' => 'HTML'
        ];

        file_get_contents($this->api_url . $this->bot_api_key . "/sendmessage?" . http_build_query($data));

        return redirect()->route('request')->with('success', 'Ваша заявка отправлена');
    }
}
