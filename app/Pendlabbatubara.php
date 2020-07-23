<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendlabbatubara extends Model
{
    protected $table = 'penilaians';
    protected $fillable = [
        'pegawaidlab_id', 'indikator_id', 'nilai', 'bobotxnilai'
    ];

    public function indikatorkompetensi()
    {
        return $this->belongsTo(IndikatorKompetensi::class);
    }

    public function dlabbatubara()
    {
        return $this->belongsTo(Dlabbatubara::class);
    }
}