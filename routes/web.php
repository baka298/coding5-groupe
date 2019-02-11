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
Route::resource('/produits', 'ProduitController');
Route::resource('/question', 'QuestionController');
Route::resource('/partenariat', 'PartenariatController');
Route::resource('/contact', 'ContactController');
Route::get('/produits-all', 'ProduitController@all');
Route::get('/question-all', 'QuestionController@all');
Route::get('/partenariat-all', 'PartenariatController@all');
Route::get('/contact-all', 'ContactController@all');



