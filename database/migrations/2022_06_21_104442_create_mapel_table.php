<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel', function (Blueprint $table) {
            $table->id('id_mapel');
            $table->string('Nama', 25)->index();
            $table->string('Tugas1',10);
            $table->string('Tugas2',10);
            $table->string('Tugas3',10);
            $table->string('UTS',10);
            $table->string('Tugas4',10);
            $table->string('Tugas5',10);
            $table->string('Tugas6',10);
            $table->string('UAS',10);
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
        Schema::dropIfExists('mapel');
    }
}
