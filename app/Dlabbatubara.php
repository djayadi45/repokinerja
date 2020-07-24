<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dlabbatubara extends Model
{
    protected $fillable = ['nama, nik, ttl, jenisKelamin, alamat, statusKel, mulaiKerja, statusKep, jabatan'];
    protected $dates = ['mulaiKerja'];

    public function pendlabbatubara()
    {
        return $this->hasMany(Pendlabbatubara::class);
    }
}