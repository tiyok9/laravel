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
    return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::get('/dash', 'DataController@index');
Route::get('/add', 'DataController@create');
Route::post('/dash', 'DataController@store');
Route::get('/detail/{data}','DataController@show');
Route::get('/edit/{data}','DataController@edit');
Route::post('/edit/{data}','DataController@update');
Route::delete('delete/{data}','DataController@destroy');
