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
Route::get('/', 'PagesController@home');

//Route::get('foundation', 'PagesController@foundation');

//Route::get('audiotest', 'PagesController@audiotest');

//Route::get('crud', 'PagesController@crud');

//Route::get('forge', 'PagesController@forge');

//Route::get('slider', 'PagesController@slider');

//Route::get('search', 'PagesController@search');

Route::get('howler', 'PagesController@howler')->name('howler');

Route::get('howler-update', 'PagesController@howler_update')->name('howler-update');

/*
Route::get('test', function() {

    $test = Helper::getSermon(urlencode('A Better Salvation'));

    dd($test);

    Log::info($test); // will show in your log

    var_dump($test);

});
*/


Route::get('contribute', 'PagesController@contribute');

Route::get('login', 'PagesController@login');

Route::post('logs', 'UserController@logs');

Route::get('register', 'PagesController@register');

Route::post('store', 'UserController@store');

Route::get('home', 'PagesController@home');

Route::get('ministries', 'PagesController@ministries');

Route::get('events', 'PagesController@events');

Route::get('sermons', 'PagesController@sermons')->name('sermons');
//Route::match(array('GET', 'POST'),'sermons', 'PagesController@sermons')->name('sermons');


Route::get('services', 'PagesController@services');

Route::get('services', 'PagesController@services');

Route::get('products', 'PagesController@products');

Route::get('about', 'PagesController@about');

Route::get('faq', 'PagesController@faq');

Route::get('testimonials', 'PagesController@testimonials');

Route::get('portfolio', 'PagesController@portfolio');

Route::get('newsroom', 'PagesController@newsroom');

Route::get('contact', 'PagesController@contact');

Route::get('policy', 'PagesController@policy');

Route::get('terms', 'PagesController@terms');

Route::get('sitemap', 'PagesController@sitemap');

Route::get('support', 'PagesController@support');

Route::get('doctrine', 'PagesController@doctrine');

// https://coderwall.com/p/tr64xg/fetch-and-render-events-from-mysql-to-fullcalendar-js
// Events lists from today + 30 days in the future
Route::get('calendar-events', function () {
    // Returning array
    $cal_events = array();

    $events = Helper::getCurrentEvents();

    foreach ($events as $e) {
        $event = array(
                    "id" => $e->id,
                    "title" => $e->title,
                    "start" => $e->start,
                    "end" => $e->end,
                    "month_ABC" => $e->month_ABC,
                    "start_time" => $e->start_time,
                    "end_time" => $e->end_time,
                    "allDay" => $e->allDay,
            );

        // Merge the event array into the return array
        array_push($cal_events, $event);
    }

    return Response::json($cal_events);
});

// Get a JSON formatted playlist of the 7
// most recent sermons for HOWLER
Route::get('sermon-playlist', function () {
    // Returning array
    $playlist = array();

    $songs = Helper::getSermonPlaylist();

    foreach ($songs as $s) {
        $song = array(
                    "title" => $s->title,
                    "file" => $s->file,
                    "howl" => null,
            );

        // Merge the playlist array into the return array
        array_push($playlist, $song);
    }

    return Response::json($playlist);
});

// Get a JSON formatted playlist of the 7
// most recent sermons for HOWLER
Route::get('sermon-searchlist', function () {
    // Returning array
    $searchlist = array();

    $searchlist = Helper::getSermonSearchlist();

    return Response::json($searchlist);
});

//Working Mailtrap
//Route::get('send', 'EmailController@send');
//END Mailtrap

Route::post('send', 'EmailController@send')->name('send');
Route::get('emails.received', 'PagesController@received')->name('emails.received');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
