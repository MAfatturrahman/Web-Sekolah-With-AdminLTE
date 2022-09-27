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
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id(); //priymary key
            $table->string('nama_lengkap');
            $table->string('siswa_guru');
            $table->string('kejuaraan');
            $table->string('bentuk');
            $table->string('tingkat');
            $table->integer('tahun');
            $table->string('juara');
            $table->string('tempat_penyelenggara');
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
        Schema::dropIfExists('prestasis');
    }
};
