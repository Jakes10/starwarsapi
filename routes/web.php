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
//Route::get('/welcome', function () {
//    return view('welcome');
//});

Route::get('/details/{id}', 'App\Http\Controllers\PeopleController@create');
Route::get('/home', 'App\Http\Controllers\PeopleController@index');


//Route::get('/details', 'App\Http\Controllers\PeopleController@create');

Route::get('/details', function () {
    return view('details');
});
Route::get('/', 'App\Http\Controllers\PeopleController@show');
