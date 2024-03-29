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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/admin', 'HomeController@index')->name('admin');


Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin', function(){
        return view('admin.index');
    });
});

Route::resource('admin/users', 'AdminUsersController');
Route::resource('/admin/posts', 'AdminPostsController');
Route::resource('/admin/categories', 'AdminCategoriesController');
