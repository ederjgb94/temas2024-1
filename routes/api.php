<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/carros', 'App\Http\Controllers\CarController@index');
// Route::post('/carros', 'App\Http\Controllers\CarController@store');
// Route::get('/carros/{car}', 'App\Http\Controllers\CarController@show');
// Route::put('/carros/{car}', 'App\Http\Controllers\CarController@update');
// Route::delete('/carros/{car}', 'App\Http\Controllers\CarController@destroy');

Route::apiResource('cars', 'App\Http\Controllers\CarController');

Route::get('/student/{student}/school', 'App\Http\Controllers\StudentController@getSchool');

Route::get('/school/{school}/students', 'App\Http\Controllers\SchoolController@getStudents');
