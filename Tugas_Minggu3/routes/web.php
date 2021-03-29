<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/user', 'App\Http\Controllers\ManagementUserController@index');
// Route::resource('/create', 'App\Http\Controllers\ManagementUserController');
// Route::resource('/user/1/edit', 'App\Http\Controllers\ManagementUserController');
// Route::resource('/index', 'App\Http\Controllers\ManagementUserController');