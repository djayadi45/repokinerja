<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('pegawaidlab_id')->constrained('dlabbatubaras')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('indikator_id')->constrained('indikatorkompetensis')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tgl');
            $table->double('nilai');
            $table->varchar('bobotxnilai');
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
        Schema::dropIfExists('penilaians');
    }
}
