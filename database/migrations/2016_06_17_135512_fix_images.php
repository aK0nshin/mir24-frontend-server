<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function ($table) {
        $table->renameColumn('url', 'src');
        $table->text('title')->nullable();
        $table->text('img_alt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function ($table) {
        $table->renameColumn('src', 'url');
        $table->dropColumn('title');
        $table->dropColumn('img_alt');
        });
    }
}
