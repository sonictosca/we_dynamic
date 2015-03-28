<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'PrincipaleController@index');
Route::get('about', 'PrincipaleController@about');
Route::get('grafica', 'PrincipaleController@grafica');
Route::get('servizi', 'PrincipaleController@servizi');
Route::get('altro', 'PrincipaleController@altro');
Route::get('contatti', 'PrincipaleController@contatti');
Route::get('privacy', 'PrincipaleController@privacy');
Route::get('case', 'PrincipaleController@caseStudy');
Route::put('contatto', 'ContattiController@invia');

Route::get('admin', 'AdminController@index');
Route::get('admin/listcase', 'AdminController@indexCases');
Route::get('admin/listnews', 'AdminController@indexNews');
Route::get('admin/addcase', 'AdminController@createCase');
Route::get('admin/addnews', 'AdminController@addNews');
Route::post('admin/addcase', 'AdminController@storeCase');
Route::post('admin/addnews', 'AdminController@storeNews');
Route::get('admin/editcase/{useCase}', 'AdminController@editCase');
Route::put('admin/editcase/{useCase}', 'AdminController@updateCase');
Route::get('admin/upcase/{case}', 'AdminController@upCase');
Route::get('admin/downcase/{case}', 'AdminController@downCase');
Route::get('admin/deletecase/{case}', 'AdminController@deleteCase');

//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
