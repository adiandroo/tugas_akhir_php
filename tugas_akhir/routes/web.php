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

Route::post('/pushData', 'Biodata@store');
Route::get('/getData','Biodata@getData');
Route::post('/setData','Biodata@update');
Route::get('/delete/{id}','Biodata@hapus');
Route::get('/getDetail/{id}','Biodata@getDetail');