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

// Login
Route::get('/login', 'Auth/LoginController@index')->name('login_index');
Route::get('/login_proses', 'Auth\LoginController@login')->name('login');
Route::get('/register', 'Auth/RegisterController@index')->name('register');

// Package
Route::get('/package_list', function () {
    return view('frontend/package_list/package_list');
})->name('package_list');

Route::get('/detail_package', function () {
    return view('frontend/detail_package/detail_package');
})->name('detail_package');
// End Package

// Package Detail (Sementara)
Route::get('/package_detail',function(){
    return view('main.package_detail.package_detail');
})->name('package_detail');

// Package image (Sementara)
Route::get('/package_image',function(){
    return view('main.package_image.package_image');
})->name('package_image');

// Package rundown (Sementara)
Route::get('/package_rundown',function(){
    return view('main.package_rundown.package_rundown');
})->name('package_rundown');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Main User
Route::get('/master/user', 'admin\master\userController@user')->name('user');
Route::get('/master/user/create', 'admin\master\userController@user_create')->name('user_create');
Route::post('/master/user/save', 'admin\master\userController@user_save')->name('user_save');
Route::post('/master/user/edit', 'admin\master\userController@user_edit')->name('user_edit');
Route::post('/master/user/update', 'admin\master\userController@user_update')->name('user_update');
Route::get('/master/user/delete', 'admin\master\userController@user_delete')->name('user_delete');
Route::get('/master/user/datatable', 'admin\master\userController@user_datatable')->name('user_datatable');

// ================================== ADMIN ==================================

// ================================== MAIN ===================================

// Main Package Detail
Route::get('/main/package_detail', 'admin\main\package_detail\main_package_detailController@main_package_detail')->name('main_package_detail');
Route::post('/main/package_detail/save', 'admin\main\package_detail\main_package_detailController@main_package_detail_save')->name('main_package_detail_save');
Route::post('/main/package_detail/update', 'admin\main\package_detail\main_package_detailController@main_package_detail_update')->name('main_package_detail_update');
Route::get('/main/package_detail/delete', 'admin\main\package_detail\main_package_detailController@main_package_detail_delete')->name('main_package_detail_delete');
Route::get('/main/package_detail/datatable', 'admin\main\package_detail\main_package_detailController@main_package_detail_datatable')->name('main_package_detail_datatable');

// ================================ END MAIN =================================

// ================================== MASTER ===================================

// ================================ END MASTER =================================
