<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->tinyInteger('id_state');
            $table->tinyInteger('id_user');
            $table->tinyInteger('id_user_connect');
            $table->string('title');
            $table->tinyInteger('creation_date');

            $table->foreign('id_state')->references('id')->on('states');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_user_connect')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
