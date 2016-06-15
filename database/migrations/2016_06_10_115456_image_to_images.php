<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImageToImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('image');
        Schema::create('images', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->nullableTimestamps();
        $table->timestamp('date')->nullable();
        $table->integer('height')->nullable();
        $table->text('url')->nullable();
        $table->integer('width')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
        Schema::create('image', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('date');
        $table->boolean('error');
        $table->integer('height');
        $table->bigInteger('ord');
        $table->boolean('png');
        $table->string('slicename', 255);
        $table->boolean('temp');
        $table->boolean('valid');
        $table->integer('width');
        });
    }
}
