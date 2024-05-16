<?php

use App\Http\Controllers\UserController;
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

Route::get('/login',function(){
    return view('login');
});

Route::post('/','App\Http\Controllers\TaskController@store');

Route::patch('/{id}', 'App\Http\Controllers\TaskController@update');

Route::delete('/{id}', 'App\Http\Controllers\TaskController@delete');

Route::get('/history', 'App\Http\Controllers\TaskController@history');


//User Route
Route::get('/user/list', [UserController::class, 'index'])->name('userlist');
