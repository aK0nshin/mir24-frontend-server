<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamingStuff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('filial', 'filials');
        Schema::rename('news_filial', 'filial_news');
        Schema::table('news_tag', function ($table) {
        $table->renameColumn('tags_id', 'tag_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('filials', 'filial');
        Schema::rename('filial_news', 'news_filial');
        Schema::table('news_tag', function ($table) {
        $table->renameColumn('tag_id', 'tags_id');
        });
    }
}
