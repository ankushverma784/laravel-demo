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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('admin', function () {
    return view('auth/login');
});

Route::get('about', function () {
    return view('home/about');
});

Route::get('index', 'HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('blog', 'HomeController@blog');
Route::get('blogdetail', 'HomeController@blogdetail');
Route::get('contact', 'HomeController@contact');
Route::get('hotel', 'HomeController@hotel');
Route::get('hoteldetail', 'HomeController@hoteldetail');
Route::get('tour', 'HomeController@tour');




Route::resource('products', ProductController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('welcome');
})->name('welcome');





  



