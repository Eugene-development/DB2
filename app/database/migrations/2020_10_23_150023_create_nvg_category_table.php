<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNvgCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nvg_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rubric_id');
            $table->timestamps();

            $table->string('name', 255);
            $table->string('slug', 255);

            $table->foreign('rubric_id')->references('id')->on('nvg_rubric');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nvg_category');
    }
}
