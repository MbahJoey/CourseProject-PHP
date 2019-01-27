<?php

namespace App;

use App\Author;
use App\Type;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = [
        'name', 'author', 'type', 'pdate',
    ];

    public function authors(){
        return $this->belongsTo('App\Author');
    }

    public function type(){
        return $this->belongsTo('App\Type');
    }
}
