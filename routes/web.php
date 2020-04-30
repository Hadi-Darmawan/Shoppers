<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
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



//Default Default
Route::get('/', function () {
    return view('welcome');
})->name('welcome');



//User Route
Route::get('/user/home', function () {
    return view('userHome');
})->name('userhome');

Route::get('/profileuser', 'UserController@getEditProfileUser')->name('profileuser')->middleware('auth:user');

Route::get('/registeruser', 'AuthUserController@getRegisterUser')->middleware('guest');
Route::post('/registeruser', 'AuthUserController@postRegisterUser')->name('registeruser')->middleware('guest');

Route::get('/loginuser', 'AuthUserController@getLoginUser')->middleware('guest');
Route::post('/loginuser', 'AuthUserController@postLoginUser')->name('loginuser')->middleware('guest');

Route::get('/logout/user', 'AuthUserController@logout')->name('logoutuser')->middleware('auth:user');



//Admin Route
Route::get('/admin/home', function () {
    return view('adminHome');
})->middleware('admin')->name('adminhome');

Route::get('/profileadmin', 'AdminController@getEditProfileAdmin')->name('profileadmin')->middleware('auth:admin');

Route::get('/registeradmin', 'AuthAdminController@getRegisterAdmin')->middleware('auth:admin');
Route::post('/registeradmin', 'AuthAdminController@postRegisterAdmin')->name('registeradmin')->middleware('auth:admin');

Route::get('/loginadmin', 'AuthAdminController@getLoginAdmin')->middleware('guest');
Route::post('/loginadmin', 'AuthAdminController@postLoginAdmin')->name('loginadmin')->middleware('guest');

Route::get('/logout/admin', 'AuthAdminController@logout')->name('logoutadmin')->middleware('auth:admin');



//Product Route
Route::get('/admin/product/addnew', function () {
    return view('addProduct');
})->middleware('auth:admin')->name('addproduct');



//Product Category Route
Route::get('admin/category', 'ProductCategoryController@index')->middleware('auth:admin')->name('addCategory');

Route::get('admin/category/{product_category}', 'ProductCategoryController@show')->middleware('auth:admin')->name('detailCategory');

Route::post('admin/category/addnew', 'ProductCategoryController@store')->middleware('auth:admin')->name('addNewCategory');

Route::delete('admin/category/{product_category}', 'ProductCategoryController@destroy')->middleware('auth:admin')->name('deleteCategory');

Route::patch('admin/category/{product_category}', 'ProductCategoryController@update')->middleware('auth:admin')->name('updateCategory');
