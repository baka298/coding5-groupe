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

Route::middleware('auth')->group(function () {
    Route::resource('/roles', 'RoleController');
    Route::resource('/users', 'userController');
    Route::resource('/profils', 'ProfilController');
    Route::resource('/events', 'EventController');
});

Route::get('/users/{user}/block', 'userController@block')->name('users.block');
Route::get('/users/{user}/deblock', 'userController@deblock')->name('users.deblock');

Route::get('/mail', function() {
	return view('mailform');
	});
Route::post('/mail/send', 'HomeController@mail')->name('mail');