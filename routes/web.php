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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login.index');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::get('admin/users','UserController@index')->name('admin.users.index');

Route::post('impersonations','ImpersonationController@store')->name('impersonations.store');

Route::delete('impersonations','ImpersonationController@destroy')->name('impersonations.destroy');
