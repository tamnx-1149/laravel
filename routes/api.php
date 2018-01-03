<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('/', 'AuthController@index');
    Route::resource('items', ItemController::class);
});
Route::post('/login', 'AuthController@login')->name('api_login');
