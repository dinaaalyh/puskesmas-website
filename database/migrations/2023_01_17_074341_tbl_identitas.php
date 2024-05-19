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
        Schema::create('identitas', function (Blueprint $table) {
            $table->increments('id_identitas', true, true);
            $table->string('nama');
            $table->string('nohp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->enum('goldar', ['A', 'B', 'AB', 'O']);
            $table->enum('agama', ['Islam', 'Kristen', 'Hindu', 'Budha', 'Kepercayaan']);
            $table->enum('status_perkawinan', ['Kawin', 'Tidak Kawin', 'Cerai Mati', 'Cerai Hidup']);
            $table->text('alamat');
            $table->enum('layanan', ['BPJS', 'Reguler']);
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
        Schema::dropIfExists('identitas');
    }
};
