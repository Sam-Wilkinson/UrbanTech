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

Route::get('/' , 'FrontController@welcome')->name('welcome');

Route::get('/job/{job}' , 'FrontController@job')->name('job');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/jobs', 'JobController')->middleware('auth');

Route::resource('/admin/categories','CategoryController')->middleware('auth');

Route::resource('/admin/texts', 'TextController')->middleware('auth');
