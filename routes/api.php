<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('students', 'ApplicationApiController@getAllApplications');
//Route::get('students/{id}', 'ApplicationApiController@getApplication');
//Route::post('students', 'ApplicationApiController@createApplication');
//Route::put('students/{id}', 'ApplicationApiController@updateApplication');
//Route::delete('students/{id}','ApplicationApiController@deleteApplication');

// Route::resource('applications' , 'ApplicationApiController');

// Route::get('students', 'ApiController@getAllStudents');
// Route::get('students/{id}', 'ApiController@getStudent');
// Route::post('students', 'ApiController@createStudent');
// Route::put('students/{id}', 'ApiController@updateStudent');
// Route::delete('students/{id}','ApiController@deleteStudent');