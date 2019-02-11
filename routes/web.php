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
// La route vers la HomePage
Route::get('/home', 'HomeController@index')->name('home');
// La Route vers les différentes pages Users
Route::resource('user', 'UserController');
// La Route vers les différentes pages Profils
Route::resource('profil', 'ProfilController');
// La Route vers les différentes pages Role
Route::resource('role', 'RoleController');
// La Route vers les différentes page Newsletter
Route::resource('newsletter', 'NewsletterController');

Route::get('/mailform',function () {
    return view('Mails.mailform');
});

Route::post('/mailform','UserController@mail')->name('mailform');