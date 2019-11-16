<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_item', function (Blueprint $table) {
            $table->bigIncrements('BookItem_id');
            $table->unsignedBigInteger('Brw_id')->unsigned();
            $table->foreign('Brw_id')->references('Brw_id')->on('borrower')->onUpdate('cascade');
            $table->dateTime('BookItem_day');
            $table->dateTime('BookItem_borrowDay');
            $table->dateTime('BookItem _deadline');
            $table->string('BookItem_description');
            $table->integer('BookItem_status');
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
        Schema::dropIfExists('book_item');
    }
}
