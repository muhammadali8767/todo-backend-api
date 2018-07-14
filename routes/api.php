<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
Route::middleware('auth:api')->group(function()
{
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/todo', 'TodoController@store');
    Route::post('/logout', 'AuthController@logout');

    Route::patch('/todo/{todo}', 'TodoController@update');
    Route::patch('/todoCheckAll', 'TodoController@updateAll');
    Route::delete('/todo/{todo}', 'TodoController@destroy');
    Route::delete('/todoDeleteCompleted', 'TodoController@destroyCompleted');
});

    Route::get('/todo', 'TodoController@index');

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');

