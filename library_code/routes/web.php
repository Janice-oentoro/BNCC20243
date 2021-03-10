<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'BookController@index');
Route::get('/collection', 'BookController@collection');
Route::get('/create', 'BookController@create');
Route::post('/stores', 'BookController@store');
Route::get('/update/{id}', 'BookController@edit');
Route::put('/update/{id}', 'BookController@update');
Route::delete('/delete/{id}', 'BookController@destroy');