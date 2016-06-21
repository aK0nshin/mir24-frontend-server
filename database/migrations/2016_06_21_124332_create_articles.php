<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('status')->nullable();
        $table->bigInteger('views')->nullable();
        $table->text('author')->nullable();
        $table->nullableTimestamps();
        $table->boolean('main_center')->nullable();
        $table->boolean('main_top')->nullable();
        $table->boolean('rubric_top')->nullable();
        $table->boolean('lightning')->nullable();
        $table->boolean('promo')->nullable();
        $table->date('date_start')->nullable();
        $table->date('date_end')->nullable();
        $table->text('title')->nullable();
        $table->text('advert')->nullable();
        $table->text('text')->nullable();
        $table->text('story')->nullable();
        $table->bigInteger('related_news')->nullable();
        $table->bigInteger('img_id')->nullable();
        $table->bigInteger('video_id')->nullable();
        $table->boolean('remove_after_36')->nullable();
        $table->text('best_news_title')->nullable();
        $table->text('avtomir_title')->nullable();
        $table->bigInteger('clip_id')->nullable();
        $table->bigInteger('last_edit_by')->nullable();
        $table->bigInteger('created_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
