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



Route::get('/','App\Http\Controllers\DogsController@index');
Route::get('/dog/{id}','App\Http\Controllers\DogsController@show');

Route::post('/application','App\Http\Controllers\ApplicationsController@store');


Route::get('/application','App\Http\Controllers\ApplicationsController@index');
Route::delete('/application/{id}','App\Http\Controllers\ApplicationsController@destroy');
Route::get('/application/{id}','App\Http\Controllers\ApplicationsController@edit');
Route::put('/application/{id}','App\Http\Controllers\ApplicationsController@update');

