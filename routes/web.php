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

Route::resource('/articles', 'ArticleController')->middleware('auth');
Route::resource('/photos','PhotoController')->middleware('auth');
Route::resource('/techs','TechController')->middleware('auth');
Route::resource('/newsletters','NewsletterController')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mail',function() {
    return view ('mail');
})->name('mail');
Route::post('/mail/send','HomeController@mail')->name('form');
