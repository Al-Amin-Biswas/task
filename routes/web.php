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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();
Route::get('/', 'PostsController@getPostDaata');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('post', 'PostsController@store')->name('post.store');
Route::get('/details-post/{id}', 'PostsController@getPostDetails')->name('details');
Route::get('/details-video/{id}', 'PostsController@getVideoDetails')->name('details');
