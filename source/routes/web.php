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

Route::get('/', 'HomeController@index');

Route::get('/company', function () {
    return view('frontend.company');
});

Route::get('/management', function () {
    return view('frontend.management');
});

Route::get('/properties/{status}', 'PropertyController@show');
Route::get('/properties/{id}/detail', 'PropertyController@detail');


Route::get('/career', function () {
    return view('frontend.career');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});
