<?php

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



use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\adminController;



Route::get('/', function () {
    return view('welcome');
});

//G-mart 
//Homepage
\Illuminate\support\Facades\Route::get('homepage',[homeController::class,'index'])->name('homepage');
//admin home
\Illuminate\support\Facades\Route::get('adminHome',[adminController::class,'admin'])->name('adminHome');
\Illuminate\support\Facades\Route::get('home',[homeController::class,'luck'])->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'LoginController@logout')->name('logout');

Auth::routes();


Route::get('/homepage', 'HomeController@index')->name('homepage');
