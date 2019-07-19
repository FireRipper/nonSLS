<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Request extends Model
{
    //
    protected $fillable = [
        'service', 'task'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function files()
    {
        return $this->belongsToMany(File::class);
    }

}
