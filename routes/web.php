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
Route::get('/books', 'BookController@index');

Route::get('/create', 'BookController@create');
Route::post('/create', 'BookController@store');



Route::post('/updated', 'EditBook@updated');
Route::get('/update/{id}', 'EditBook@update');
