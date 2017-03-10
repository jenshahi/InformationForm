<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', 'TaskController@index');
Route::get('/home', 'TaskController@index');
Route::get('/show/{id}', 'TaskController@show');
Route::get('/edit/{id}', 'TaskController@edit');
Route::post('/show/{id}', 'TaskController@update');
Route::get('/delete/{id}', 'TaskController@destroy');
Route::get('/form','TaskController@form');
Route::post('/form','TaskController@store');

//Route::group(['middleware' => ['laravel']],function(){
//    Route::resource('/','TaskController');
//});


//Route::get('/db',function(){
////   return DB::select('select database();');
//   return DB::table('table_lists') -> get();
//});


