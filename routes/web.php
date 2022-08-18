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
use App\Http\Controllers\categoryController;
use App\Http\Controllers\aboutController;

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
Route::post('update_setting','SiteSettingController@updateSettings')->name('site.settings.update');

// productReview
Route::get('productReview','ProductRevController@rev')->name('review');
// add product
Route::get('addprocduct','productController@add')->name('add');
// category
Route::get('category','categoryController@catv')->name('category');
//admin add brand
Route::get('addbrand', 'addbrand@brand')->name('brand');
//admin category
Route::get('addcat', 'catCont@addcat')->name('cat');
// about page
Route::get('about', 'aboutController@aboutView')->name('about');
// contact page
Route::get('contact', 'contactController@contact')->name('contact');
// coming soon page
Route::get('coming', 'comingSoonController@soon')->name('coming');
