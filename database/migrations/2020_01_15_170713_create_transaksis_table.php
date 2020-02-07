<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->string('rute_awal',30)->nullable();
            $table->string('rute_akhir',30)->nullable(); 
            $table->date('tanggal')->nullable();
            $table->integer('id_penumpang');
            $table->integer('jumlah_dewasa')->nullable();
            $table->integer('jumlah_bayi')->nullable();
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
        Schema::dropIfExists('transaksis');
    }
}
