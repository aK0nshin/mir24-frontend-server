<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VideoSrcToText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article_news', function ($table) {
        $table->text('video_id')->nullable()->change();
        $table->renameColumn('video_id', 'video_src');
        $table->text('clip_id')->nullable()->change();
        $table->renameColumn('clip_id', 'clip_src');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_news', function ($table) {
        DB::statement('ALTER TABLE article_news ALTER COLUMN video_src TYPE bigint USING (trim(video_src)::bigint);');
        DB::statement('ALTER TABLE article_news ALTER COLUMN clip_src TYPE bigint USING (trim(clip_src)::bigint);');
        $table->renameColumn('clip_src', 'clip_id');
        $table->renameColumn('video_src', 'video_id');
        });
    }
}
