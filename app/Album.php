<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * @method static create(array $params)
 * @property mixed cover_image
 */
class Album extends Model
{
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

}
