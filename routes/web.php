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

    // Gallery
    Route::get('/pl/galeria/{slug}', 'GalleryController@show')->name('gallery.show');
    Route::get('/pl/galeria', 'GalleryController@index')->name('gallery');

    // Restaurant
    Route::get('/pl/restauracja', 'RestaurantController@index')->name('restaurant');

    // Reservation
    Route::get('/pl/rezerwacja', 'ReservationController@index')->name('reservation');

    // Pool
    Route::get('/pl/basen', 'PoolController@index')->name('pool');

    // Gallery
    Route::get('/pl/galeria', 'GalleryController@index')->name('gallery');

    // Price list
    Route::get('/pl/cennik', 'PricelistController@index')->name('pricelist');

    // Houses
    Route::get('/pl/domki', 'HousesController@index')->name('houses');

    // Rooms
    Route::get('/pl/pokoje', 'RoomsController@index')->name('rooms');

    // Breakfast
    Route::get('/pl/sniadania', 'BreakfastController@index')->name('breakfast');

    // Regional attractions
    Route::get('/pl/atrakcje-regionalne', 'AttractionController@index')->name('attraction');
    Route::get('/pl/atrakcje-regionalne/{id}', 'AttractionController@show')->name('attraction.show');

    // Contact page
    Route::get('/pl/kontakt', 'ContactController@index')->name('contact');
    Route::post('/pl/kontakt', 'ContactController@form')->name('contact.form');
});