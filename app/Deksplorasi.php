<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deksplorasi extends Model
{
    protected $fillable = ['nama, nik, ttl, jenisKelamin, alamat, statusKel, mulaiKerja, statusKep, jabatan'];
    protected $dates = ['mulaiKerja'];
    public function pendeksplorasi()
    {
        return $this->hasMany(Pendeksplorasi::class);
    }
}