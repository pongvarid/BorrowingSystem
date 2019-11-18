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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('brw_id')->unsigned();
            $table->foreign('brw_id')->references('id')->on('borrower')->onUpdate('cascade');
            $table->dateTime('bookitem_day');
            $table->dateTime('bookitem_borrowDay');
            $table->dateTime('bookitem_deadline');
            $table->string('bookitem_description');
            $table->integer('bookitem_status');
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
