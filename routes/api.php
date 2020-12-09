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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('orders', 'orderController@index');
// Route::get('orders', 'orderController@index');
Route::get('order/{id}', 'orderController@show');
Route::get('users', 'userController@index');
Route::get('user/{id}', 'userController@show');

Route::get('products','orderProductController@index');

Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');
