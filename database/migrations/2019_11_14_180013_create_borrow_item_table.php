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
            $table->bigIncrements('id');

            $table->unsignedBigInteger('brw_id')->unsigned();
            $table->foreign('brw_id')->references('id')->on('borrower')->onUpdate('cascade');

            $table->unsignedBigInteger('bookitem_id')->unsigned();
            $table->foreign('bookitem_id')->references('id')->on('book_item')->onUpdate('cascade');

            $table->unsignedBigInteger('off_id')->unsigned();
            $table->foreign('off_id')->references('id')->on('office')->onUpdate('cascade');

            $table->string('borrowitem_description');
            $table->integer('borrowitem_status');

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
