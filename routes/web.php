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
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\ProductRevController;

use App\Http\Controllers\adminController;

Route::get('/', function () {
    $settings =  \App\SiteSetting::find(1);
    \Illuminate\Support\Facades\Session::put('site_settings',$settings);
    return view('homePage');
});

//G-mart
//Homepage
\Illuminate\support\Facades\Route::get('homepage',[homeController::class,'index'])->name('homepage');
//admin home
\Illuminate\support\Facades\Route::get('/adminHome',[adminController::class,'admin'])->name('adminHome');
\Illuminate\support\Facades\Route::get('/home',[homeController::class,'luck'])->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Auth::routes();


Route::get('/homepage', 'HomeController@index')->name('homepage');

//site setting routes
\Illuminate\Support\Facades\Route::get('/site_settng',[\App\Http\Controllers\SiteSettingController::class,'site'])->name('site.settings');
\Illuminate\Support\Facades\Route::post('/update_setting',[\App\Http\Controllers\SiteSettingController::class,'updateSettings'])->name('site.settings.update');


// productReview
Route::get('productReview','ProductRevController@rev')->name('review');