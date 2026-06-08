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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/todo', function () {
//     echo 'Hello World!';
// });

Route::get('/todo', 'TodoController@index')->name('todo.index');

Route::get('/todo/create', 'TodoController@create')->name('todo.create');

Route::post('/todo', 'TodoController@store')->name('todo.store');

Route::get('/todo/{id}', 'TodoController@show')->name('todo.show');

Route::get('/todo/{id}/edit', 'TodoController@edit')->name('todo.edit');

Route::put('/todo/{id}', 'TodoController@update')->name('todo.update');

Route::delete('/todo/{id}', 'TodoController@delete')->name('todo.delete');

Route::get('/gizumo_lv1', 'TestController@display');

Route::get('/gizumo_lv2', 'TestController@screen')->name('todo.screen');

Route::get('/gizumo_lv4', 'TestController@index')->name('todo.display');

Route::get('/gizumo_lv5/{id}', 'TestController@show');

Route::get('/gizumo_lv6/create', 'TestController@create');

Route::post('/gizumo_lv6', 'TestController@store')->name('todo.store2');

Route::get('/gizumo_lv7/{id}/edit', 'TestController@edit')->name('todo.edit2');

Route::delete('/gizumo_lv4/{id}', 'TestController@delete')->name('todo.delete2');