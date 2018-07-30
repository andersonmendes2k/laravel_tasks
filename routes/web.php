<?php



Route::group(['middleware'=>['alerttasks']], function(){

Route::get('/', function () {
    return redirect()->route('clients.index');
});

Route::get('tasks/add/{id}', 'toDoTasks@store');

Route::get('tasks/delete/{id}', 'toDoTasks@destroy')->middleware('checktasks');


Route::resource('clients', 'ClientController');

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
