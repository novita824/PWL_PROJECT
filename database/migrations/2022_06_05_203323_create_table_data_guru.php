<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDataGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id('id_guru');
            $table->string('Nip', 30)->index();
            $table->string('Nama', 25)->index();
            $table->string('TanggalLahir', 35);
            $table->string('JenisKelamin', 25);
            $table->string('Pendidikan', 35);
            $table->string('MengajarMapel', 35);
            $table->string('PasFoto');
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
        Schema::dropIfExists('table_data_guru');
    }
}
