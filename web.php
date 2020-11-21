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

Route::get('/login', 'HomeController@index');

Route::post('/login', 'HomeController@login');

Route::get('/master', function() {
    return view('adminlte.master');
});

Route::get('/items/index', function() {
    return view('items.index');
});

Route::get('/items/create', function() {
    return view('items.create');
});

Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/{Id}','PertanyaanController@show');
Route::get('/pertanyaan/{Id}/edit','PertanyaanController@edit');
Route::put('/pertanyaan/{Id}','PertanyaanController@update');
Route::delete('/pertanyaan/{Id}','PertanyaanController@destroy');



    

