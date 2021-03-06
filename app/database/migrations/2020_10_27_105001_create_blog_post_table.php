<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->timestamps();

            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('H1')->nullable();
            $table->text('H2')->nullable();
            $table->text('H3')->nullable();
            $table->text('H4')->nullable();
            $table->text('H5')->nullable();
            $table->text('text')->nullable();

            $table->string('link', 255)->nullable();
            $table->string('quote', 255)->nullable();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_post');
    }
}
