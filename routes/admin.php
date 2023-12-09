<?php
use Illuminate\Support\Facades\Route;

//GET - admin/crm/module
//POST - admin/crm/module - store
//PUT - admin/crm/module/{calendar} - update
//GET - admin/crm/module/{calendar} - show
//DELETE - admin/crm/module/{calendar} - destroy
//GET - admin/crm/module/{calendar}/edit - edit

Route::group([
    'namespace' => 'Admin', 'prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['auth', 'can:admin-panel']], function () {

    Route::get('/', function () {
        return redirect('admin/settings/seo');
    });

    Route::post('gallery/set', 'Gallery\IndexController@sort')->name('gallery.sort');
    Route::post('image/set', 'Gallery\ImageController@sort')->name('image.sort');
    Route::post('attraction/set', 'Attraction\IndexController@sort')->name('attraction.sort');

    Route::resources([
        'user' => 'User\IndexController',
        'role' => 'Role\IndexController',
        'gallery' => 'Gallery\IndexController',
        'image' => 'Gallery\ImageController',
        'greylist' => 'Greylist\IndexController',
        'article' => 'Article\IndexController',
        'page' => 'Page\IndexController',
        'url' => 'Url\IndexController',
        'file' => 'File\IndexController',
        'attraction' => 'Attraction\IndexController',
        'pricelist' => 'Pricelist\IndexController',
    ]);

    // Settings
    Route::group(['prefix'=>'/settings', 'as' => 'settings.'], function () {

        Route::resources([
            '/' => 'Dashboard\IndexController',
            'seo' => 'Dashboard\SeoController',
            'popup' => 'Dashboard\PopupController'
        ]);
    });

    Route::get('logs', 'Log\IndexController@index')->name('log.index');
    Route::get('logs/datatable', 'Log\IndexController@datatable')->name('log.datatable');
});

Route::get('{language}/{uri}', 'Front\MenuController@index')
    ->where('language', '[A-Za-z]{2}')
    ->where('uri', '[A-Za-z0-9\-\/]+')
    ->name('front.menu');
