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
            $table->foreignId('fakom_id')->constrained('faktorkompetensis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('namaIndikator');
            $table->double('bobot');
            $table->double('nilai', 4);
            $table->integer('target');
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
