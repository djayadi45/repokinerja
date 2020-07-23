<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaktorKompetensi extends Model
{
    protected $table = 'faktorkompetensis';
    protected $fillable = ['namaFaktorKompetensi, bobot'];

    public function indikatorkompetensi()
    {
        return $this->hasMany(IndikatorKompetensi::class);
    }
}