<?php

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

Route::resource('users' , 'UserController');

Route::get('/homeprofile', 'HomeController@profile')->name('profile');

Route::get('/comments/{application_id}', 'CommentController@store')->name('comments_store');

Route::resource('comments', 'CommentController');