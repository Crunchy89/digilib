<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKembalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kembali', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_kembali')->nullable();
            $table->string("buku")->comment("kode buku yg dikembalikan");
            $table->integer("total")->comment("total buku yang dikembalikan");
            $table->float("denda")->nullable()->comment("denda jika ada");
            $table->foreignId('user_id')->references('id')->on('user')->onUpdate("cascade")->onDelete('cascade');
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
        Schema::dropIfExists('kembali');
    }
}