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

Route::get('/kontak', 'kontakController@index')->name('kontakIndex');
Route::get('/kontak/create', 'kontakController@new_form')->name('kontakNewForm');
Route::get('/kontak/edit/{id}', 'kontakController@edit_form');

Route::post('/kontak', 'kontakController@save')->name('kontakCreate');
Route::post('/kontak/update', 'kontakController@update');

Route::get('/kontak/delete/{id}', 'kontakController@delete_form');
Route::get('/kontak/search', 'kontakController@index_search')->name('kontakSearch');