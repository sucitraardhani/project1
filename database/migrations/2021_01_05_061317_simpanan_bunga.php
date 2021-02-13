<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SimpananBunga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_simpananbunga', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('anggota_id')->unsigned();
            $table->integer('periode_id')->unsigned();
            $table->date('tanggal_proses');
            $table->double('nominal_bunga');
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
        //
    }
}