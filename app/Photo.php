<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed image
 * @method static create(array $params)
 */
class Photo extends Model
{
    protected $guarded = [];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
