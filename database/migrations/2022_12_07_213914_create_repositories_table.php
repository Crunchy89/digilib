<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repository', function (Blueprint $table) {
            $table->id();
            $table->string("uuid")->unique();
            $table->string("nim")->unique();
            $table->string("judul")->unique();
            $table->string("cover")->comment("cover skripsi");
            $table->string("file")->comment("file skripsi berbentuk pdf");
            $table->string("file_demo")->comment("file skripsi untuk demo");
            $table->string("slug")->unique();
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
        Schema::dropIfExists('repository');
    }
}