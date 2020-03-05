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

Route::get('/','mainController@index');
Route::post('/store/employees','mainController@store');
Route::get('/delete/{id}','mainController@delete');
Route::get('/edit/{id}','mainController@showEdit');
Route::post('/update/{id}','mainController@update');
Route::get('/login','loginController@index');
Route::post('/login/auth','loginController@login_validation');
Route::get('/logout','loginController@logout');
Route::get('/registration','loginController@regist');
Route::post('/registration/post','loginController@regist_form');
