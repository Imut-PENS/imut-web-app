<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertumbuhananak extends Model
{
    protected $fillable = [
        'anak_id', 'usia', 'tinggi_badan', 'berat_badan', 'lingkar_kepala','tanggal'
    ];
    public function get_anaks(){
        return $this->belongsTo('App\Anak','anak_id');
    }
}
