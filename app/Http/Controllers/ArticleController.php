<?php

namespace mir24\Http\Controllers;

use Illuminate\Http\Request;
use mir24\Http\Requests;
use mir24\Article;
use mir24\Image;
use mir24\Tag;

class ArticleController extends Controller {

    public function news(Request $request, $id) {
        $art = Article::findOrFail($id);
        $image = Image::findOrFail($art->image_id);
        return view('news.newsPage', [
            'shorttext' => $art->shoorttext,
            'text' => $art->text,
            'title' => $art->title,
            'image' => $image->url,
            'tags' => $art->tags->lists('title')->all()
        ]);
    }

}
