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

Route::prefix('mis')->group(function() {
    Route::get('/', 'MisController@index');
    Route::get('/check', 'CheckContorllerController@index');
});
