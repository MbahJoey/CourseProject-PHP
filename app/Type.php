<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $id)
 */
class Type extends Model
{
    protected $fillable = [
        'name',
        ];
}
