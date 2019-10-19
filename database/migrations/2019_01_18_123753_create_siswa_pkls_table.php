<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaPklsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_pkls', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('calon_id')->unsigned();
            $table->integer('tulis_id')->unsigned();
            $table->integer('pembimbing_id')->unsigned();
            $table->timestamps();

            $table->foreign('calon_id')->references('calon_id')->on('calon_pkls')->onDelete('CASCADE');
            $table->foreign('tulis_id')->references('id')->on('karya_tulis')->onDelete('CASCADE');
            $table->foreign('pembimbing_id')->references('id')->on('pembimbings')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_pkls');
    }
}
