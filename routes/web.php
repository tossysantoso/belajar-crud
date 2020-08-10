<?php

use App\Http\Controllers\PertanyaanController;
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
    return view('items.coba');
});

Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/{id}',"PertanyaanController@show");
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy');


