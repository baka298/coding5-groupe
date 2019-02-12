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

//Gallery

Route::resource('/gallery', 'GalleryController');

//FAQ

Route::get('/faq', 'FaqController@index')->name('faq');

Route::get('/faq/question', 'FaqController@create')->name('question');
Route::post('/faq/question/submit','FaqController@store')->name('questionsubmit');

Route::delete('faq/delete/{faq}',  'FaqController@destroy')->name('delete');

Route::get('/faq/answer/{faq}', 'FaqController@answer')->name('answer')
;
Route::put('/faq/answer/submit/{faq}','FaqController@answerStore')->name('answersubmit');

Route::get('/faq/answer/{faq}/edit', 'FaqController@edit')->name('answeredit');
Route::put('/faq/answer/{faq}/edit/submit','FaqController@update')->name('answereditsubmit');

