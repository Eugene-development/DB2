<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavigationCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigation_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rubric_id');
            $table->timestamps();

            $table->string('name', 255);
            $table->string('slug', 255);

            $table->foreign('rubric_id')->references('id')->on('navigation_rubric');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navigation_category');
    }
}
