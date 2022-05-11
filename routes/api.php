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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/post/input/manual', 'ApiController@inputManual')->name('input.manual');
Route::post('/post/input/auto', 'ApiController@inputAuto')->name('input.auto');
Route::post('/post/edit/{id}', 'ApiController@editPost')->name('edit.post');

Route::get('/data/output/all', 'ApiController@output')->name('output.all');
Route::get('/data/output/show/{id}', 'ApiController@outputShow')->name('output.show');
Route::get('/data/delete/{id}', 'ApiController@delete')->name('delete');