<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('armada_bis', function (Blueprint $table) {
            $table->id('id_bis');
            $table->string('nama_bis');
            $table->string('tipe_bis');
            $table->unsignedBigInteger('kelas_bis');
            $table->foreign('kelas_bis')->references('id_kelas')->on('kelas_bis');
            $table->unsignedBigInteger('rute');
            $table->foreign('rute')->references('id_rute')->on('rute');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armada_bis');
    }
};
