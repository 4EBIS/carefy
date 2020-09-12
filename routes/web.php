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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'Auth/UserController@show')->name('profile');

Route::put('/update_profile', 'Auth/UserController@update')->name('update.user');

Route::post('/comment', 'PublisherController@commentPublish')->name('publish.comment');
Route::post('/publish', 'PublisherController@questionPublish')->name('publish.question');
Route::post('/feedback', 'PublisherController@feedback')->name('publish.feedback');
