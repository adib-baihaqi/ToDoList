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

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/',function(){
     return view('index');
 });

Route::get('/','App\Http\Controllers\TaskController@index');

Route::get('/create',function(){
    return view('list');
});

Route::post('/','App\Http\Controllers\TaskController@store');

Route::patch('/{id}', 'App\Http\Controllers\TaskController@update');

Route::delete('/{id}', 'App\Http\Controllers\TaskController@delete');