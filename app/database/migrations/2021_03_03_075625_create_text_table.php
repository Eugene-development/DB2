<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('menu_id')->nullable();
            $table->foreignId('head_id')->nullable();
            $table->foreignId('rubric_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('product_id')->nullable();

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

            $table->foreign('menu_id')->references('id')->on('nvg_menu');
            $table->foreign('head_id')->references('id')->on('nvg_head');
            $table->foreign('rubric_id')->references('id')->on('nvg_rubric');
            $table->foreign('category_id')->references('id')->on('nvg_category');
            $table->foreign('product_id')->references('id')->on('prod_product');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('text');
    }
}






