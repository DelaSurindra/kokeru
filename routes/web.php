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

// Route::get('/dashboard', [App\Http\Controllers\CSController::class, 'index'])->name('home');
Auth::routes();

// Route::get('/dashboard', 'App\Http\Controllers\CSController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::get('{cs}', ['as' => 'cs.index', 'uses' => 'App\Http\Controllers\CSController@index']);
});

Route::get('manager/login', 'App\Http\Controllers\Auth\ManagerAuthController@getLogin')->name('manager.login');
Route::post('manager/login', 'App\Http\Controllers\Auth\ManagerAuthController@postLogin');
Route::middleware('auth:manager')->group(function(){
	Route::get('manager/{manager}', ['as' => 'manager.index', 'uses' => 'App\Http\Controllers\ManagerController@index']);
  });