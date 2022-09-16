<?php

use App\Models\spp;
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
        Schema::create('murids', function (Blueprint $table) {
            $table->id(); //priymary key
            $table->string('nama');
            $table->integer('umur');
            $table->string('kelas');
            $table->date('tanggal_lahir');
            $table->integer('nis');
            $table->string('jk');
            $table->string('jurusan');
            $table->foreignIdFor(spp::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('murids');
    }
};
