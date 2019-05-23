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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('ptnAdmin','PtnAdmin');
Route::resource('ptkAdmin','PtkAdmin');
Route::resource('ptsAdmin','PtsAdmin');
Route::resource('subscribeAdmin','subscribeAdmin');

Route::resource('subscribe','subscribe');
Route::resource('unsubscribeAdmin','unsubscribeAdmin');
Route::resource('ptn','Ptn');
Route::resource('pts','Pts');
Route::resource('ptk','Ptk');
Route::resource('subscribe','subscribe');
Route::resource('unsubscribe','unsubscribe');
