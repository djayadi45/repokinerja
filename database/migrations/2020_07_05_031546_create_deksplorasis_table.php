<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeksplorasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deksplorasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->char('nik', 11);
            $table->string('ttl');
            $table->char('jenisKelamin', 1);
            $table->string('alamat');
            $table->char('statusKel',3);
            $table->timestamp('mulaiKerja');
            $table->string('statusKep');
            $table->string('jabatan');
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
        Schema::dropIfExists('deksplorasis');
    }
}
