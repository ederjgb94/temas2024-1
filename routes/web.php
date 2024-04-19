<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miprimerapagina', '\App\Http\Controllers\AccountController@index')->name('accounts.index');

Route::delete('/miprimerapagina/{account}', '\App\Http\Controllers\AccountController@destroy')->name('accounts.destroy');

Route::get('/miprimerapagina/{account}/edit', '\App\Http\Controllers\AccountController@edit')->name('accounts.edit');

Route::put('/miprimerapagina/{account}', '\App\Http\Controllers\AccountController@update')->name('accounts.update');
