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

Route::get('/',function () {
    return view('Dogs.index');
});

Route::get('/application',function () {
    return view('application');
});

Route::get('/','App\Http\Controllers\DogsController@index');
Route::get('/dog/{id}','App\Http\Controllers\DogsController@show');

Route::post('/dog/{id}','App\Http\Controllers\ApplicationsController@store');

Route::post('/application','App\Http\Controllers\ApplicationsController@edit');
Route::put('/application','App\Http\Controllers\ApplicationsController@update');

