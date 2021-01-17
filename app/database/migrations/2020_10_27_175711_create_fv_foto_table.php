<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFvFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fv_foto', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_id')->nullable();
            $table->foreignId('prod_perfomance_id')->nullable();
            $table->foreignId('prod_product_id')->nullable();
            $table->foreignId('prod_service_id')->nullable();
            $table->foreignId('blog_post_id')->nullable();
            $table->foreignId('cmp_team_id')->nullable();
            $table->foreignId('cmp_master_id')->nullable();
//            $table->foreignId('company_testymonial_id')->nullable();
            $table->foreignId('cmp_contact_id')->nullable();
            $table->foreignId('cmp_technology_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('prod_perfomance_id')->references('id')->on('prod_perfomance');
            $table->foreign('prod_product_id')->references('id')->on('prod_product');
            $table->foreign('prod_service_id')->references('id')->on('prod_service');
            $table->foreign('blog_post_id')->references('id')->on('blog_post');
            $table->foreign('cmp_team_id')->references('id')->on('cmp_team');
            $table->foreign('cmp_master_id')->references('id')->on('cmp_master');
//            $table->foreign('company_testymonial_id')->references('id')->on('company_testimonial');
            $table->foreign('cmp_contact_id')->references('id')->on('cmp_contact');
            $table->foreign('cmp_technology_id')->references('id')->on('cmp_technology');


            $table->text('title')->nullable();
            $table->text('description')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fv_foto');
    }
}
