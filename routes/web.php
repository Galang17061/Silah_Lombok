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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('index');
})->name('index');

// Package
Route::get('/package_list', function () {
    return view('package_list');
})->name('package_list');

Route::get('/detail_package', function () {
    return view('detail_package');
})->name('detail_package');
// End Package

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
