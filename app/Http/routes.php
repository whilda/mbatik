<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'DashboardController@overview');
    Route::get('/transaction', 'DashboardController@transaction');
    
    Route::get('/vendor', 'VendorController@GetView');
    Route::post('/vendor', 'VendorController@Save');
    
    Route::get('/item', 'ItemController@GetView');
    Route::post('/item', 'ItemController@Save');
});
