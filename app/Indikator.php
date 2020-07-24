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
            ->leftJoin('penilaians', 'penilaians.indikator_id', '=', 'indikatorkompetensis.id')
            ->leftJoin('dlabbatubaras', 'penilaians.pegawaidlab_id', '=', 'dlabbatubaras.id')
            ->select('penilaians.nilai', 'indikatorkompetensis.id', 'faktorkompetensis.namaFaktorKompetensi', 'faktorkompetensis.bobot', 'indikatorkompetensis.namaIndikator', 'indikatorkompetensis.bobot', 'indikatorkompetensis.target')
            ->get();
        return $indikator;
    }

    public function getFaktor2()
    {
        $indikator = DB::table('faktorkompetensis')
            ->join('indikatorkompetensis', 'faktorkompetensis.id', '=', 'indikatorkompetensis.faktor_kompetensi_id')
            ->leftJoin('penilaians2', 'penilaians2.indikator_id', '=', 'indikatorkompetensis.id')
            ->leftJoin('deksplorasis', 'penilaians2.pegawaideks_id', '=', 'deksplorasis.id')
            ->select('penilaians2.nilai', 'indikatorkompetensis.id', 'faktorkompetensis.namaFaktorKompetensi', 'faktorkompetensis.bobot', 'indikatorkompetensis.namaIndikator', 'indikatorkompetensis.bobot', 'indikatorkompetensis.target')
            ->get();
        return $indikator;
    }
}