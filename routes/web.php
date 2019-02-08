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


//Newsletter

Route::get('/newsletter', function(){
    return view('newsletter.newsletter');
})->name('mail');

Route::post('/newsletter/send', 'NewsletterController@mail')->name('submitMail');

Route::get('/newsletter/abonnes', 'NewsletterController@show')->name('abonnes');