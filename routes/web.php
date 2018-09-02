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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'PagesController@getHome');


// Route::get('/menu', function () {
//     return view('menu');
// });
Route::get('/menu', 'PagesController@getMenu');


// Route::get('/reservations', function () {
//     return view('reservations');
// });
Route::get('/reservations', 'PagesController@getReservations');


Route::get('/messages', 'MessagesController@getMessages');

Route::post('reservations/submit', 'MessagesController@submit');
