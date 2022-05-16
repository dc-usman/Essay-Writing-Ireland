<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'Web' ], function() {

    // PagesController
    Route::get('/',             "PagesController@index")->name('home');
    Route::get('/about',        "PagesController@about")->name('about');
    Route::get('/reviews',      "PagesController@reviews")->name('reviews');
    // Route::get('/sitemap',      "PagesController@sitemap")->name('sitemap');
    Route::post('/get-fare',    "PagesController@getFare")->name('get.fare');
    Route::post('/order-query', "PagesController@orderQuery")->name('order.query');

    // ContactController
    Route::get('/contact-us',    "ContactController@create")->name('contact');
    Route::post('/contact-us',   "ContactController@store")->name('contact.store');

    // OrdersController
    Route::get('/order',         "OrdersController@create")->name('order');
    Route::post('/order',        "OrdersController@store")->name('order.store');

    // PoliciesController
    Route::get('/revision-policy',      "PoliciesController@revisionPolicy")->name('policy.revision');
    Route::get('/refund-policy',        "PoliciesController@refundPolicy")->name('policy.refund');
    Route::get('/terms-and-conditions', "PoliciesController@termsAndConditions")->name('policy.terms-and-conditions');
    // Route::get('/privacy-policy',       "PoliciesController@privacyPolicy")->name('policy.privacy-policy');

    // ServicesController
    // Route::get('/services',             "ServicesController@create")->name('services');
    // Route::get('/services/{slug}',      "ServicesController@show")->name('services.show');
});

Auth::routes([
    'register' => false
]);

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function(){

    Route::get('/', 'DashboardController@index')->name('home');

    //Contact lists
    Route::get('/contacts', 'ContactController@index')->name('contacts.index');
    Route::get('/contacts/{id}', 'ContactController@show')->name('contacts.show');

    //OrderQueries
    // Route::get('/order-queries', 'OrdersController@query')->name('order.query');
    // Route::get('/order-queries/{id}', 'OrdersController@queryShow')->name('order.query.show');

    //Orders
    Route::get('/orders', 'OrdersController@index')->name('orders.index');
    Route::get('/orders/{id}', 'OrdersController@show')->name('orders.show');
    Route::post('/orders/{id}/complete', 'OrdersController@complete')->name('orders.complete');

    //Category
    Route::resource('categories', 'CategoryController');

    //Tags
    Route::resource('tags', 'TagsController');

    //Services
    Route::post('services/slug', 'ServicesController@getSlug')->name('services.getSlug');
    Route::resource('services', 'ServicesController');

    //Blogs
    Route::post('blogs/slug', 'BlogsController@getSlug')->name('blogs.getSlug');
    Route::resource('blogs', 'BlogsController');

    //Fare
    Route::resource('fare', 'FareController');

    //Web Setting
    Route::resource('web-setting', 'WebSettingController', ['only' => ['index', 'edit', 'update']]);

    //Change Password
    Route::get('/change-password', 'ProfileController@changePassword')->name('change.password');
    Route::post('/change-password', 'ProfileController@changePasswordUpdate')->name('change.password.update');
});
