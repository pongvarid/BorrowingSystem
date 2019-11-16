<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookItemDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_item_detail', function (Blueprint $table) {
            $table->bigIncrements('BookItemDetail_id');

            $table->unsignedBigInteger('BookItem_id')->unsigned();
            $table->foreign('BookItem_id')->references('BookItem_id')->on('book_item')->onUpdate('cascade');

            $table->unsignedBigInteger('Item_id')->unsigned();
            $table->foreign('Item_id')->references('Item_id')->on('item')->onUpdate('cascade');

            $table->integer('BookItemDetail_Number');
            
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
        Schema::dropIfExists('book_item_detail');
    }
}
