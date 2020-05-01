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
// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');



// Home Route Aplikasi
Route::get('/', function () {
    return view('userhome');
})->name('userhome');

Route::get('/profile/user', 'UserController@getEditProfileUser')->name('profileuser')->middleware('auth:user');

Route::get('/registeruser', 'AuthUserController@getRegisterUser')->middleware('guest');
Route::post('/registeruser', 'AuthUserController@postRegisterUser')->name('registeruser')->middleware('guest');

Route::get('/loginuser', 'AuthUserController@getLoginUser')->middleware('guest');
Route::post('/loginuser', 'AuthUserController@postLoginUser')->name('loginuser')->middleware('guest');

Route::get('/logout/user', 'AuthUserController@logout')->name('logoutuser')->middleware('auth:user');



//Admin Route
Route::get('/admin/home', function () {
    return view('adminHome');
})->middleware('admin:admin')->name('adminhome');

Route::get('/profile/admin', 'AdminController@getEditProfileAdmin')->name('profileadmin')->middleware('admin:admin');

Route::get('/registeradmin', 'AuthAdminController@getRegisterAdmin')->middleware('admin:admin');
Route::post('/registeradmin', 'AuthAdminController@postRegisterAdmin')->name('registeradmin')->middleware('admin:admin');

Route::get('/loginadmin', 'AuthAdminController@getLoginAdmin')->middleware('guest');
Route::post('/loginadmin', 'AuthAdminController@postLoginAdmin')->name('loginadmin')->middleware('guest');

Route::get('/logout/admin', 'AuthAdminController@logout')->name('logoutadmin')->middleware('admin:admin');



//Product Route
Route::get('/admin/product/addnew', function () {
    return view('addProduct');
})->middleware('auth:admin')->name('addproduct');



//Product Category Route
Route::get('admin/category', 'ProductCategoryController@index')->middleware('admin:admin')->name('addCategory');

Route::get('admin/category/{product_category}', 'ProductCategoryController@show')->middleware('admin:admin')->name('detailCategory');

Route::post('admin/category/addnew', 'ProductCategoryController@store')->middleware('admin:admin')->name('addNewCategory');

Route::delete('admin/category/{product_category}', 'ProductCategoryController@destroy')->middleware('admin:admin')->name('deleteCategory');

Route::patch('admin/category/{product_category}', 'ProductCategoryController@update')->middleware('admin:admin')->name('updateCategory');
