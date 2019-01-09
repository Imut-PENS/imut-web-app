<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisImunisasi extends Model
{
    protected $fillable= [
        'jenis_imunisasi', 'deskripsi'
    ];
    public function imunisasi(){
        return $this->hasMany('App\Imunisasi');
    }
    public function jadwal_imunisasi(){
        return $this->hasMany('App\JadwalImunisasi');
    }
}
