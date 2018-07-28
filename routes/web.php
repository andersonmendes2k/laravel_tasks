<?php


Route::get('/', function () {
    //return view('home');
    return redirect()->route('clients.index');
});

Route::resource('clients', 'ClientController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
