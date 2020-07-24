<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendeksplorasi extends Model
{
    protected $table = 'penilaians2';
    protected $fillable = [
        'pegawaideks_id', 'indikator_id', 'nilai', 'bobotxnilai'
    ];

    public function indikatorkompetensi()
    {
        return $this->belongsTo(IndikatorKompetensi::class);
    }

    public function deksplorasi()
    {
        return $this->belongsTo(Deksplorasi::class);
    }
}