<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryaTulisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karya_tulis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('nama_pembimbing_karya');
            $table->char('jk');
            $table->text('alamat_pembimbing');
            $table->string('nope');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
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
        Schema::dropIfExists('karya_tulis');
    }
}
