<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Auth::routes();
Route::post('insertar/','catalogController@postCreate');
Route::post('editar/','catalogController@postEdit');
Route::get('catalog/edit/{id}','catalogController@getEdit');
Route::get('borrar/{id}','catalogController@borrar');
Route::get('devolver/{id}','catalogController@devolver');
Route::get('alquilar/{id}','catalogController@alquilar');
Route::get('/','catalogController@getIndex');
Route::get('enlaces/{id}','catalogController@getShow');
Route::get('catalog','catalogController@getIndex');
Route::get('nuevapelicula','CatalogController@getCreate');

|
*/
/*
*/

Auth::routes();
Route::post('insertar/','catalogController@postCreate');
Route::post('editar/','catalogController@postEdit');
Route::get('catalog/edit/{id}','catalogController@getEdit');
Route::get('/','catalogController@getIndex');
Route::get('enlaces/{id}','catalogController@getShow');
Route::get('catalog','catalogController@getIndex');
Route::get('borrar/{id}','catalogController@borrar');
Route::get('alquilar/{id}','catalogController@alquilar');
Route::get('devolver/{id}','catalogController@devolver');
Route::get('catalog/create/','catalogController@getCreate');




