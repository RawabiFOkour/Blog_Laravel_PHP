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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostController');
Route::resource('commands','CommandController');



Route::get('/', "PostController@get_post");

Route::get('/add/{post}/{user}', "CommandController@comments_home");
Route::get('/add_command/{id}', "CommandController@add_command");
Route::post('/commands/{id}', "CommandController@store");
Route::post('/comments_home/{post}/{user}', "CommandController@save");

