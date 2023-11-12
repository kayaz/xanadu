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

    // About
    Route::get('/pl/o-nas', 'AboutController@index')->name('about');

    // Location
    Route::get('/pl/lokalizacja', 'LocationController@index')->name('location');

    // Animals
    Route::get('/pl/zwierzeta-w-resorcie', 'AnimalsController@index')->name('animals');

    // Restaurant
    Route::get('/pl/restauracja', 'RestaurantController@index')->name('restaurant');

    // Contact page
    Route::get('/pl/kontakt', 'ContactController@index')->name('contact');
    Route::post('/pl/kontakt', 'ContactController@form')->name('contact.form');
});