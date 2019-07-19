<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function user()
    {
        return $this->belongsTo(File::class);
    }

    public function requests()
    {
        return $this->belongsToMany(Request::class);
    }

    public function requestImages()
    {
        return $this->hasMany(FileRequestFileImage::class)
            ->leftJoin('files', 'files.id', '=', 'file_request_file_images.image_id');
    }
}
