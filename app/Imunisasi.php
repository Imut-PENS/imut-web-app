<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    protected $fillable= [
        'jenis_imunisasis_id', 'jumlah_imunisasi', 'waktu_imunisasi', 'deskripsi'
    ];
    public function jenis_imunisasi(){
        return $this->belongsTo('App\JenisImunisasi','jenis_imunisasis_id');
    }
}
