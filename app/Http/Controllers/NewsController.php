<?php

namespace mir24\Http\Controllers;

use Illuminate\Http\Request;

use mir24\Http\Requests;

use mir24\News;

class NewsController extends Controller
{
    public function news(Request $request, News $id)
    {
      	return view('news.newsPage');
    }
}
