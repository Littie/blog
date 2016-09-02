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

//Route::get('/', function () {
//    return view('welcome');
//});
//
Route::auth();
//
//Route::get('/home', 'HomeController@index');

/* Users routers */
Route::get('/', ['uses' => 'UserController@index', 'as' => 'user.index']);
Route::get('{user}/article', ['uses' => 'UserController@index', 'as' => 'user.article.index']);
Route::get('{user}/article/create', ['uses' => 'UserController@create', 'as' => 'user.article.create']);
Route::post('{user}/article/store', ['uses' => 'UserController@store', 'as' => 'user.article.store']);
Route::get('{user}/article/{id}', ['uses' => 'UserController@show', 'as' => 'user.article.show'])->where('id', '\d+');
Route::delete('{user}/article/{id}', ['uses' => 'UserController@destroy', 'as' => 'user.article.destroy'])->where('id', '\d+');
Route::get('{user}/article/edit/{id}', ['uses' => 'UserController@edit', 'as' => 'user.article.edit'])->where('id', '\d+');
Route::put('{user}/article/update/{id}', ['uses' => 'UserController@update', 'as' => 'user.article.update'])->where('id', '\d+');
Route::get('{user}/article/all', ['uses' => 'UserController@all', 'as' => 'user.article.all']);
Route::get('{user}/article/published', ['uses' => 'UserController@published', 'as' => 'user.article.published']);
Route::get('{user}/article/unpublished', ['uses' => 'UserController@unpublished', 'as' => 'user.article.unpublished']);

/* Blogs routes */
Route::get('blog/create', ['uses' => 'BlogController@create', 'as' => 'blog.create']);
Route::post('blog/store', ['uses' => 'BlogController@store', 'as' => 'blog.store']);

/* Articles routes */
Route::get('article/create', ['uses' => 'ArticleController@create', 'as' => 'article.create']);
Route::post('article/store', ['uses' => 'ArticleController@store', 'as' => 'article.store']);
Route::get('article/{id}', ['uses' => 'ArticleController@show', 'as' => 'article.show']);

/* Guests routtes */
Route::get('users', ['uses' => 'GuestController@users', 'as' => 'guest.users']);
Route::get('blog/{id}', ['uses' => 'BlogController@show', 'as' => 'blog.show']);
Route::get('blogs', ['uses' => 'BlogController@index', 'as' => 'blog.index']);

Route::post('comment/store', ['uses' => 'CommentController@store', 'as' => 'comment.store']);