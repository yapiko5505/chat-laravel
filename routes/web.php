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

Route::get('/', function () {
    return view('welcome');
});
// person
Route::get('/person', 'App\Http\Controllers\PersonController@index');
Route::get('/person/find', 'App\Http\Controllers\PersonController@find');
Route::post('/person/find', 'App\Http\Controllers\PersonController@search');
Route::get('/person/add', 'App\Http\Controllers\PersonController@add');
Route::post('/person/add', 'App\Http\Controllers\PersonController@create');
Route::get('/person/edit', 'App\Http\Controllers\PersonController@edit');
Route::post('/person/edit', 'App\Http\Controllers\PersonController@update');
Route::get('/person/del', 'App\Http\Controllers\PersonController@delete');
Route::post('/person/del', 'App\Http\Controllers\PersonController@remove');

// board
Route::get('/board', 'App\Http\Controllers\BoardController@index');
Route::get('/board/add', 'App\Http\Controllers\BoardController@add');
Route::post('/board/add', 'App\Http\Controllers\BoardController@create');

// login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/person', [App\Http\Controllers\PersonController::class,'index'])->name('/person');
