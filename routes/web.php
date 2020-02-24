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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/autsorsing-pechati', function () {
    return view('autsorsing-pechati');
});

Route::get('/potochnoe-skanirovanie', function () {
    return view('potochnoe-skanirovanie');
});

Route::get('/kopirovanie-arhivov', function () {
    return view('kopirovanie-arhivov');
});

Route::get('/pechat-dokumentov', function () {
    return view('pechat-dokumentov');
});
Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/politika', function () {
    return view('politika');
});

Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');
