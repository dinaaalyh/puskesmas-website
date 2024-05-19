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
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->integer('id_kunjungan', true, true);
            $table->integer('id_identitas');
            $table->integer('id_poli');
            $table->integer('no_antrian');
            $table->enum('status_pasien', ['lama', 'baru']);
            $table->enum('layanan', ['bpjs', 'umum']);
            $table->double('biaya');
            $table->enum('kondisi_kesehatan', ['sehat', 'sakit']);
            $table->enum('opsi_kunjungan', ['online', 'offline']);
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
        Schema::dropIfExists('kunjungan');
    }
};
