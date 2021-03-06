<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::middleware('auth') /* se registrato */
->namespace('Admin') /* cartella di controller */
->prefix('home') /* URI */
->name('admin.') /* nome */
->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
    Route::get('contact', 'MailController@contact')->name('contact');
    Route::post('contact', 'MailController@sendMail')->name('sendContact');
    Route::get('sended', 'MailController@sended')->name('sendedContact');
});

Route::get('/{any}', 'Guest\HomeController@index')->where('any','.*');
