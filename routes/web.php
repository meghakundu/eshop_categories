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

Route::get('/','App\Http\Controllers\CategoryController@createCategory');
Route::post('/add-category','App\Http\Controllers\CategoryController@storeCategory');
Route::get('/add-user','App\Http\Controllers\CategoryController@showUserForm');
Route::post('/allot-user','App\Http\Controllers\CategoryController@addUser');

