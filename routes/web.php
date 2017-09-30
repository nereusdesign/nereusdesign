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

Auth::routes();
/*
/Auto Create Routes by Auth
// Authentication Routes...
/$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
/$this->post('login', 'Auth\LoginController@login');
/$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
/$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
/$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
/$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
/$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
/$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
/$this->post('password/reset', 'Auth\ResetPasswordController@reset');
*/

Route::any('/', ['uses' =>'BasicController@index'])->name('index');
Route::any('/serices-offered', ['uses' =>'BasicController@services'])->name('services');
Route::get('/contact-us', ['uses' =>'BasicController@contact'])->name('contact');
Route::post('/contact-us', ['uses' =>'BasicController@processContact'])->name('contact');
Route::get('/request-free-estimate', ['uses' =>'BasicController@estimate'])->name('request-estimate');
Route::post('/request-free-estimate', ['uses' =>'BasicController@processEstimate'])->name('request-estimate');
