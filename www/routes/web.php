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
Route::get('/Possibilite/new', "PossibiliteController@new1")->name("possibilite.new");
Route::post('/Possibilite/new', "PossibiliteController@new2");
Route::get('/Possibilite/list', "PossibiliteController@list1")->name("possibilite.list");
Route::get('/Possibilite/view/{id}', "PossibiliteController@view")->name("possibilite.view");
Route::get('/Possibilite/edit/{id}', "PossibiliteController@edit1")->name("possibilite.edit1");
Route::post('/Possibilite/edit', "PossibiliteController@edit2")->name("possibilite.edit2");
Route::get('/Possibilite/delete/{id}', "PossibiliteController@delete")->name("possibilite.delete");
Route::get('/Reponse/new', "ReponseController@new1")->name("reponse.new");
Route::post('/Reponse/new', "ReponseController@new2");
Route::get('/Reponse/list', "ReponseController@list1")->name("reponse.list");
Route::get('/Reponse/view/{id}', "ReponseController@view")->name("reponse.view");
Route::get('/Reponse/edit/{id}', "ReponseController@edit1")->name("reponse.edit1");
Route::post('/Reponse/edit', "ReponseController@edit2")->name("reponse.edit2");
Route::get('/Reponse/delete/{id}', "ReponseController@delete")->name("reponse.delete");
Route::get('/Probleme/new', "ProblemeController@new1")->name("probleme.new");
Route::post('/Probleme/new', "ProblemeController@new2");
Route::get('/Probleme/list', "ProblemeController@list1")->name("probleme.list");
Route::get('/Probleme/view/{id}', "ProblemeController@view")->name("probleme.view");
Route::get('/Probleme/edit/{id}', "ProblemeController@edit1")->name("probleme.edit1");
Route::post('/Probleme/edit', "ProblemeController@edit2")->name("probleme.edit2");
Route::get('/Probleme/delete/{id}', "ProblemeController@delete")->name("probleme.delete");
Route::get('/Resultat/new', "ResultatController@new1")->name("resultat.new");
Route::post('/Resultat/new', "ResultatController@new2");
Route::get('/Resultat/list', "ResultatController@list1")->name("resultat.list");
Route::get('/Resultat/view/{id}', "ResultatController@view")->name("resultat.view");
Route::get('/Resultat/edit/{id}', "ResultatController@edit1")->name("resultat.edit1");
Route::post('/Resultat/edit', "ResultatController@edit2")->name("resultat.edit2");
Route::get('/Resultat/delete/{id}', "ResultatController@delete")->name("resultat.delete");
