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
Route::post('/master/user/edit', 'admin\master\userController@user_edit')->name('user_edit');
Route::post('/master/user/update', 'admin\master\userController@user_update')->name('user_update');
Route::get('/master/user/delete', 'admin\master\userController@user_delete')->name('user_delete');
Route::get('/master/user/datatable', 'admin\master\userController@user_datatable')->name('user_datatable');

// Package Detail
Route::get('/main/package_detail', 'admin\main\package_detail\package_detailController@package_detail')->name('package_detail');
Route::get('/main/package_detail_create', 'admin\main\package_detail\package_detailController@package_detail_create')->name('package_detail_create');
Route::post('/main/package_detail/save', 'admin\main\package_detail\package_detailController@package_detail_save')->name('package_detail_save');
Route::post('/main/package_detail/update', 'admin\main\package_detail\package_detailController@package_detail_update')->name('package_detail_update');
Route::get('/main/package_detail/delete', 'admin\main\package_detail\package_detailController@package_detail_delete')->name('package_detail_delete');
Route::get('/main/package_detail/datatable', 'admin\main\package_detail\package_detailController@package_detail_datatable')->name('package_detail_datatable');

// Package Image
Route::get('/main/package_image', 'admin\main\package_image\package_imageController@package_image')->name('package_image');
Route::get('/main/package_image_create', 'admin\main\package_image\package_imageController@package_image_create')->name('package_image_create');
Route::post('/main/package_image/save', 'admin\main\package_image\package_imageController@package_image_save')->name('package_image_save');
Route::post('/main/package_image/update', 'admin\main\package_image\package_imageController@package_image_update')->name('package_image_update');
Route::get('/main/package_image/delete', 'admin\main\package_image\package_imageController@package_image_delete')->name('package_image_delete');
Route::get('/main/package_image/datatable', 'admin\main\package_image\package_imageController@package_image_datatable')->name('package_image_datatable');

// Package Rundown
Route::get('/main/package_rundown', 'admin\main\package_rundown\package_rundownController@package_rundown')->name('package_rundown');
Route::get('/main/package_rundown_create', 'admin\main\package_rundown\package_rundownController@package_rundown_create')->name('package_rundown_create');
Route::post('/main/package_rundown/save', 'admin\main\package_rundown\package_rundownController@package_rundown_save')->name('package_rundown_save');
Route::post('/main/package_rundown/update', 'admin\main\package_rundown\package_rundownController@package_rundown_update')->name('package_rundown_update');
Route::get('/main/package_rundown/delete', 'admin\main\package_rundown\package_rundownController@package_rundown_delete')->name('package_rundown_delete');
Route::get('/main/package_rundown/datatable', 'admin\main\package_rundown\package_rundownController@package_rundown_datatable')->name('package_rundown_datatable');

// Package Rundown Detail
Route::get('/main/package_rundown_detail', 'admin\main\package_rundown_detail\package_rundown_detailController@package_rundown_detail')->name('package_rundown_detail');
Route::get('/main/package_rundown_detail_create', 'admin\main\package_rundown_detail\package_rundown_detailController@package_rundown_detail_create')->name('package_rundown_detail_create');
Route::post('/main/package_rundown_detail/save', 'admin\main\package_rundown_detail\package_rundown_detailController@package_rundown_detail_save')->name('package_rundown_detail_save');
Route::post('/main/package_rundown_detail/update', 'admin\main\package_rundown_detail\package_rundown_detailController@package_rundown_detail_update')->name('package_rundown_detail_update');
Route::get('/main/package_rundown_detail/delete', 'admin\main\package_rundown_detail\package_rundown_detailController@package_rundown_detail_delete')->name('package_rundown_detail_delete');
Route::get('/main/package_rundown_detail/datatable', 'admin\main\package_rundown_detail\package_rundown_detailController@package_rundown_detail_datatable')->name('package_rundown_detail_datatable');

// Category Package
Route::get('/master/category_package', 'admin\master\category_package\category_packageController@category_package')->name('category_package');
Route::get('/master/category_package/create', 'admin\master\category_package\category_packageController@category_package_create')->name('category_package_create');
Route::get('/master/category_package/edit/{id}', 'admin\master\category_package\category_packageController@category_package_edit')->name('category_package_edit/{id}');
Route::get('/tes','admin\master\category_package\category_packageController@tes')->name('tes');
// Route::get('/master/category_package/delete/{id}', 'admin\master\category_package\category_packageController@category_package_delete')->name('category_package_delete/{id}');
// Route::get('test/{tes}','admin\master\category_package\category_packageController@test');
Route::post('/master/category_package/save', 'admin\master\category_package\category_packageController@category_package_save')->name('category_package_save');
Route::post('/master/category_package/update', 'admin\master\category_package\category_packageController@category_package_update')->name('category_package_update');
Route::get('/master/category_package/delete', 'admin\master\category_package\category_packageController@category_package_delete')->name('category_package_delete');
Route::get('/master/category_package/datatable', 'admin\master\category_package\category_packageController@category_package_datatable')->name('category_package_datatable');

// Category Tour
Route::get('/master/category_tour', 'admin\master\category_tour\category_tourController@category_tour')->name('category_tour');
Route::get('/master/category_tour/create', 'admin\master\category_tour\category_tourController@category_tour_create')->name('category_tour_create');
Route::post('/master/category_tour/save', 'admin\master\category_tour\category_tourController@category_tour_save')->name('category_tour_save');
Route::post('/master/category_tour/update', 'admin\master\category_tour\category_tourController@category_tour_update')->name('category_tour_update');
Route::get('/master/category_tour/delete', 'admin\master\category_tour\category_tourController@category_tour_delete')->name('category_tour_delete');
Route::get('/master/category_tour/datatable', 'admin\master\category_tour\category_tourController@category_tour_datatable')->name('category_tour_datatable');

// Main Package list
Route::get('/master/package_list', 'admin\master\package_list\package_listController@package_list')->name('package_list');
Route::get('/master/package_list/create', 'admin\master\package_list\package_listController@package_list_create')->name('package_list_create');
Route::post('/master/package_list/save', 'admin\master\package_list\package_listController@package_list_save')->name('package_list_save');
Route::post('/master/package_list/update', 'admin\master\package_list\package_listController@package_list_update')->name('package_list_update');
Route::get('/master/package_list/delete', 'admin\master\package_list\package_listController@package_list_delete')->name('package_list_delete');
Route::get('/master/package_list/datatable', 'admin\master\package_list\package_listController@package_list_datatable')->name('package_list_datatable');
