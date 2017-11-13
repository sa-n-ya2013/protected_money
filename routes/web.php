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

//Route::middleware('auth:api')->get('/categories', 'CategoriesController@get');

Route::get('/auth', 'UserController@login');

Route::middleware('auth')->get('/user', function (Request $request) {
    return Auth::user();
});

Route::middleware('auth')->get('/categories/list', 'CategoriesController@get');