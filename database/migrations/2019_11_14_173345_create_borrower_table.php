<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrower', function (Blueprint $table) {
            $table->bigIncrements('Brw_id');
            $table->unsignedBigInteger('User_id')->unsigned();
            $table->foreign('User_id')->references('User_id')->on('users')->onUpdate('cascade');
            $table->integer('Brw_IP');
            $table->string('Brw_TitleName');
            $table->string('Brw_name');
            $table->string('Brw_lastname');
            $table->string('Brw_address');
            $table->string('Brw_tel');
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
        Schema::dropIfExists('borrower');
    }
}
