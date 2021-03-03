<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNvgHeadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nvg_head', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id');

            $table->timestamps();

            $table->string('name', 255);
            $table->string('slug', 255);

            $table->foreign('menu_id')->references('id')->on('nvg_menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navigation_head');
    }
}
