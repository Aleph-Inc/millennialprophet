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



Route::get('/about', 'PageController@about')
    ->template(\App\Nova\Templates\About::class)
    ->name('About');


Route::get('/home', 'PageController@home')
    ->template(\App\Nova\Templates\Home::class)
    ->name('Home');

Route::get('/resources', 'PageController@resources')
    ->template(\App\Nova\Templates\Resource::class)
    ->name('Resource');

Route::get('/resources/{id}','Backend\ResourceController@getResource');

Route::get('/blog','BlogController@all');

Route::get('/blog/{id}','BlogController@getEach');


Route::get('/empower-minitries', 'PageController@ministries')
    ->template(\App\Nova\Templates\Empower::class)
    ->name('Ministry');

Route::get('/events', 'PageController@events')
    ->template(\App\Nova\Templates\Event::class)
    ->name('Events');

Route::get('/testimonials', 'PageController@testimonials')
    ->template(\App\Nova\Templates\Testimonial::class)
    ->name('Testimonials');

Route::get('/testimonials/articles','Backend\TestimonialController@getArticles');

Route::get('/jesus', 'PageController@jesus')
    ->template(\App\Nova\Templates\Jesus::class)
    ->name('Jesus');

Route::get('/connect', 'PageController@connect')
    ->template(\App\Nova\Templates\Connect::class)
    ->name('Connect');

Route::get('/prayer_request', 'PageController@PrayerRequest')
    ->template(\App\Nova\Templates\PrayerRequest::class)
    ->name('PrayerRequest');

Route::get('/send_testimoney', 'PageController@SendTestimoney')
    ->template(\App\Nova\Templates\SendTestimoney::class)
    ->name('SendTestimoney');

Route::get('/donation', 'PageController@donation')
    ->template(\App\Nova\Templates\Donation::class)
    ->name('Donation');

Route::get('/build-chruch', 'PageController@BuildChruch')
    ->template(\App\Nova\Templates\BuildChruch::class)
    ->name('BuildChruch');

Route::get('/empower/free-website', 'PageController@FreeWebsite')
    ->template(\App\Nova\Templates\FreeWebsite::class)
    ->name('FreeWebsite');

Route::get('/empower/digital-training', 'PageController@DigitalTraining')
    ->template(\App\Nova\Templates\DigitalTraining::class)
    ->name('DigitalTraining');


Route::get('/partner', 'PageController@Partner')
    ->template(\App\Nova\Templates\Partner::class)
    ->name('DigitalTraining');

Route::get('/partner/monthly', 'PageController@Monthly')
    ->template(\App\Nova\Templates\Montly::class)
    ->name('Montly');

Route::get('/partner/one-time', 'PageController@Onetime')
    ->template(\App\Nova\Templates\Onetime::class)
    ->name('Onetime');

