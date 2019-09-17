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
    return view('welcome');
});

Route::get('/test', function () {
    return view('admin/register.index');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
// Route::get('/admin', 'HomeController@admin')->name('h');

Route::resource('tasks', 'TaskController');

Route::get('myTasks','TaskController@individual')->name('individualTasks');

Route::resource('offices', 'OfficeController');

Route::resource('staffs', 'StaffsController');

Route::resource('feedbacks', 'FeedbackController');




