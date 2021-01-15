<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ApiController@index');
Route::get('d/{id}', 'App\Http\Controllers\ApiController@d');
Route::get('delete/{id}', 'App\Http\Controllers\ApiController@delete');
Route::post('update/{id}', 'App\Http\Controllers\ApiController@update');
Route::get('new', 'App\Http\Controllers\ApiController@new');
Route::post('create', 'App\Http\Controllers\ApiController@create');