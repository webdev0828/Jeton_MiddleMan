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

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'JetonController@index')->name('index');
Route::get('/home', 'JetonController@home')->name('name');
Route::post('/add', 'JetonController@add')->name('add');
Route::get('/delete/{id}', 'JetonController@delete')->name('delete');
