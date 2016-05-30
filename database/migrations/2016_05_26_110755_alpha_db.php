<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlphaDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('created_at');
        $table->text('shorttext');
        $table->text('text');
        $table->string('title', 255);
        $table->bigInteger('image_id');
        $table->bigInteger('serie_id');
        $table->bigInteger('video_id');
        $table->text('copyright');
        $table->bigInteger('created_by');
        });
        Schema::create('makeupfiles', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('creationdate');
        $table->dateTime('fromdate');
        $table->boolean('prepublished');
        $table->boolean('published');
        $table->boolean('temp');
        $table->dateTime('todate');
        $table->string('title', 255);
        $table->bigInteger('file_id');
        $table->bigInteger('user_id');
        $table->dateTime('date');
        });
        Schema::create('attachment', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('date');
        $table->string('originalname', 255);
        $table->bigInteger('originalsize');
        $table->boolean('temp');
        $table->string('type', 255);
        });
        Schema::create('file', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('creationdate');
        $table->dateTime('fromdate');
        $table->boolean('prepublished');
        $table->boolean('published');
        $table->boolean('temp');
        $table->dateTime('todate');
        $table->text('description');
        $table->string('title', 255);
        $table->bigInteger('data_id');
        $table->text('url');
        });
        Schema::create('news_tag', function (Blueprint $table) {
        $table->bigInteger('news_id');
        $table->bigInteger('tags_id');
        });
        Schema::create('photo', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('creationdate');
        $table->dateTime('fromdate');
        $table->boolean('prepublished');
        $table->boolean('published');
        $table->boolean('temp');
        $table->dateTime('todate');
        $table->string('author', 255);
        $table->integer('ord');
        $table->string('title', 255);
        $table->bigInteger('image_id');
        $table->bigInteger('news_id');
        $table->bigInteger('affiliate_id');
        $table->text('description');
        $table->bigInteger('staticpage_id');
        $table->string('authorlink', 255);
        $table->dateTime('lastused');
        $table->text('notes');
        $table->integer('season');
        $table->dateTime('validuntill');
        $table->integer('value');
        $table->bigInteger('rubric_id');
        $table->bigInteger('source_id');
        });
        Schema::create('person', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('creationdate');
        $table->dateTime('fromdate');
        $table->boolean('prepublished');
        $table->boolean('published');
        $table->boolean('temp');
        $table->dateTime('todate');
        $table->string('name', 255);
        $table->string('shorttext', 255);
        $table->string('shorttextsrc', 255);
        $table->text('text');
        $table->text('textsrc');
        $table->bigInteger('image_id');
        $table->bigInteger('onmainpage_id');
        $table->boolean('onmainpage');
        $table->bigInteger('search_id');
        $table->string('about', 255);
        $table->boolean('showinfaces');
        $table->boolean('hideblogger');
        $table->bigInteger('programm_id');
        });
        Schema::create('photolink', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->text('author');
        $table->string('authorlink', 255);
        $table->string('dao', 255);
        $table->bigInteger('entity');
        $table->boolean('main');
        $table->integer('ord');
        $table->text('title');
        $table->bigInteger('photo_id');
        $table->bigInteger('photophotobank_id');
        $table->bigInteger('imageauthor_id');
        });
        Schema::create('source', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('creationdate');
        $table->dateTime('fromdate');
        $table->boolean('prepublished');
        $table->boolean('published');
        $table->boolean('temp');
        $table->dateTime('todate');
        $table->string('name', 255);
        $table->string('url', 255);
        });
        Schema::create('author', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('creationdate');
        $table->dateTime('fromdate');
        $table->boolean('prepublished');
        $table->boolean('published');
        $table->boolean('temp');
        $table->dateTime('todate');
        $table->integer('count');
        $table->string('initial', 255);
        $table->string('title', 255);
        $table->string('url', 255);
        });
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
        Schema::create('imageresize', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->boolean('excellent');
        $table->integer('height');
        $table->boolean('manual');
        $table->string('name', 255);
        $table->boolean('png');
        $table->integer('width');
        $table->bigInteger('image_id');
        $table->boolean('haserror');
        });
        Schema::create('show', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('creationdate');
        $table->dateTime('fromdate');
        $table->boolean('prepublished');
        $table->boolean('published');
        $table->boolean('temp');
        $table->dateTime('todate');
        $table->string('announce', 255);
        $table->dateTime('date');
        $table->string('hash', 255);
        $table->text('text');
        $table->text('textsrc');
        $table->string('title', 255);
        $table->boolean('showlink');
        $table->bigInteger('image_id');
        $table->bigInteger('programm_id');
        $table->boolean('opened');
        $table->integer('type');
        $table->bigInteger('scheduletype_id');
        $table->bigInteger('showtype_id');
        $table->bigInteger('createdBy_id');
        $table->bigInteger('lastEditedBy_id');
        });
        Schema::create('scheduletype', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('creationdate');
        $table->dateTime('fromdate');
        $table->boolean('prepublished');
        $table->boolean('published');
        $table->boolean('temp');
        $table->dateTime('todate');
        $table->double('hoursshift', 15, 8);
        $table->boolean('isdefault');
        $table->string('title', 255);
        $table->bigInteger('affiliate_id');
        $table->boolean('showonsite');
        $table->integer('schedulesite');
        });
        Schema::create('showalias', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->dateTime('creationdate');
        $table->dateTime('fromdate');
        $table->boolean('prepublished');
        $table->boolean('published');
        $table->boolean('temp');
        $table->dateTime('todate');
        $table->string('alias', 255);
        $table->string('programmname', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article');
        Schema::drop('makeupfiles');
        Schema::drop('attachment');
        Schema::drop('file');
        Schema::drop('news_tag');
        Schema::drop('photo');
        Schema::drop('person');
        Schema::drop('photolink');
        Schema::drop('source');
        Schema::drop('author');
        Schema::drop('image');
        Schema::drop('imageresize');
        Schema::drop('show');
        Schema::drop('scheduletype');
        Schema::drop('showalias');
    }
}
