<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|c
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('matkul', 'MatkulController@index')->name('matkul');
Route::get('matkul-add', 'MatkulController@add')->name('add.matkul');
Route::post('matkul-save', 'MatkulController@save')->name('save.matkul');
Route::get('matkul-edit/{id}', 'MatkulController@edit')->name('edit.matkul');
Route::post('matkul-update/{id}', 'MatkulController@update')->name('update.matkul');
Route::get('matkul-delete/{id}', 'MatkulController@delete')->name('delete.matkul');