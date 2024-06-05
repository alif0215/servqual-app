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
        Schema::create('jawaban_harapans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jawabanh');
            $table->string('nama');
            $table->integer('h1');
            $table->integer('h2');
            $table->integer('h3');
            $table->integer('h4');
            $table->integer('h5');
            $table->integer('h6');
            $table->integer('h7');
            $table->integer('h8');
            $table->integer('h9');
            $table->integer('h10');
            $table->integer('h11');
            $table->integer('h12');
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
        Schema::dropIfExists('jawaban_harapans');
    }
};
