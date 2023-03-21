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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','ContactController@welcome');
Route::post('Create','ContactController@Create');
Route::get ('welcome','ContactController@List');
Route::get('view/{id}','ContactController@view');
Route::get('edit/{id}','ContactController@edit');
Route::post('update','ContactController@update');
Route::get('delete/{id}','ContactController@delete');

