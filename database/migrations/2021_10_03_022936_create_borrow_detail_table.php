<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('borrow_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('book_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->decimal('price',10,2);
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrow_detail');
    }
}
