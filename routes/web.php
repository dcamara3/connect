<?php

use Illuminate\Support\Facades\Route;

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

// we no longer need this after creating a controller !

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
// Route::get('/', 'HomeController@alt_index');
Route::post('/create', 'MessageController@create');
Route::get('/message/{id}', 'MessageController@view');

// Route::get('/about', function () {
//     echo "Hello World!";
// });

// Route::post('/about', function () {
// 	// post request logic
// });