<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow_item', function (Blueprint $table) {
            $table->bigIncrements('BorrowItem_id');

            $table->unsignedBigInteger('Brw_id')->unsigned();
            $table->foreign('Brw_id')->references('Brw_id')->on('borrower')->onUpdate('cascade');

            $table->unsignedBigInteger('BookItem_id')->unsigned();
            $table->foreign('BookItem_id')->references('BookItem_id')->on('book_item')->onUpdate('cascade');

            $table->unsignedBigInteger('Off_id')->unsigned();
            $table->foreign('Off_id')->references('Off_id')->on('office')->onUpdate('cascade');

            $table->string('BorrowItem_description');
            $table->integer('BorrowItem_status');

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
        Schema::dropIfExists('borrow_item');
    }
}
