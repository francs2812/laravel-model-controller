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

Route::get('/film', 'MoviesController@index' )->name("Film");
Route::get('/login', 'LoginController@index' )->name("Login");
Route::get('/', 'HomeController@index' )->name("Home");
