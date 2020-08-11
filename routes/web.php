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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Workshops page
Route::resource('workshops', 'WorkshopController');

// admin page
Route::resource('admin', 'AdminController');

// info page
Route::resource('info', 'InfoController');

// contact page
Route::resource('contact', 'ContactController');

// Booking page
Route::resource('booking', 'BookingController');

// Contact form
// Render in view
Route::get('/contactinfo', [
    'uses' => 'ContactUsFormController@createForm'
]);

// Post form data
Route::post('/contactinfo', [
    'uses' => 'ContactUsFormController@ContactUsForm',
    'as' => 'contact.store'
]);
//// email
//Route::get('/send-email',function(){
//    $details = [
//        'title' => 'Mail from t ussien',
//        'body'=> 'Dit is een test email'
//    ];
//    \Mail::to('testnapel1@gmail.com')->send(new \App\Mail\TestMail($details));
//    echo "Email has been sent";
//});
