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
    return view('index');
});
Route::get('edit/{id}','VideoController@editVideo')->name('edit');
	Route::post('edit/{id}','VideoController@update')->name('edit');
	Route::get('manage','VideoController@listVideo')->name('manage');
	Route::get('destroy/{id}','VideoController@destroy')->name('destroy')
;
Route::get('upload','LessionControll@getAdd')->name('getAdd');
	Route::post('upload','LessionControll@postAdd')->name('postAdd');
	Route::get('post','LessionControll@post')->name('post');
	Route::get('index','LessionControll@index')->name('index');
	

