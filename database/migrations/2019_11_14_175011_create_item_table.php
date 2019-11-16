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
            $table->bigIncrements('Item_id');
            $table->unsignedBigInteger('ItemType_id')->unsigned();
            $table->foreign('ItemType_id')->references('ItemType_id')->on('item_type')->onUpdate('cascade');
            $table->string('Item_name');
            $table->string('Item_detail');
            $table->integer('Item_number');
            $table->integer('Item_remain');
            $table->binary('Item_img'); //BLOB
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
