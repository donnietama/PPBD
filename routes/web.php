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

Route::resource('classes', 'ClassesController');
Route::resource('students-filtered', 'StudentFilterController')->only('index');
Route::resource('students-files', 'StudentFileController');
Route::resource('students', 'StudentController');
Route::resource('teachers', 'TeacherController');
Route::resource('schools', 'SchoolController');
Route::resource('lessons', 'LessonController');
Route::resource('owners', 'OwnerController');
Route::resource('users', 'UserController');