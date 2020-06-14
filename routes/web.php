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

Route::get('/', function () {
    return view('home');
});


Route::get('/motivatie', function () {
    return view('motivatie');
})->middleware('verified');;

Route::get('/beroepsbeeld', function () {
    return view('beroepsbeeld');
})->middleware('verified');;


Route::get('/profilepage', function () {
//    abort(500);
    return view('profilepage');
})->middleware('verified');;


Route::get('/tabel', function () {
    return view('tabel');
})->middleware('verified');;

Route::get('/link', function () {
    return view('link');
})->middleware('verified');;

Route::get('/article', function () {

    return view('blog', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);

})->middleware('verified');;


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');;

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


//email auth

Auth::routes(['verify' => true]);


//Route::get('/', [
//    'as' => 'login',
//    'uses' => 'HomeController@index'
//]);




