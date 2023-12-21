<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('id_category')->default(1);
            $table->timestamps();

            // Mendefinisikan kunci asing (foreign key) untuk id_category
            $table->foreign('id_category')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}