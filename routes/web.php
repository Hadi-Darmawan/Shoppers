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



//Default Route
Route::get('/', 'ProductUserController@index')->name('userhome');

Route::get('/profile/user', 'AuthUserController@getEditProfileUser')->name('profileuser')->middleware('auth:user');

Route::get('/registeruser', 'AuthUserController@getRegisterUser')->middleware('guest');
Route::post('/registeruser', 'AuthUserController@postRegisterUser')->name('registeruser')->middleware('guest');

Route::get('/loginuser', 'AuthUserController@getLoginUser')->middleware('guest');
Route::post('/loginuser', 'AuthUserController@postLoginUser')->name('loginuser')->middleware('guest');

Route::get('/logout/user', 'AuthUserController@logout')->name('logoutuser')->middleware('auth:user');



//Admin Route
Route::get('/admin/home', function () {
    return view('adminHome');
})->middleware('admin:admin')->name('adminhome');

Route::get('/profile/admin', 'AuthAdminController@getEditProfileAdmin')->name('profileadmin')->middleware('admin:admin');

Route::get('/registeradmin', 'AuthAdminController@getRegisterAdmin')->middleware('admin:admin');
Route::post('/registeradmin', 'AuthAdminController@postRegisterAdmin')->name('registeradmin')->middleware('admin:admin');

Route::get('/loginadmin', 'AuthAdminController@getLoginAdmin')->middleware('guest');
Route::post('/loginadmin', 'AuthAdminController@postLoginAdmin')->name('loginadmin')->middleware('guest');

Route::get('/logout/admin', 'AuthAdminController@logout')->name('logoutadmin')->middleware('admin:admin');



//Product Route
Route::get('admin/product', 'ProductAdminController@index')->middleware('admin:admin')->name('allProduct');

Route::get('admin/product/addnew', 'ProductAdminController@create')->middleware('admin:admin')->name('addProduct');

Route::post('admin/product/new', 'ProductAdminController@store')->middleware('admin:admin')->name('newProduct');

Route::get('admin/product/{product}', 'ProductAdminController@edit')->middleware('admin:admin')->name('detailProduct');

Route::delete('admin/product/delete/{product}', 'ProductAdminController@destroy')->middleware('admin:admin')->name('deleteProduct');

Route::patch('admin/product/update/{product}', 'ProductAdminController@update')->middleware('admin:admin')->name('updateProduct');

Route::get('admin/product/image/{product}', 'ProductAdminController@editImage')->middleware('admin:admin')->name('detailImage');

Route::delete('admin/product/image/delete/{image}', 'ProductAdminController@destroyImage')->middleware('admin:admin')->name('deleteImage');

Route::patch('admin/product/image/update/{product}', 'ProductAdminController@updateImage')->middleware('admin:admin')->name('updateImage');

Route::get('admin/product/discount/{product}', 'ProductAdminController@detailDiscount')->middleware('admin:admin')->name('detailDiscount');

Route::get('admin/product/discount/edit/{discount}', 'ProductAdminController@editDiscount')->middleware('admin:admin')->name('editDiscount');

Route::patch('admin/product/discount/update/{product}', 'ProductAdminController@updateDiscount')->middleware('admin:admin')->name('updateDiscount');

// Route::patch('admin/product/discount/update/{discount}', 'ProductAdminController@updateDiscount')->middleware('admin:admin')->name('updateDiscount');

// Route::get('/admin/product/addnew', function () {
//     return view('product/addProduct');
// })->middleware('auth:admin')->name('addProduct');



//Product Category Route
Route::get('admin/category', 'ProductCategoryController@index')->middleware('admin:admin')->name('addCategory');

Route::post('admin/category/addnew', 'ProductCategoryController@store')->middleware('admin:admin')->name('addNewCategory');

Route::get('admin/category/{product_category}', 'ProductCategoryController@edit')->middleware('admin:admin')->name('detailCategory');

Route::delete('admin/category/{product_category}', 'ProductCategoryController@destroy')->middleware('admin:admin')->name('deleteCategory');

Route::patch('admin/category/{product_category}', 'ProductCategoryController@update')->middleware('admin:admin')->name('updateCategory');


//Courier Route
Route::get('admin/courier', 'CourierController@index')->middleware('admin:admin')->name('addCourier');

Route::post('admin/courier/addnew', 'CourierController@store')->middleware('admin:admin')->name('addNewCourier');

Route::get('admin/courier/{courier}', 'CourierController@edit')->middleware('admin:admin')->name('detailCourier');

Route::delete('admin/courier/{courier}', 'CourierController@destroy')->middleware('admin:admin')->name('deleteCourier');

Route::patch('admin/courier/{courier}', 'CourierController@update')->middleware('admin:admin')->name('updateCourier');