<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendlabbatubara extends Model
{
    protected $table = 'penilaians';
    protected $fillable = ['pegawailb_id, indikator_id, tgl, nilai'];
}
