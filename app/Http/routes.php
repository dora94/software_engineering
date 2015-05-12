<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/home', 'PagesController@home');
Route::get('/','PagesController@index');
Route::get('/student','PagesController@student');
Route::get('/teacher','PagesController@teacher');
Route::get('/adminstaff','PagesController@adminstaff');
Route::get('/grades','PagesController@grades');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);