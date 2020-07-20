<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndikatorKompetensi extends Model
{
    protected $table = 'indikatorkompetensis';
    protected $fillable = [' fakom_id,namaIndikator, bobot, nilai, target'];
}
