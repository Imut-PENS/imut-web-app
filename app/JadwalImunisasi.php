<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalImunisasi extends Model
{
    protected $fillable= [
        'jenis_imunisasis_id', 'start_date', 'end_date', 'deskripsi'
    ];
    public function jenis_imunisasi(){
        return $this->belongsTo('App\JenisImunisasi', 'jenis_imunisasis_id');
    }
}
