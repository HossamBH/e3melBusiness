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
Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard', 'as' => 'admin.', 'middleware' => ['auth:sanctum', 'verified']], function () {

    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::get('activation/{category}', 'CategoryController@activate')->name('categories.activation');
    Route::resource('categories', CategoryController::class)->except('show');
    Route::resource('courses', CourseController::class);

});
