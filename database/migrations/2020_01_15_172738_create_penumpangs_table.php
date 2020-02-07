<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenumpangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penumpangs', function (Blueprint $table) {
            $table->increments('id_penumpang');
            $table->string('nama_penumpang',30)->nullable();
            $table->string('nama_sapaan',10)->nullable();
            $table->string('no_telp',13)->nullable();

            $table->integer('id_transaksi')->unsigned()->nullable();
            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksis')->onUpdate('set null')->onDelete('set null');

            $table->integer('id_jadwal')->unsigned()->nullable();
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwals')->onUpdate('set null')->onDelete('set null');
            
            $table->integer('id_kursi')->unsigned()->nullable();
            $table->foreign('id_kursi')->references('id_kursi')->on('kursis')->onUpdate('set null')->onDelete('set null');
            

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
        Schema::dropIfExists('penumpangs');
    }
}
