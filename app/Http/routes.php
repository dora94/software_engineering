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

Route::get('/home', 'PagesController@index');
Route::get('/','PagesController@index');
Route::get('/student','PagesController@student');
Route::get('/teacher','PagesController@teacher');
Route::get('/adminstaff','PagesController@adminstaff');
Route::get('/student/grades','PagesController@grades');
Route::get('/adminstaff/students','PagesController@staffstudents');
Route::get('/teacher/courses','PagesController@teacherCourses');
Route::get('/teacher/students','PagesController@teacherStudents');
Route::get('/adminstaff/discipline','PagesController@addDiscipline');
Route::get('/teacher/addoptional','PagesController@addoptional');

Route::post('/teacher/addoptional', "TeacherController@addoptional");

Route::post('adminstaff/students','AdminStaffController@studentlist');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);