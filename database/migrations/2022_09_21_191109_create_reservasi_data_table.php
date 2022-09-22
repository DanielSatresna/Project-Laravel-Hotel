<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi_data', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('typekamar');
            $table->string('nik');
            $table->string('email');
            $table->date('cekin');
            $table->date('cekout');
            $table->integer('jumlah');
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
        Schema::dropIfExists('reservasi_data');
    }
};
