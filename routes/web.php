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
    return view('welcome');
});

Route::prefix('admin-cp')->namespace('Admin')->group(function () {
    Route::get('/', 'DBManagement@index');
    Route::get('/database/show', 'DBManagement@show')->name('db_list');;;
    Route::get('/database/detail/{tableName}', 'DBManagement@detail')->name('db_detail');
});