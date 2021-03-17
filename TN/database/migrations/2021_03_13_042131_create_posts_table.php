<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('directory_id');
            $table->foreign('directory_id')->references('id')->on('directories');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name_post');
            $table->string('content');
            $table->integer('price');
            $table->string('public')->default('private');
            $table->boolean('status')->default('1');
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
        Schema::dropIfExists('posts');
    }
}
