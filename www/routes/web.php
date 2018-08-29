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
Route::get('/Question/new', "QuestionController@new1")->name("question.new");
Route::post('/Question/new', "QuestionController@new2");
Route::get('/Question/list', "QuestionController@list1")->name("question.list");
Route::get('/Question/view/{id}', "QuestionController@view")->name("question.view");
Route::get('/Question/edit/{id}', "QuestionController@edit1")->name("question.edit1");
Route::post('/Question/edit', "QuestionController@edit2")->name("question.edit2");
Route::get('/Question/delete/{id}', "QuestionController@delete")->name("question.delete");
