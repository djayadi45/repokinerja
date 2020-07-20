<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaktorKompetensi extends Model
{
    protected $table = 'faktorkompetensis';
    protected $fillable = ['namaFaktorKompetensi, bobot'];
}
