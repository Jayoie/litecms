<?php

// Admin routes  for block
Route::group(['prefix' => trans_setlocale().'api/v1/admin/blocks'], function () {
    Route::resource('block', 'Litepie\Blocks\Http\Controllers\BlockAdminApiController');
});

// User routes for block
Route::group(['prefix' => trans_setlocale().'api/v1/user/blocks'], function () {
    Route::resource('block', 'Litepie\Blocks\Http\Controllers\BlockUserApiController');
});

// Public routes for block
Route::group(['prefix' => trans_setlocale().'api/v1/blocks'], function () {
    Route::get('/', 'BlockPublicApiController@index');
    Route::get('/{slug?}', 'BlockPublicApiController@show');
});

// Admin API routes  for category
Route::group(['prefix' => trans_setlocale() . 'api/v1/admin/block'], function () {
    Route::resource('category', 'CategoryAdminApiController');
});

// User API routes for category
Route::group(['prefix' => trans_setlocale() . 'api/v1/user/block'], function () {
    Route::resource('category', 'CategoryUserApiController');
});

// Public API routes for category
Route::group(['prefix' => trans_setlocale() . 'api/v1/blocks'], function () {
    Route::get('/', 'CategoryApiController@index');
    Route::get('/{slug?}', 'CategoryApiController@show');
});