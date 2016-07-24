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

    Route::get('/test', 'ItemController@run');
    
    Route::get('/', 'DashboardController@overview');
    
    Route::get('/api/asset', 'DashboardController@api_asset');
    Route::get('/api/item', 'DashboardController@api_item');
    Route::get('/api/vendor', 'DashboardController@api_vendor');
    Route::get('/api/type', 'DashboardController@api_type');
    Route::get('/api/material', 'DashboardController@api_material');
    
    Route::get('/vendor', 'VendorController@GetView');
    Route::post('/vendor', 'VendorController@Save');
    
    Route::get('/type', 'TypeController@GetView');
    Route::post('/type', 'TypeController@Save');
    
    Route::get('/material', 'MaterialController@GetView');
    Route::post('/material', 'MaterialController@Save');
    
    Route::get('/item', 'ItemController@GetView');
    Route::post('/item', 'ItemController@Save');
    
    Route::get('/stock', 'ItemController@GetStockView');
    Route::post('/stock', 'ItemController@SaveStock');
    
    Route::get('/transaction', 'ItemController@GetTransactionView');
    Route::post('/transaction', 'ItemController@SaveTransaction');
    
    Route::get('/item/{id}', 'ItemController@GetItem');
});
