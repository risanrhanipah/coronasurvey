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


Route::get('/survey', function () {
    return view('survey');
});



Route::get('/', 'SurveyController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/result/{id}', 'ResultController@index');
Route::post('/store', 'SurveyController@store');
Route::post('/setor', 'SurveyController@setor');

Route::resource('survey','SurveyController');