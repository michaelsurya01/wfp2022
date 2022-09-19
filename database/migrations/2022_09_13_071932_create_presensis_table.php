<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('status');

            $table->unsignedBigInteger('idmahasiswa');
            $table->foreign('idmahasiswa')->references('id')->on('mahasiswas');
            $table->string('kode');
            $table->foreign('kode')->references('kode')->on('matakuliahs');

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
        Schema::dropIfExists('presensis');
    }
}
