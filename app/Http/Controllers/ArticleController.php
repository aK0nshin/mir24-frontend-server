<?php

namespace mir24\Http\Controllers;

use Illuminate\Http\Request;

use mir24\Http\Requests;

use mir24\Article;

class ArticleController extends Controller
{
    public function news(Request $request, $id)
    {
        return view('news.newsPage', [
        	'shorttext' => Article::findOrFail($id)->shoorttext,
            'text' => Article::findOrFail($id)->text,
            'title' => Article::findOrFail($id)->title,
        ]);
    }
}
