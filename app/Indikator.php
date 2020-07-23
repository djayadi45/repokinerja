<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Indikator extends Model
{

    public function getFaktor1()
    {
        $indikator = DB::table('faktorkompetensis')
            ->join('indikatorkompetensis', 'faktorkompetensis.id', '=', 'indikatorkompetensis.faktor_kompetensi_id')
            ->select('faktorkompetensis.namaFaktorKompetensi', 'faktorkompetensis.bobot', 'indikatorkompetensis.namaIndikator', 'indikatorkompetensis.bobot', 'indikatorkompetensis.target')
            ->get();
        return $indikator;
    }
}