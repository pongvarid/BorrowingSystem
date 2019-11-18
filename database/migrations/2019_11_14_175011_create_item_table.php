<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('item_type')->onUpdate('cascade');
            $table->string('item_name');
            $table->string('item_detail');
            $table->integer('item_number');
            $table->integer('item_remain');
            $table->string('item_img'); //BLOB
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
        Schema::dropIfExists('item');
    }
}
