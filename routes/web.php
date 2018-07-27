<?php


Route::get('/', function () {
    return view('home');
});

Route::resource('clients', 'ClientContoller');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
