<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorkompetensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikatorkompetensis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idFaktorKompetensi');
            $table->string('namaIndikator');
            $table->char('bobot', 4);
            $table->double('nilai', 4);
            $table->double('target');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indikatorkompetensis');
    }
}
