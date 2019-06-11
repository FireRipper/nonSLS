<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function request()
    {
        return $this->belongsTo(Request::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
