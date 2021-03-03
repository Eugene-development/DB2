<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable();
            $table->foreignId('prod_perfomance_id')->nullable();
            $table->foreignId('prod_product_id')->nullable();
            $table->foreignId('prod_service_id')->nullable();
            $table->foreignId('text_id')->nullable();
            $table->foreignId('blog_post_id')->nullable();
            $table->foreignId('cmp_team_id')->nullable();
            $table->foreignId('cmp_master_id')->nullable();
            $table->foreignId('cmp_testymonial_id')->nullable();
            $table->foreignId('cmp_contact_id')->nullable();
            $table->foreignId('cmp_technology_id')->nullable();

            $table->timestamps();

            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('alt')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('prod_perfomance_id')->references('id')->on('prod_perfomance');
            $table->foreign('prod_product_id')->references('id')->on('prod_product');
            $table->foreign('prod_service_id')->references('id')->on('prod_service');
            $table->foreign('blog_post_id')->references('id')->on('blog_post');
            $table->foreign('text_id')->references('id')->on('text');
            $table->foreign('cmp_team_id')->references('id')->on('cmp_team');
            $table->foreign('cmp_master_id')->references('id')->on('cmp_master');
            $table->foreign('cmp_testymonial_id')->references('id')->on('cmp_testimonial');
            $table->foreign('cmp_contact_id')->references('id')->on('cmp_contact');
            $table->foreign('cmp_technology_id')->references('id')->on('cmp_technology');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foto');
    }
}
