<?php

namespace mir24\Http\Controllers;

use Illuminate\Http\Request;

use mir24\Http\Requests;

use mir24\Article;

class ArticleController extends Controller
{
    public function news(Request $request, Article $id)
    {
      	return view('news.newsPage');
    }
}
