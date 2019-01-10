<?php

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
    return view('welcome');
});

Route::get('getusers', 'UserController@getUsers')->name('getUsers');
Route::get('addForm', 'UserController@addForm')->name('addForm');
Route::post('addUser', 'UserController@addUser')->name('addUser');
Route::get('updateForm/{id}', 'UserController@updateForm')->name('updateForm');
Route::post('updateUser/{id}', 'UserController@update')->name('updateUser');
Route::get('delete/{id}', 'UserController@delete')->name('deleteUser');





