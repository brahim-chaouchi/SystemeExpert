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

Route::get('/', "DefaultController@index")->name("index");
Route::get('/question/nouveau', "QuestionController@nouveau")->name("question.nouveau");
Route::post('/question/nouveau', "QuestionController@nouveau")->name("question.nouveau");
