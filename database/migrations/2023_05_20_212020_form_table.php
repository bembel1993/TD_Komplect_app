<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('patronymic');
            $table->unsignedBigInteger('id_department');
            $table->foreign('id_department')->references('id')->on('departments');
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
        Schema::dropIfExists('form');
    }
}
