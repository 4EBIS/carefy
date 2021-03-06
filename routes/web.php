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

Route::get('/update_profile', 'UserController@update')->name('update.user');

Route::post('/comment', 'PublicationsController@comment')->name('publicate.comment');
Route::post('/publicate', 'PublicationsController@newPublication')->name('publicate.question');
Route::post('/feedback', 'PublicationsController@feedback')->name('publcate.feedback');
