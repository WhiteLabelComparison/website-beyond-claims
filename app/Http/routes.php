<?php


$comingSoon = true;
$isLocal = $this->app->environment() == 'local' ? true : false;

// See if the website is in coming soon mode.
// If so, we just display a coming soon page.
if ($comingSoon && !$isLocal)
{
    // Catch all URLS and point them to the welcome page
    Route::any( '{catchall}', function ( $page ) {
        return view('welcome');
    } )->where('catchall', '(.*)');
} else {
    // Lets do the normal route finding

    Route::get('', 'StaticPageController@index');

    // Hide the about us page for now
    // Route::get('about-us', 'StaticPageController@about');

    Route::group(['prefix' => 'our-services'], function (Illuminate\Routing\Router $route) {
        $route->get('', 'StaticPageController@services');

        $route->get('pba', 'StaticPageController@servicesPba');
        $route->get('package-bank-accounts', 'StaticPageController@servicesPba');

        $route->get('ppi', 'StaticPageController@servicesPpi');
        $route->get('payment-protection-insurance', 'StaticPageController@servicesPpi');

        $route->get('ppi-redress', 'StaticPageController@servicesPpiRedress');
        $route->get('payment-protection-insurance-redress', 'StaticPageController@servicesPpiRedress');
    });

    Route::group(['prefix' => 'won-what-now'], function (Illuminate\Routing\Router $route) {
        $route->get('', 'StaticPageController@pay');
    });

    Route::get('contact-us', 'StaticPageController@contact');

}