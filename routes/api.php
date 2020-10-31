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
Route::get('posts','Api\PostController@index');
Route::get('users','Api\UserController@index');