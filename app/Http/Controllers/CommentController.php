<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {

        $commentModel = new Comment();
        $commentModel->comment = $request->comment;
        $commentModel->user_id = auth()->id();
        $isSaved = $commentModel->save();

        return redirect()->route('main');
    }
}

