<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/redirect', 'Auth\LoginController@redirectToProvider')->name('auth.redirect');
Route::get('/auth/callback', 'Auth\LoginController@handleProviderCallback')->name('auth.callback');

Route::get('/input', 'HomeController@input')->name('form.input');
Route::get('/output', 'HomeController@output')->name('form.output');
