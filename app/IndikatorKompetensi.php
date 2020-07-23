<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndikatorKompetensi extends Model
{
    protected $table = 'indikatorkompetensis';
    protected $fillable = [' faktor_kompetensi_id,namaIndikator, bobot, target'];

    public function pendlabbatubara()
    {
        return $this->hasMany(Pendlabbatubara::class);
    }

    public function faktorkompetensi()
    {
        return $this->belongsTo(FaktorKompetensi::class);
    }
}