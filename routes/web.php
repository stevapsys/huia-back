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

Route::get('/', ['as' => 'index', 'uses' => 'CustomerController@index']); 
Route::get('/add', ['as' => 'add', 'uses' => 'CustomerController@add']); 
Route::post('/add', ['as' => 'salvar', 'uses' => 'CustomerController@salvar']); 
Route::get('/list', 'CustomerController@json'); 