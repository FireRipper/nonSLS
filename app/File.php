<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function user()
    {
        return $this->belongsTo(File::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }
}
