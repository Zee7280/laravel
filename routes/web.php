<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SupplierController;



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

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\CategoryController::class, 'getCategory'])->name('/');

   Route::match(['get', 'post'], '/search-category', 'CategoryController@searchData')->name('search-category');

//Route::post('/search-category', 'CategoryController@searchData')->name('search-category');

Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/safety-forms', function () {
    return view('safety_form');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/tickets', function () {
    return view('ticket');
});
Route::get('/personal-protection', function () {
    return view('personal_protection');
});
Route::get('/submit-request', function () {
    return view('request');
});

Route::get('/lockout', function () {
    return view('lockout');
});
Route::get('/remote-solution', function () {
    return view('remote_solution');
});
Route::get('/mining', function () {
    return view('mining');
});
Auth::routes();

Route::get('/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/all-ticket', [App\Http\Controllers\UploadController::class, 'getticket'])->name('all-ticket');
    Route::get('/user',  [App\Http\Controllers\CategoryController::class, 'getuser'])->name('user');
    Route::get('/edit-user/{id?}',  [App\Http\Controllers\CategoryController::class, 'edituser'])->name('user');

   
    Route::get('/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/store-category', [App\Http\Controllers\CategoryController::class, 'create'])->name('store-category');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');

Route::get('/store-supplier', [App\Http\Controllers\SupplierController::class, 'create'])->name('store-supplier');
Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('category');

Route::get('/upload', [App\Http\Controllers\UploadController::class, 'index'])->name('upload');
Route::post('/store-dynamic-data', [App\Http\Controllers\UploadController::class, 'data_upload'])->name('store-dynamic-data');


Route::get('/product', [App\Http\Controllers\UploadController::class, 'getProduct'])->name('product');

});