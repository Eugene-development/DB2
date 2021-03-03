<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('action_id')->nullable();
//            $table->foreignId('foto_id')->nullable();

            $table->timestamps();

            $table->text('name');
            $table->string('slug', 255)->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->string('size', 255)->nullable();
            $table->string('price', 255)->nullable();
            $table->string('discount', 255)->nullable();
            $table->string('discount_price', 255)->nullable();
            $table->string('unit', 255)->nullable();
            $table->string('warehouse')->default(0);
//            $table->boolean('present')->default(0);
//            $table->boolean('action')->default(0);
//            $table->boolean('sale')->default(0);
//            $table->boolean('new')->default(0);
//            $table->boolean('bestseller')->default(0);
//            $table->string('photo1', 255)->nullable();
//            $table->string('photo2', 255)->nullable();
//            $table->string('photo3', 255)->nullable();
//            $table->string('photo4', 255)->nullable();
//            $table->string('photo5', 255)->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('nvg_category');
            $table->foreign('action_id')->references('id')->on('prod_action');
//            $table->foreign('foto_id')->references('id')->on('fv_foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prod_product');
    }
}
