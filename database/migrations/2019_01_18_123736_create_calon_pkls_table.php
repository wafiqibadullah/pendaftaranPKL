<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalonPklsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_pkls', function (Blueprint $table) {
              $table->increments('calon_id');
            $table->integer('daftar_id')->unsigned();
            $table->string('foto');
            $table->string('status');
            $table->timestamps();

               $table->foreign('daftar_id')->references('id')->on('pendaftarans')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calon_pkls');
    }
}
