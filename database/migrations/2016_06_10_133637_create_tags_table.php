<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->nullableTimestamps();
        $table->text('title')->nullable();
        $table->boolean('super')->nullable();
        $table->boolean('geo')->nullable();
        });
        Schema::create('articles_tags', function (Blueprint $table) {
        $table->bigInteger('article_id');
        $table->bigInteger('tag_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('articles_tags');
    }
}
