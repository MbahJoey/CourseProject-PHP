<?php

namespace App;

use App\Title;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $id)
 */
class Type extends Model
{
    protected $fillable = [
        'name',
        ];

    public function titles(){
        return $this->hasMany('App\Title');
    }
}
