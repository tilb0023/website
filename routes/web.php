<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::get('/home', function () {
//    return view('home');
//});

Route::get('/home', function () {
    return view('home');
});

Route::get('/motivatie', function () {
    return view('motivatie');
});

Route::get('/beroepsbeeld', function () {
    return view('beroepsbeeld');
});


Route::get('/profilepage', function () {
//    abort(500);
    return view('profilepage');
});


Route::get('/tabel', function () {
    return view('tabel');
});

Route::get('/link', function () {
    return view('link');
});

Route::get('/article', function () {
//    $article = App\Article::latest()->get();
    return view('blog', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
//    return $article;
});

Route::get('/wordcount', function () {
    return view('wordcount/index');
});

//Route::get('/blog', 'ArticlesController@index')->name('articles.index');
//Route::post('/blog', 'ArticlesController@store');
//Route::get('/blog/create', 'ArticlesController@create');
//Route::get('/blog/{article}', 'ArticlesController@show')->name('articles.show');
//Route::get('/blog/{article}/edit', 'ArticlesController@edit');
//Route::put('/blog/{article}', 'ArticlesController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Article routes
Route::resource('article' , 'ArticleController');
Route::get('/articles', 'ArticleController@index')->name('articles')->middleware('auth');
//
Route::get('/{name}', function () {
    return view('Home.home', [
        'assignments' => \App\Assignment::take(5)->latest()->get(),
        'articles' => \App\Article::take(4)->latest()->get()
    ]);
})->where('name', 'home||')->name('Home')->middleware('auth');
