<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartuKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_kredits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('akun')->unsigned();
            $table->string('limit');
            $table->timestamps();
            $table->foreign('akun')->references('id')->on('akuns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kartu_kredits');
    }
}
