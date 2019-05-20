<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {

        $first_name = $request->input('name');
        $text_comment = $request->input('comment');

        $user = Auth::user();
        $add = new Comment;

        if($first_name == DB::table('users')->value('name'))
        {
            if ($user) {
                $user_id = $data['user_id'] = $user->id;
                $add->fill($text_comment, $user_id);
            }
        }

        $add->save();

        return redirect()->route('main');
    }
}

