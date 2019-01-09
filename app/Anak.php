<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $fillable = [
        'user_id', 'nama_anak', 'tanggal_lahir', 'jenis_kelamin', 'foto_anak'
    ];
    public function user(){
        return $this->belongsTo('App\Anak','user_id');
    }
    public function get_tumbuh(){
        return $this->hasMany('App\Pertumbuhananak');
    }
}
