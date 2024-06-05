<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_harapans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pertanyaan');
            $table->integer('stp');
            $table->integer('tp');
            $table->integer('cp');
            $table->integer('p');
            $table->integer('sp');
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
        Schema::dropIfExists('hasil_harapans');
    }
};
