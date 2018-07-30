<?php



Route::group(['middleware'=>['alerttasks','auth']], function(){

Route::get('/', function () {
    return view('home');
});

Route::get('tasks/add/{id}', 'toDoTasks@store');

Route::get('tasks/delete/{id}', 'toDoTasks@destroy')->middleware('checktasks');


Route::resource('clients', 'ClientController');

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
