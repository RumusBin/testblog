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

Route::get('/', 'TaskController@index')->name('task.index');
Route::get('/tasks/create', 'TaskController@create')->name('task.create');
Route::post('/tasks/store', 'TaskController@store')->name('task.store');
Route::get('/tasks/view/{id}', 'TaskController@view')->name('task.view');
Route::get('/tasks/edit/{id}', 'TaskController@edit')->name('task.edit');
Route::put('/tasks/update/{id}', 'TaskController@update')->name('task.update');
Route::get('/tasks/delete/{id}', 'TaskController@delete')->name('task.delete');
