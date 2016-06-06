<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('/', 'MainController');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('article', 'ArticleController');

Route::get('/news/{id}', 'ArticleController@news')->where('id', '[0-9]+');

Route::get('/news', function () {
    return view('news.newsPage');
});