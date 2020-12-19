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
// Route::get('categories','Api\CategoryController@index');
Route::get('departments/','Api\CategoryController@index');
Route::post('departments/add','Api\CategoryController@store');
Route::put('departments/update','Api\CategoryController@update');
Route::delete('departments/delete/{id}','Api\CategoryController@destroy');
Route::get('categories/{id}','Api\CategoryController@indexid');


Route::get('tags','Api\TagController@index');
Route::post('tags/add','Api\TagController@store');
Route::put('tags/update','Api\TagController@update');
Route::delete('tags/delete/{id}','Api\TagController@destroy');
Route::get('tags/{id}','Api\TagController@indexid');


Route::get('posts','Api\PostController@index');
Route::post('posts/add','Api\PostController@store');
Route::put('posts/update','Api\PostController@update');
Route::delete('posts/delete/{id}','Api\PostController@destroy');
// Route::get('posts/{id}','Api\PostController@indexid');



Route::get('users','Api\UserController@index');