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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('authors', 'AuthorController@index');
Route::get('author/{id}', 'AuthorController@show');
Route::post('author/store', 'AuthorController@store');
Route::post('author/update/{id}', 'AuthorController@update');

Route::get('books', 'BookController@index');
Route::get('book/{id}', 'BookController@show');
Route::get('book/store', 'BookController@store');
Route::get('book/update/{id}','BookController@update');