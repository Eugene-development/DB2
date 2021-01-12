<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('category_id')->nullable();

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
            $table->boolean('present')->default(0);
            $table->boolean('action')->default(0);
            $table->boolean('sale')->default(0);
            $table->boolean('new')->default(0);
            $table->boolean('bestseller')->default(0);
            $table->string('photo1', 255)->nullable();
            $table->string('photo2', 255)->nullable();
            $table->string('photo3', 255)->nullable();
            $table->string('photo4', 255)->nullable();
            $table->string('photo5', 255)->nullable();



            //Не пойму почему не могу внешний ключ присвоить.
//            Можешь! Это в сидинге проблема. Ты значение не прописывал наверняка
//                        $table->foreign('user_id')->references('id')->on('users');
//                        $table->foreign('category_id')->references('id')->on('navigation_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('production_product');
    }
}
