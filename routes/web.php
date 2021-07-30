<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/users/add', 'App\Http\Controllers\UsersController@add');
Route::post('/users/add', 'App\Http\Controllers\UsersController@add');

Route::get('/clients/add', 'App\Http\Controllers\ClientsController@add');
Route::post('/clients/add', 'App\Http\Controllers\ClientsController@add');

// Route::get('/users/add', UsersController::class, 'add');
