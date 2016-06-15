<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticlesToArticleNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('articles');
        Schema::create('article_news', function (Blueprint $table) {
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
        Schema::create('news_news', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('related_news')->nullable();
        $table->bigInteger('news_id')->nullable();
        });
        Schema::create('status', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->text('name')->nullable();
        });
        Schema::create('news_filial', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('news_id')->nullable();
        $table->bigInteger('filial_id')->nullable();
        });
        Schema::create('filial', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->text('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_news');
        Schema::dropIfExists('news_news');
        Schema::dropIfExists('status');
        Schema::dropIfExists('news_filial');
        Schema::dropIfExists('filial');
        Schema::create('articles', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->nullableTimestamps();
        $table->text('shorttext')->nullable();
        $table->text('text')->nullable();
        $table->string('title', 255)->nullable();
        $table->bigInteger('image_id')->nullable();
        $table->bigInteger('serie_id')->nullable();
        $table->bigInteger('video_id')->nullable();
        $table->text('copyright')->nullable();
        $table->bigInteger('created_by')->nullable();
        });
    }
}
