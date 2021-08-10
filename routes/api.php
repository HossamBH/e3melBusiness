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

Route::group(['namespace' => 'Api'], function ($router) {

    // Auth
    Route::group(['prefix' => 'auth'], function ($router) {
        Route::post('login', 'AuthController@login');
        Route::post('register', 'AuthController@register');
    });

    //App Apis
    Route::group(['middleware' => ['auth:clientApi']], function ($router) {

        //Get courses
        Route::get('categories', 'MainController@getCategories');

        //Get courses
        Route::get('courses', 'MainController@getCourses');

        //Get courses of specific category
        Route::get('courses/{category}', 'MainController@getCoursesOfCategory');
    });
});
