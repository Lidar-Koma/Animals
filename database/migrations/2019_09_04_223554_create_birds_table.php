<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birds', function (Blueprint $table) {
            $table->Increments('id');
            $table->string("name");
            $table->string("image");
            $table->integer('habitats_id');

            $table->integer('birds_details_id');
            $table->integer('geographicalrange_id');
            $table->integer('images_id');

            $table->integer('videos_id');


            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('birds');
    }
}
