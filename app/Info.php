<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable= [
        'katinfo_id', 'judul', 'foto', 'content'
    ];
    public function kategori(){
        return $this->belongsTo('App\Kategoriinfo','katinfo_id');
    }
}
