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

Route::get('/', 'PagesController@getIndex');

Route::get('/messages', 'PagesController@getMessages');

Route::get('/about', 'PagesController@getAbout');

Route::get('/classes', 'PagesController@getClasses');

Route::get('/help', 'PagesController@getHelp');

Route::get('/login', 'PagesController@getLogin');

Route::get('/notifications', 'PagesController@getNotifications');

Route::get('/profile', 'PagesController@getProfile');

Route::get('/settings', 'PagesController@getSettings');

Route::get('/students', 'PagesController@getStudents');

Route::get('/subjects', 'PagesController@getSubjects');


