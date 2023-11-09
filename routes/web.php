<?php

use App\Models\User;
use App\Notifications\AdminEmailNotification;
use App\Notifications\PasswordResetNotification;
use App\Notifications\UserEmailNotification;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('routes', function() {
    \Artisan::call('route:list');
    return '<pre>' . \Artisan::output() . '</pre>';
});

Route::group(['namespace' => 'Front'], function () {
    Route::get('/', 'IndexController@index')->name('index');

    // Contact page
    Route::get('/pl/kontakt', 'ContactController@index')->name('contact');
    Route::post('/pl/kontakt', 'ContactController@form')->name('contact.form');
});