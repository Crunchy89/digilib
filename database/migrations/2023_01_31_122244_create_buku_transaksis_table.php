<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buku_id')->references('id')->on('buku')->onUpdate("cascade")->onDelete('cascade');
            $table->foreignId('pengarang_id')->references('id')->on('pengarang')->onUpdate("cascade")->onDelete('cascade');
            $table->foreignId('penerbit_id')->references('id')->on('penerbit')->onUpdate("cascade")->onDelete('cascade');
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
        Schema::dropIfExists('buku_transaksi');
    }
}