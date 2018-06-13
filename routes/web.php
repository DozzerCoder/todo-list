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

use Illuminate\Support\Facades\Route;

Route::get('/',[
    'uses'=>'Todos@index'
]);
Route::post('/create/todo',[
    'uses' => 'Todos@store'
]);
Route::get('/todo/delete/{id}',[
   'uses' => 'Todos@delete',
   'as' => 'todo.delete'
]);
Route::get('/todo/update/{id}',[
    'uses' => 'Todos@update',
    'as' =>'todo.update'
]);
Route::post('/todo/save/{id}',[
    'uses'=>'Todos@save',
    'as'=>'todo.save'
]);
Route::get('/todos/completed/{id}',[
    'uses'=>'Todos@completed',
    'as'=>'todos.completed'
]);