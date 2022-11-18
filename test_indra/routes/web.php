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


Route::get('/register', 'RegisterController@index')->name('register.index');
Route::post('/register', 'RegisterController@store')->name('register.store');
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@check_login')->name('login.check_login');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index')->middleware('auth');
Route::get('/list', 'DashboardController@list')->name('dashboard.list')->middleware('auth');

Route::resource('blog', BlogController::class)->middleware('auth');


Route::get('/account', 'DashboardController@account')->name('dashboard.account')->middleware('auth');
Route::get('/logout', 'DashboardController@logout')->name('dashboard.logout');
