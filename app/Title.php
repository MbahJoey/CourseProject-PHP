<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = [
        'name', 'author', 'type', 'pdate',
    ];
}
