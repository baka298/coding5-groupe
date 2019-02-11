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
Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');    
    Route::resource('/produit','ProduitController');
    Route::resource('/formulaire','FormulaireController');
    
    
});

Route::get('/mail',function () {
        return view('mailform');
})->name('mail');
Route::post('/mail/send','FormulaireController@mail')->name('form');

