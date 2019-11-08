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
Route::get('/send/email', 'PageController@mail');

Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

Route::get('/about', 'PageController@about')->name('About');

Route::get('/home', 'PageController@home')->name('Home');

Route::get('/resources', 'PageController@resources')->name('Resource');

Route::get('/resources/{id}','Backend\ResourceController@getResource');

Route::get('/blog','BlogController@all');

Route::get('/connect/inquiries','PageController@inquires');

Route::get('/confess','PageController@confess');

Route::post('/send-mail', 'PageController@sendMail')->name('send-mail');

Route::get('/blog/{id}','BlogController@getEach');

Route::get('/empower', 'PageController@ministries')->name('Ministry');

Route::get('/events', 'PageController@events')->name('Events');

Route::get('/events/new','PageController@eventsNew');

Route::get('/events/past','PageController@eventsPast');

Route::get('/testimonies', 'PageController@testimonials')->name('Testimonies');

Route::get('/testimonials/articles','Backend\TestimonialController@getArticles');

Route::get('/testimonials/videos','Backend\TestimonialController@getVideos');

Route::get('/jesus', 'PageController@jesus')->name('Jesus');

Route::get('/connect', 'PageController@connect')->name('Connect');

Route::get('/connect/prayer', 'PageController@PrayerRequest')->name('PrayerRequest');

Route::get('/connect/testimonies', 'PageController@SendTestimoney')->name('SendTestimoney');

Route::get('/give', 'PageController@donation')->name('Donation');

Route::get('/build-chruch', 'PageController@BuildChruch')->name('BuildChruch');

Route::get('/empower/free-websites', 'PageController@FreeWebsite')->name('FreeWebsite');

Route::get('/empower/digital-training', 'PageController@DigitalTraining')->name('DigitalTraining');

Route::get('/partner', 'PageController@Partner')->name('Partner');

Route::get('/partner/monthly', 'PageController@Monthly')->name('Montly');

Route::get('/partner/one-time', 'PageController@Onetime')->name('Onetime');

// Route::get('/partner/one-time', 'PageController@Onetime')
//     ->template(\App\Nova\Templates\Onetime::class)
//     ->name('Onetime');

