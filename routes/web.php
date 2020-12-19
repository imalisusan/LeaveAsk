<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('applications' , 'ApplicationController');

Route::get('/admin_applications' , 'ApplicationController@admin_index')->name('admin_applications');

Route::get('/approve/{id}' , 'ApplicationController@approve')->name('approve');

Route::get('/decline/{id}' , 'ApplicationController@decline')->name('decline');

Route::resource('users' , 'UserController');

Route::get('/homeprofile', 'HomeController@profile')->name('profile');

Route::get('/comments/{application_id}', 'CommentController@store')->name('comments_store');

Route::resource('comments', 'CommentController');

Route::resource('departments', 'DepartmentController');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('/search', 'HomeController@search')->name('search');