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

Route::get('reviews', 'UserReviewController@index');
Route::get('reviews/{review}', 'UserReviewController@show');
Route::post('reviews', 'UserReviewController@store');
Route::put('reviews/{review}', 'UserReviewController@update');
Route::delete('reviews/{review}', 'UserReviewController@delete');