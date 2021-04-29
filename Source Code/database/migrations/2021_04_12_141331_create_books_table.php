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
            $table->id('book_id');
            $table->string('book_name');
            $table->string('book_author');
            $table->string('book_description');
            $table->string('book_pagesNumber');
            $table->string('book_language');
            $table->string('book_age');
            $table->string('book_price');
            $table->string('book_image');
            $table->string('upload_file');
            $table->unsignedBigInteger('category_id')->constrained('categories')->onDelete('cascade');
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
