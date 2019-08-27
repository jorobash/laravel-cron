<?php

use Carbon\Carbon;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/render', 'uploadImage@index');
Route::post('/upload', 'uploadImage@upload');
Route::get('/getfile', 'uploadImage@getFile');

Route::get('/time', function(){
    $current = new Carbon();
    $current->timezone('Europe/Sofia');
//    echo $current."</br>";

    $notice = 60;
//    echo $current->diffForHumans()."</br>";

//    echo $new = new Carbon('First day of september 2019')."</br>";

    echo $new1 = \Carbon\CarbonImmutable::now();
    echo $new1->timezone('Europe/Sofia')."</br>";
    echo Carbon::createFromDate(2019, 9, 4, "Europe/Sofia");
    echo "</br>";
    echo $new1->daysInMonth;
    echo "</br>";
    echo $current->toDayDateTimeString();
    echo "</br>";
    echo $current->format('Y/d/m h:i:s');
    echo "</br>";
    echo $current->subMonth();
    echo "</br>";
    echo $current->addSecond($notice);
});
