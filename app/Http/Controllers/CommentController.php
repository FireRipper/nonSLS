<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Comment;

class CommentController extends Controller
{
  /*protected function validator(array $data)
  {
    return Validator::make($data, [
      'name' => ['required', 'string', 'max:255'],
      'comment' =>['required', 'string'],
    ]);
  }

  protected function create(array $data)
  {
    return Comment::create([
      'name' => $data['name'],
      'comment' => $data['comment']
    ]);
  }*/

  public function store(Request $request)
  {
    /*dd($request);*/

    $add = new Comment();
    $add->fill($request->all());
    /*$add->save();*/
    redirect()->route('main');
  }
    //
}

