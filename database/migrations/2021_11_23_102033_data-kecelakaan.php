<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataKecelakaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kecelakaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta');
            $table->string('jk');
            $table->string('thn_lahir');
            $table->string('nama_perusahaan');
            $table->string('wilayah');
            $table->string('no_tlp');
            $table->string('tgl_kecelakaan');
            $table->string('tempat_kejadian');
            $table->string('unsur_penyebab');
            $table->string('uraian_kecelakaan');
            $table->string('skd');
            $table->string('berkas_bpjs');
            $table->string('unggah_poto');
            $table->string('email');

            $table->string('password');
            $table->rememberToken();
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
      Schema::dropIfExists('data_kecelakaan');
  }
}
