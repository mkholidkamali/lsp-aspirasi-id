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
        Schema::create('aspirasis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_aspirasi')->length(5);
            $table->integer('id_kategori')->length(5);
            $table->enum('status', ['menunggu', 'proses', 'selesai']);
            $table->string('feedback')->length(30);
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
        Schema::dropIfExists('aspirasis');
    }
};
