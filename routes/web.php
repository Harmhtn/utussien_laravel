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

Route::get('/home', 'HomeController@index')->name('home');
// admin page
Route::resource('admin', 'AdminController');

// info page
Route::resource('info', 'InfoController');

// contact page
Route::resource('contact', 'ContactController');

// Booking page
Route::resource('booking', 'BookingController');
