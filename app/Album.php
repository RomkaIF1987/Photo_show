<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Album extends Model
{
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }


    public static function UnlinkAlbum($filepath, $fileName)
    {
        $old_image = $filepath . $fileName;
        if (file_exists($old_image)) {
            Storage::delete($old_image);
        }
    }
}
