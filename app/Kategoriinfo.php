<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoriinfo extends Model
{
    protected $fillable= [
        'kat_info'
    ];
    public function info(){
        return $this->hasMany('App\Info');
    }
}
