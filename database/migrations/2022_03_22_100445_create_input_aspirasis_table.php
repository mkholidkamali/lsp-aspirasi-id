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
        Schema::create('input_aspirasis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelaporan')->length(5);
            $table->integer('nik')->length(16);
            $table->integer('id_kategori')->length(5);
            $table->string('lokasi')->length(50);
            $table->string('keterangan')->length(50);
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
        Schema::dropIfExists('input_aspirasis');
    }
};
