<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn',255);
            $table->integer('category_id')->unsigned();
            $table->integer('publisher_id')->unsigned();
            $table->string('title',100);
            $table->string('slug',255);
            $table->text('description')->nullable();
            $table->string('size',255);
            $table->integer('number_of_page');
            $table->integer('quantity');
            $table->date('publish_date');
            $table->decimal('price',10,2);
            $table->integer('view_count')->default(0);
            $table->integer('admin_id')->unsigned();
            $table->softDeletes();
//            $table->foreign('publisher_id')->references('id')->on('publishers');
//            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('books');
    }
}
