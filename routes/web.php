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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Main User
Route::get('/master/user', 'admin\master\userController@user')->name('user');
Route::get('/master/user/create', 'admin\master\userController@user_create')->name('user_create');
Route::post('/master/user/save', 'admin\master\userController@user_save')->name('user_save');
Route::get('/master/user/edit', 'admin\master\userController@user_edit')->name('user_edit');
Route::post('/master/user/update', 'admin\master\userController@user_update')->name('user_update');
Route::get('/master/user/delete', 'admin\master\userController@user_delete')->name('user_delete');
// Route::get('/master/user/datatable', 'admin\master\userController@user_datatable')->name('user_datatable');

// Category Tour
Route::get('/master/category_tour', 'admin\master\category_tour\category_tourController@category_tour')->name('category_tour');
Route::get('/master/category_tour/create', 'admin\master\category_tour\category_tourController@category_tour_create')->name('category_tour_create');
Route::get('/master/category_tour/edit', 'admin\master\category_tour\category_tourController@category_tour_edit')->name('category_tour_edit');
Route::post('/master/category_tour/save', 'admin\master\category_tour\category_tourController@category_tour_save')->name('category_tour_save');
Route::post('/master/category_tour/update', 'admin\master\category_tour\category_tourController@category_tour_update')->name('category_tour_update');
Route::get('/master/category_tour/delete', 'admin\master\category_tour\category_tourController@category_tour_delete')->name('category_tour_delete');
Route::get('/master/category_tour/datatable', 'admin\master\category_tour\category_tourController@category_tour_datatable')->name('category_tour_datatable');
Route::get('/master/tes','admin\master\category_tour\category_tourController@tes')->name('tes');

// Package Detail
Route::get('/main/package', 'admin\main\package\packageController@package')->name('package');
Route::get('/main/package/create', 'admin\main\package\packageController@package_create')->name('package_create');
Route::post('/main/package/save', 'admin\main\package\packageController@package_save')->name('package_save');
Route::get('/main/package/edit', 'admin\main\package\packageController@package_edit')->name('package_edit');
Route::post('/main/package/update', 'admin\main\package\packageController@package_update')->name('package_update');
Route::get('/main/package/delete', 'admin\main\package\packageController@package_delete')->name('package_delete');
Route::get('/main/package/datatable', 'admin\main\package\packageController@package_datatable')->name('package_datatable');

// Category Package
Route::get('/master/category_package', 'admin\master\category_package\category_packageController@category_package')->name('category_package');
Route::get('/master/category_package/create', 'admin\master\category_package\category_packageController@category_package_create')->name('category_package_create');
Route::get('/master/category_package/edit/{id}', 'admin\master\category_package\category_packageController@category_package_edit')->name('category_package_edit/{id}');
Route::get('/master/category_package/edit', 'admin\master\category_package\category_packageController@category_package_edit')->name('category_package_edit');
Route::post('/master/category_package/save', 'admin\master\category_package\category_packageController@category_package_save')->name('category_package_save');
Route::post('/master/category_package/update', 'admin\master\category_package\category_packageController@category_package_update')->name('category_package_update');
Route::get('/master/category_package/delete', 'admin\master\category_package\category_packageController@category_package_delete')->name('category_package_delete');

// Adding route
Route::get('/master/category_package/datatable', 'admin\master\category_package\category_packageController@category_package_datatable')->name('category_package_datatable');


// Package list
Route::get('/master/package_list', 'frontend\package\package_listController@package_list')->name('package_list');

// Detail Package
Route::get('/master/package_detail', 'frontend\package\package_detailController@package_detail')->name('package_detail');