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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->string('nama_pemesan');
            $table->string('no_ktp');
            $table->string('no_telp');
            $table->string('tgl_brkt');
            $table->string('wkt_brkt');
            $table->string('keberangkatan');
            $table->string('tujuan');
            $table->unsignedBigInteger('armada_bis');
            $table->foreign('armada_bis')->references('id_bis')->on('armada_bis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
