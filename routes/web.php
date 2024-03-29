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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This is test github
|
*/

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/about', 'TestController@about')->name('about');
Route::get('/product', 'TestController@product')->name('product');
Route::get('/testhome', 'HomeController@test')->name('testhome');
Route::get('/dashboard', 'AccountsTestController@dashboard')->name('dashboard'); -- Test


Route::get('/admin/accounts', 'AccountsController@reimbursement')->name('reimbursement');
Route::get('/admin/accounts', 'AccountsController@reimbursement')->name('reimbursement');

Route::resource('/admin/categories', 'CategoriesController');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This is test github
|
*/