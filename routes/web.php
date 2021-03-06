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

Route::group(['middleware' => ['auth']], function() {
        
        Route::get('/','UserController@dashboard')->name('dashboard');
        Route::resource('/contact','ContactController');
        Route::resource('/user','UserController');
        Route::post('import-contact-to-excel', 'ExcelController@importContact')->name('contact.import');
});



Route::get('/password-update-form/{id}', 'UserController@showUpdatePasswordForm')->name('showPasswordForm');
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::post('login','Auth\LoginController@login');