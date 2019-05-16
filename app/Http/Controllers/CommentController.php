<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {
        $add = new Comment;
        $add->fill($request->all());
        $add->save();

        return redirect()->route('main');
    }
}

