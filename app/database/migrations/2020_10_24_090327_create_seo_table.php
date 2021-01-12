<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('menu_id')->nullable();
//            $table->unsignedBigInteger('submenu_id')->nullable();
            $table->foreignId('post_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('product_id')->nullable();

            $table->text('title')->nullable();
            $table->text('description')->nullable();

            $table->foreign('menu_id')->references('id')->on('nvg_menu');
            //            $table->foreign('submenu_id')->references('id')->on('submenu');
            //            $table->foreign('post_id')->references('id')->on('post');
            $table->foreign('category_id')->references('id')->on('nvg_category');
            $table->foreign('product_id')->references('id')->on('prod_product');


            $table->string('tagable_id', 255)->nullable();
            $table->string('tagable_type', 255)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo');
    }
}
