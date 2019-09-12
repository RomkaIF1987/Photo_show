<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed image
 * @method static create(array $params)
 * @method static paginate(int $int)
 */
class Blog extends Model
{
    protected $guarded = [];
}
