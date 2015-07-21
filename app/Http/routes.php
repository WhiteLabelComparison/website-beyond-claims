<?php


Route::get('', 'StaticPageController@index');

// Hide the about us page for now
// Route::get('about-us', 'StaticPageController@about');

Route::group(['prefix' => 'our-services'], function(Illuminate\Routing\Router $route) {
    $route->get('', 'StaticPageController@services');

    $route->get('pba', 'StaticPageController@servicesPba');
    $route->get('package-bank-accounts', 'StaticPageController@servicesPba');

    $route->get('ppi', 'StaticPageController@servicesPpi');
    $route->get('payment-protection-insurance', 'StaticPageController@servicesPpi');

    $route->get('ppi-redress', 'StaticPageController@servicesPpiRedress');
    $route->get('payment-protection-insurance-redress', 'StaticPageController@servicesPpiRedress');
});

Route::group(['prefix' => 'won-what-now'], function(Illuminate\Routing\Router $route) {
    $route->get('', 'StaticPageController@pay');
});

Route::get('contact-us', 'StaticPageController@contact');
