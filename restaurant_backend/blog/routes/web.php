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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin', 'AdminRegisterConctroller')->middleware('can:admin');
Route::post('admin/store','AdminRegisterConctroller@register')->name('admin.store');
Route::post('admin/{admin}/edit','AdminRegisterConctroller@edit')->name('admin.edit');
Route::resource('table','TableController');
Route::resource('facture','FactureController');
Route::resource('reserve','ReserveController');