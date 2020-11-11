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


Route::get('/companies', '\App\Http\Controllers\CompanyController@index');
Route::get('/companies/read', '\App\Http\Controllers\CompanyController@read');
Route::get('/companies/edit', '\App\Http\Controllers\CompanyController@edit');
Route::get('/companies/update', '\App\Http\Controllers\CompanyController@update');
Route::get('/companies/delete', '\App\Http\Controllers\CompanyController@delete');
Route::get('/companies/create', '\App\Http\Controllers\CompanyController@create');
Route::post('/companies/store', '\App\Http\Controllers\CompanyController@store');
