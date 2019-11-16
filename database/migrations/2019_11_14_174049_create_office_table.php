<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office', function (Blueprint $table) {
            $table->bigIncrements('Off_id');
            $table->unsignedBigInteger('User_id')->unsigned();
            $table->foreign('User_id')->references('User_id')->on('users')->onUpdate('cascade');
            $table->integer('Off_role');
            $table->string('Off_nickname');
            $table->string('Off_name');
            $table->string('Off_lastname');
            $table->string('Off_address');
            $table->string('Off_tel');
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
        Schema::dropIfExists('office');
    }
}
