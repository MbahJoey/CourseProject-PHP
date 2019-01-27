<?php

namespace App;

use App\Title;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'firstName', 'lastName',
    ];

    public function titles(){
        return $this->hasMany('App\Title');
    }
}
