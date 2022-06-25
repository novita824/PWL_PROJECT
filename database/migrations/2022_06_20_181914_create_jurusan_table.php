<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('jurusan', function (Blueprint $table) {
            $table->id('id_jurusan');
            $table->string('Kode', 30)->index();
            $table->string('Nama', 25)->index();
            $table->string('NamaPanjang', 55);
            $table->string('Jurusan', 55);
            $table->string('TotalUangGedung', 35);
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
        Schema::dropIfExists('jurusan');
    }
}
