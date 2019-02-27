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

//ROTTE PUBBLICHE

Route::get('/', 'HomeController@index');

Route::get('/categories/{slug}', 'CategoryController@postsPerCategory');
Route::get('/categories/{slug}/{postid}', 'CategoryController@categoryPostAtId');
Route::get('/home', 'HomeController@index')->name('public.home');
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');

//GLI URL "PUBBLICI" DI POSTS E CATEGORIES RIMANDANO ALLE ADMIN
Route::middleware('auth')->namespace('Admin')->name('admin.')->group(function(){

  Route::get('/posts/create', 'PostController@create');

  Route::resource('/categories', 'CategoryController');

});

//Rotte ADMIN

Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function(){

  Route::get('/', 'HomeController@index')->name('home');

  Route::resource('/posts', 'PostController');

  Route::resource('/categories', 'CategoryController');

});
