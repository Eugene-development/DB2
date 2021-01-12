<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavigationRubricTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigation_rubric', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('head_id');

            $table->string('name', 255);
            $table->string('slug', 255);

            $table->foreign('head_id')->references('id')->on('navigation_head');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navigation_rubric');
    }
}
