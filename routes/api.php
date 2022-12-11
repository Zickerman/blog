<?php

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('posts', "App\Http\Controllers\ApiController@getAllUsersWithPosts");
Route::get('posts/{id}', 'App\Http\Controllers\ApiController@getPost');
Route::post('posts', 'App\Http\Controllers\ApiController@createPost');
Route::put('posts/{id}', 'App\Http\Controllers\ApiController@updatePost');
Route::delete('posts/{id}', 'App\Http\Controllers\ApiController@deletePost');
