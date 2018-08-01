<?php


Route::group(['middleware'=>['alerttasks','auth']], function(){

Route::get('/', function () {
    return view('home');
});

Route::get('tasks/add/{id}', 'toDoTasks@store');

Route::get('tasks/delete/{id}', 'toDoTasks@destroy')->middleware('checktasks');

Route::get('clients/pdf','ExtraActions\ClientPdf');

Route::get('clients/prev', 'ClientController@prevPDF');

Route::resource('clients', 'ClientController');

Route::resource('projects', 'ProjectController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
