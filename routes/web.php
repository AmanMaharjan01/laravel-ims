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
    return view('dashboard');
});

Route::get('/schedule', function () {
    return view('scheldule');
});
//For students

Route::get('/students','StudentsController@index');

Route::get('/student/add','StudentsController@create');

Route::post('/students','StudentsController@store');

Route::get('/students/{student}/edit','StudentsController@edit');

Route::put('/students/{students}','StudentsController@update');

Route::get('/students/delete/{students}','StudentsController@destroy');


//For Teacher

Route::get('/teachers','TeachersController@index');

Route::get('/teacher/add','TeachersController@create');

Route::post('/teachers','TeachersController@store');

Route::get('/teachers/{teacher}/edit','TeachersController@edit');

Route::put('/teachers/{teachers}','TeachersController@update');

Route::get('/teachers/delete/{teachers}','TeachersController@destroy');